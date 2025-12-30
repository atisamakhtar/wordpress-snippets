/**
 * Remove invalid schema properties via JavaScript
 * Runs on every page load
 */
(function() {
    'use strict';

    function cleanAllSchemas() {
        let cleanedCount = 0;

        document.querySelectorAll('script[type="application/ld+json"]').forEach(function(script) {
            try {
                let schema = JSON.parse(script.textContent);
                let wasModified = false;

                // Remove from root level
                if (schema.schema_display_title !== undefined) {
                    delete schema.schema_display_title;
                    wasModified = true;
                }
                if (schema.schema_display_subtitle !== undefined) {
                    delete schema.schema_display_subtitle;
                    wasModified = true;
                }

                // Remove from @graph array if present
                if (schema['@graph'] && Array.isArray(schema['@graph'])) {
                    schema['@graph'].forEach(function(item) {
                        if (item.schema_display_title !== undefined) {
                            delete item.schema_display_title;
                            wasModified = true;
                        }
                        if (item.schema_display_subtitle !== undefined) {
                            delete item.schema_display_subtitle;
                            wasModified = true;
                        }
                    });
                }

                if (wasModified) {
                    script.textContent = JSON.stringify(schema);
                    cleanedCount++;
                }

            } catch(e) {
                console.error('Schema cleanup error:', e);
            }
        });

        if (cleanedCount > 0) {
            console.log('✅ Cleaned ' + cleanedCount + ' schemas');
        }
    }

    // Run multiple times to catch all injection points
    cleanAllSchemas(); // Immediate

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', cleanAllSchemas);
    } else {
        cleanAllSchemas();
    }

    window.addEventListener('load', function() {
        cleanAllSchemas();
        setTimeout(cleanAllSchemas, 500);
        setTimeout(cleanAllSchemas, 1500);
    });

    // Watch for new schemas being added
    let observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            mutation.addedNodes.forEach(function(node) {
                if (node.nodeName === 'SCRIPT' &&
                    node.getAttribute('type') === 'application/ld+json') {
                    setTimeout(cleanAllSchemas, 50);
                }
            });
        });
    });

    observer.observe(document.documentElement, {
        childList: true,
        subtree: true
    });
})();