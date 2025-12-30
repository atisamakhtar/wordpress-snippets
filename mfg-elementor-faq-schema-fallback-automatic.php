<?php

/**
 * Name: FAQ Schema (Output Buffer) — Sitewide (Elementor/ACF/Theme Builder)
 * Purpose: Auto-generate FAQ JSON-LD anywhere an Elementor accordion appears (Pages, Posts, CPTs)
 * Scope: Frontend Only
 */

add_action('template_redirect', function () {
    // Only render on singular content (posts/pages/CPT singles)
    if ( ! is_singular() ) return;

    // DOM extension required
    if ( ! class_exists('DOMDocument') ) return;

    // Start output buffering to capture final HTML after all templates/shortcodes render
    ob_start(function ($html) {
        // 0) If FAQ schema already exists (by plugin/Elementor toggle), do nothing
        if ( stripos($html, '"@type":"FAQPage"') !== false || stripos($html, 'faq-schema-jsonld') !== false ) {
            return $html;
        }

        // 1) Quick presence check for Elementor FAQ markup (Nested or Classic)
        if (
            stripos($html, 'e-n-accordion') === false &&         // Nested Accordion signature
            stripos($html, 'elementor-accordion') === false      // Classic Accordion signature
        ) {
            return $html; // No FAQ widget in final HTML
        }

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        $xpath = new DOMXPath($dom);

        // 2) Collect FAQ items from BOTH widget types
        $items = [];
        $MAX_ITEMS = 50;          // Hard cap for safety
        $MAX_ANSWER_CHARS = 5000; // Trim overly long answers

        // 2a) Nested Accordion: <div class="e-n-accordion"> → <details class="e-n-accordion-item">
        $nestedItems = $xpath->query('//div[contains(@class,"e-n-accordion")]//details[contains(@class,"e-n-accordion-item")]');
        if ($nestedItems && $nestedItems->length) {
            foreach ($nestedItems as $item) {
                // Question
                $qNode = $xpath->query('.//summary//div[contains(@class,"e-n-accordion-item-title-text")]', $item)->item(0);
                $qText = $qNode ? trim(preg_replace('/\s+/', ' ', $qNode->textContent)) : '';

                // Answer: first Text Editor container inside this item; fallbacks included
                $aNode = $xpath->query('.//div[contains(@class,"elementor-widget-text-editor")]//div[contains(@class,"elementor-widget-container")]', $item)->item(0);
                if ( ! $aNode ) {
                    $aNode = $xpath->query('.//div[contains(@class,"elementor-widget-container")]', $item)->item(0);
                }
                $aHtml = $aNode ? $dom->saveHTML($aNode) : '';
                $aText = trim(preg_replace('/\s+/', ' ', wp_strip_all_tags($aHtml)));

                if ($qText !== '' && $aText !== '') {
                    if (strlen($aText) > $MAX_ANSWER_CHARS) $aText = substr($aText, 0, $MAX_ANSWER_CHARS);
                    $items[] = [
                        '@type' => 'Question',
                        'name'  => $qText,
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text'  => $aText,
                        ],
                    ];
                    if (count($items) >= $MAX_ITEMS) break;
                }
            }
        }

        // 2b) Classic Accordion: <div class="elementor-accordion"> → .elementor-accordion-item with title/content
        if (count($items) < $MAX_ITEMS) {
            $classicItems = $xpath->query('//*[@class and contains(@class,"elementor-accordion")]//*[contains(@class,"elementor-accordion-item")]');
            if ($classicItems && $classicItems->length) {
                foreach ($classicItems as $item) {
                    // Question
                    $qNode = $xpath->query('.//*[contains(@class,"elementor-tab-title")]', $item)->item(0);
                    $qText = $qNode ? trim(preg_replace('/\s+/', ' ', $qNode->textContent)) : '';

                    // Answer
                    $aNode = $xpath->query('.//*[contains(@class,"elementor-tab-content")]', $item)->item(0);
                    if ( ! $aNode ) {
                        $aNode = $xpath->query('.//div[contains(@class,"elementor-widget-container")]', $item)->item(0);
                    }
                    $aHtml = $aNode ? $dom->saveHTML($aNode) : '';
                    $aText = trim(preg_replace('/\s+/', ' ', wp_strip_all_tags($aHtml)));

                    if ($qText !== '' && $aText !== '') {
                        if (strlen($aText) > $MAX_ANSWER_CHARS) $aText = substr($aText, 0, $MAX_ANSWER_CHARS);
                        $items[] = [
                            '@type' => 'Question',
                            'name'  => $qText,
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text'  => $aText,
                            ],
                        ];
                        if (count($items) >= $MAX_ITEMS) break;
                    }
                }
            }
        }

        if (empty($items)) {
            return $html; // Nothing extracted
        }

        // 3) Build JSON-LD
        $schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => $items,
        ];
        $json = '<script type="application/ld+json" id="faq-schema-jsonld">' .
                wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) .
                '</script>';

        // 4) Inject into <head> if possible, else before </body>, else append
        if ( stripos($html, '</head>') !== false ) {
            $html = str_ireplace('</head>', $json . "\n</head>", $html);
        } elseif ( stripos($html, '</body>') !== false ) {
            $html = str_ireplace('</body>', $json . "\n</body>", $html);
        } else {
            $html .= $json;
        }

        return $html;
    });
});