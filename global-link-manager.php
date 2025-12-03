/**
 * Global Links Manager with Elementor Dynamic Tag & ACF Integration
 * Properly integrates with Elementor's dynamic system and ACF
 */

// 1. Create Settings Page
add_action('admin_menu', 'create_global_links_settings_page');
function create_global_links_settings_page() {
    add_menu_page(
        'Global Links',
        'Global Links',
        'edit_posts',
        'global-links-settings',
        'render_global_links_settings_page',
        'dashicons-admin-links',
        60
    );
}

function render_global_links_settings_page() {
    if (isset($_POST['patient_portal_link']) && check_admin_referer('save_global_links', 'global_links_nonce')) {
        update_option('patient_portal_link', esc_url_raw($_POST['patient_portal_link']));
        update_option('patient_portal_jacksonville', esc_url_raw($_POST['patient_portal_jacksonville']));
        update_option('patient_portal_melbourne', esc_url_raw($_POST['patient_portal_melbourne']));
        update_option('patient_portal_naples', esc_url_raw($_POST['patient_portal_naples']));
        update_option('patient_portal_sarasota', esc_url_raw($_POST['patient_portal_sarasota']));
        update_option('patient_portal_stpete', esc_url_raw($_POST['patient_portal_stpete']));
        update_option('patient_portal_hialeah', esc_url_raw($_POST['patient_portal_hialeah']));
        update_option('patient_portal_fortmyers', esc_url_raw($_POST['patient_portal_fortmyers']));

        // Clear Elementor cache when link is updated
        if (class_exists('\Elementor\Plugin')) {
            \Elementor\Plugin::$instance->files_manager->clear_cache();
        }

        echo '<div class="notice notice-success is-dismissible"><p><strong>Links saved successfully!</strong></p></div>';
    }

    $patient_link = get_option('patient_portal_link', 'https://patient.thedocapp.net/');
    $jacksonville = get_option('patient_portal_jacksonville', 'https://patient.thedocapp.net/?doctorId=41275');
    $melbourne = get_option('patient_portal_melbourne', 'https://patient.thedocapp.net/?doctorId=17590');
    $naples = get_option('patient_portal_naples', 'https://patient.thedocapp.net/?doctorId=5062');
    $sarasota = get_option('patient_portal_sarasota', 'https://patient.thedocapp.net/?doctorId=5062');
    $stpete = get_option('patient_portal_stpete', 'https://patient.thedocapp.net/?doctorId=45993');
    $hialeah = get_option('patient_portal_hialeah', 'https://patient.thedocapp.net/?doctorId=41399');
    $fortmyers = get_option('patient_portal_fortmyers', 'https://patient.thedocapp.net/?doctorId=57312');
    ?>
    <div class="wrap">
        <h1>Global Links Manager</h1>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>Patient Portal Links</h2>

            <form method="post" action="">
                <?php wp_nonce_field('save_global_links', 'global_links_nonce'); ?>

                <table class="form-table">
                    <tr>
                        <th scope="row">
                            <label for="patient_portal_link">Default Portal URL</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_link"
                                name="patient_portal_link"
                                value="<?php echo esc_attr($patient_link); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                            <p class="description">Default patient portal link.</p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_jacksonville">Jacksonville</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_jacksonville"
                                name="patient_portal_jacksonville"
                                value="<?php echo esc_attr($jacksonville); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_melbourne">Melbourne</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_melbourne"
                                name="patient_portal_melbourne"
                                value="<?php echo esc_attr($melbourne); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_naples">Naples</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_naples"
                                name="patient_portal_naples"
                                value="<?php echo esc_attr($naples); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_sarasota">Sarasota</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_sarasota"
                                name="patient_portal_sarasota"
                                value="<?php echo esc_attr($sarasota); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_stpete">St Pete</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_stpete"
                                name="patient_portal_stpete"
                                value="<?php echo esc_attr($stpete); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_hialeah">Hialeah</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_hialeah"
                                name="patient_portal_hialeah"
                                value="<?php echo esc_attr($hialeah); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <label for="patient_portal_fortmyers">Fort Myers</label>
                        </th>
                        <td>
                            <input
                                type="url"
                                id="patient_portal_fortmyers"
                                name="patient_portal_fortmyers"
                                value="<?php echo esc_attr($fortmyers); ?>"
                                class="regular-text code"
                                required
                                style="width: 100%;"
                            />
                        </td>
                    </tr>
                </table>

                <?php submit_button('Save All Links'); ?>
            </form>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>How to Use in Elementor</h2>
            <ol>
                <li>Edit your page in Elementor</li>
                <li>Select a Button widget</li>
                <li>In the <strong>Link</strong> field, click the <strong>Dynamic Tags icon</strong> (🗄️)</li>
                <li>Go to <strong>Site</strong> section</li>
                <li>Select the appropriate location link (e.g., "Jacksonville Portal Link")</li>
                <li>Update your page</li>
            </ol>

            <h3>Available Dynamic Tags:</h3>
            <ul>
                <li><strong>Patient Portal Link</strong> - <?php echo esc_html($patient_link); ?></li>
                <li><strong>Jacksonville Portal Link</strong> - <?php echo esc_html($jacksonville); ?></li>
                <li><strong>Melbourne Portal Link</strong> - <?php echo esc_html($melbourne); ?></li>
                <li><strong>Naples Portal Link</strong> - <?php echo esc_html($naples); ?></li>
                <li><strong>Sarasota Portal Link</strong> - <?php echo esc_html($sarasota); ?></li>
                <li><strong>St Pete Portal Link</strong> - <?php echo esc_html($stpete); ?></li>
                <li><strong>Hialeah Portal Link</strong> - <?php echo esc_html($hialeah); ?></li>
                <li><strong>Fort Myers Portal Link</strong> - <?php echo esc_html($fortmyers); ?></li>
            </ul>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>📝 Shortcode Usage (WYSIWYG Compatible)</h2>

            <h3>Method 1: Simple URL Shortcodes</h3>
            <p>Use these in WYSIWYG editor or anywhere in content:</p>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
[patient_portal_link]
[jacksonville_portal_link]
[melbourne_portal_link]
[naples_portal_link]
[sarasota_portal_link]
[stpete_portal_link]
[hialeah_portal_link]
[fortmyers_portal_link]</pre>

            <h3>Method 2: Universal Shortcode with Parameter</h3>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
[portal_link location="jacksonville"]
[portal_link location="melbourne"]
[portal_link location="naples"]
[portal_link location="default"]</pre>

            <h3>Method 3: Ready-Made Button (HTML Link)</h3>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
[portal_button location="jacksonville"]Book Appointment[/portal_button]
[portal_button location="melbourne" class="btn btn-primary"]Patient Portal[/portal_button]
[portal_button location="naples" target="_self" text="Click Here"]</pre>

            <h3>Method 4: Inside HTML (WYSIWYG Editor)</h3>
            <p>Switch to Text/HTML mode in WYSIWYG and use:</p>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
&lt;a href="[jacksonville_portal_link]"&gt;Visit Jacksonville Portal&lt;/a&gt;

&lt;a href="[portal_link location='melbourne']" class="btn"&gt;Book Now&lt;/a&gt;

&lt;button onclick="window.location='[naples_portal_link]'"&gt;Go to Portal&lt;/button&gt;</pre>

            <h3>Method 5: In PHP Templates</h3>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
// Echo URL directly
echo get_jacksonville_portal_link();

// Store in variable
$portal_url = get_melbourne_portal_link();
$link = '&lt;a href="' . $portal_url . '"&gt;Portal&lt;/a&gt;';

// Use with do_shortcode
$url = do_shortcode('[portal_link location="naples"]');
echo '&lt;a href="' . $url . '"&gt;Naples Portal&lt;/a&gt;';</pre>

            <h3>Method 6: Dynamic with ACF Field</h3>
            <p>Get location from ACF field and use it dynamically:</p>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
// In PHP template
$user_location = get_field('user_location'); // Returns "jacksonville"
$portal_url = do_shortcode('[portal_link location="' . $user_location . '"]');
echo '&lt;a href="' . $portal_url . '"&gt;Your Local Portal&lt;/a&gt;';</pre>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>💡 Real-World Examples</h2>

            <h3>Example 1: WYSIWYG Text Link</h3>
            <pre style="background: #f5f5f5; padding: 15px;">
Visit our &lt;a href="[jacksonville_portal_link]"&gt;Jacksonville Patient Portal&lt;/a&gt; to book.</pre>

            <h3>Example 2: Dynamic Button in Page Builder</h3>
            <pre style="background: #f5f5f5; padding: 15px;">
[portal_button location="melbourne" class="elementor-button"]Access Portal[/portal_button]</pre>

            <h3>Example 3: Store in JavaScript Variable</h3>
            <pre style="background: #f5f5f5; padding: 15px;">
&lt;script&gt;
var portalUrl = '[naples_portal_link]';
document.getElementById('myBtn').href = portalUrl;
&lt;/script&gt;</pre>

            <h3>Example 4: PHP with Conditions</h3>
            <pre style="background: #f5f5f5; padding: 15px;">
$location = $_GET['city'] ?? 'default';
$portal = do_shortcode('[portal_link location="' . $location . '"]');
echo '&lt;a href="' . $portal . '"&gt;Portal&lt;/a&gt;';</pre>
        </div>

        <div class="card" style="max-width: 800px; margin-top: 20px;">
            <h2>ACF Integration</h2>
            <p>These links are also available as ACF Options fields. You can access them in your templates using:</p>
            <pre style="background: #f5f5f5; padding: 15px; overflow-x: auto;">
// Get links in PHP templates
$default_link = get_field('patient_portal_link', 'option');
$jacksonville = get_field('patient_portal_jacksonville', 'option');
$melbourne = get_field('patient_portal_melbourne', 'option');
// ... and so on for all locations</pre>
            <p><strong>ACF Options Page:</strong> Go to <strong>Custom Fields → Options</strong> to manage these links via ACF interface.</p>
        </div>
    </div>
    <?php
}

// 2. Register ACF Options Page and Fields
add_action('acf/init', 'register_global_links_acf_options');
function register_global_links_acf_options() {
    if (function_exists('acf_add_options_page')) {

        // Add options page
        acf_add_options_page(array(
            'page_title'    => 'Portal Links (ACF)',
            'menu_title'    => 'Portal Links (ACF)',
            'menu_slug'     => 'portal-links-acf',
            'capability'    => 'edit_posts',
            'parent_slug'   => 'global-links-settings',
            'icon_url'      => 'dashicons-admin-links',
            'redirect'      => false
        ));
    }
}

// Sync WordPress options with ACF fields
add_action('acf/init', 'register_portal_links_acf_fields');
function register_portal_links_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {

        acf_add_local_field_group(array(
            'key' => 'group_portal_links',
            'title' => 'Patient Portal Links',
            'fields' => array(
                array(
                    'key' => 'field_patient_portal_link',
                    'label' => 'Default Portal Link',
                    'name' => 'patient_portal_link',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_link', 'https://patient.thedocapp.net/'),
                    'placeholder' => 'https://patient.thedocapp.net/',
                ),
                array(
                    'key' => 'field_patient_portal_jacksonville',
                    'label' => 'Jacksonville Portal Link',
                    'name' => 'patient_portal_jacksonville',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_jacksonville', 'https://patient.thedocapp.net/?doctorId=41275'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=41275',
                ),
                array(
                    'key' => 'field_patient_portal_melbourne',
                    'label' => 'Melbourne Portal Link',
                    'name' => 'patient_portal_melbourne',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_melbourne', 'https://patient.thedocapp.net/?doctorId=17590'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=17590',
                ),
                array(
                    'key' => 'field_patient_portal_naples',
                    'label' => 'Naples Portal Link',
                    'name' => 'patient_portal_naples',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_naples', 'https://patient.thedocapp.net/?doctorId=5062'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=5062',
                ),
                array(
                    'key' => 'field_patient_portal_sarasota',
                    'label' => 'Sarasota Portal Link',
                    'name' => 'patient_portal_sarasota',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_sarasota', 'https://patient.thedocapp.net/?doctorId=5062'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=5062',
                ),
                array(
                    'key' => 'field_patient_portal_stpete',
                    'label' => 'St Pete Portal Link',
                    'name' => 'patient_portal_stpete',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_stpete', 'https://patient.thedocapp.net/?doctorId=45993'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=45993',
                ),
                array(
                    'key' => 'field_patient_portal_hialeah',
                    'label' => 'Hialeah Portal Link',
                    'name' => 'patient_portal_hialeah',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_hialeah', 'https://patient.thedocapp.net/?doctorId=41399'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=41399',
                ),
                array(
                    'key' => 'field_patient_portal_fortmyers',
                    'label' => 'Fort Myers Portal Link',
                    'name' => 'patient_portal_fortmyers',
                    'type' => 'url',
                    'default_value' => get_option('patient_portal_fortmyers', 'https://patient.thedocapp.net/?doctorId=57312'),
                    'placeholder' => 'https://patient.thedocapp.net/?doctorId=57312',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'portal-links-acf',
                    ),
                ),
            ),
        ));
    }
}

// Sync ACF updates back to WordPress options
add_action('acf/save_post', 'sync_acf_to_wp_options', 20);
function sync_acf_to_wp_options($post_id) {
    // Only run on options pages
    if ($post_id !== 'options') {
        return;
    }

    $fields = array(
        'patient_portal_link',
        'patient_portal_jacksonville',
        'patient_portal_melbourne',
        'patient_portal_naples',
        'patient_portal_sarasota',
        'patient_portal_stpete',
        'patient_portal_hialeah',
        'patient_portal_fortmyers'
    );

    foreach ($fields as $field) {
        $value = get_field($field, 'option');
        if ($value) {
            update_option($field, $value);
        }
    }

    // Clear Elementor cache
    if (class_exists('\Elementor\Plugin')) {
        \Elementor\Plugin::$instance->files_manager->clear_cache();
    }
}

// 3. Register Custom Elementor Dynamic Tags
add_action('elementor/dynamic_tags/register', function($dynamic_tags_manager) {

    // Base class for all portal link tags
    class Patient_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {

        public function get_name() {
            return 'patient-portal-link';
        }

        public function get_title() {
            return 'Patient Portal Link';
        }

        public function get_group() {
            return 'site';
        }

        public function get_categories() {
            return [
                \Elementor\Modules\DynamicTags\Module::URL_CATEGORY,
            ];
        }

        protected function register_controls() {
            // No controls needed
        }

        public function render() {
            $link = get_option('patient_portal_link', 'https://patient.thedocapp.net/');
            echo esc_url($link);
        }
    }

    // Jacksonville
    class Jacksonville_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'jacksonville-portal-link'; }
        public function get_title() { return 'Jacksonville Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_jacksonville', 'https://patient.thedocapp.net/?doctorId=41275'));
        }
    }

    // Melbourne
    class Melbourne_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'melbourne-portal-link'; }
        public function get_title() { return 'Melbourne Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_melbourne', 'https://patient.thedocapp.net/?doctorId=17590'));
        }
    }

    // Naples
    class Naples_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'naples-portal-link'; }
        public function get_title() { return 'Naples Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_naples', 'https://patient.thedocapp.net/?doctorId=5062'));
        }
    }

    // Sarasota
    class Sarasota_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'sarasota-portal-link'; }
        public function get_title() { return 'Sarasota Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_sarasota', 'https://patient.thedocapp.net/?doctorId=5062'));
        }
    }

    // St Pete
    class StPete_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'stpete-portal-link'; }
        public function get_title() { return 'St Pete Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_stpete', 'https://patient.thedocapp.net/?doctorId=45993'));
        }
    }

    // Hialeah
    class Hialeah_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'hialeah-portal-link'; }
        public function get_title() { return 'Hialeah Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_hialeah', 'https://patient.thedocapp.net/?doctorId=41399'));
        }
    }

    // Fort Myers
    class FortMyers_Portal_Link_Tag extends \Elementor\Core\DynamicTags\Tag {
        public function get_name() { return 'fortmyers-portal-link'; }
        public function get_title() { return 'Fort Myers Portal Link'; }
        public function get_group() { return 'site'; }
        public function get_categories() { return [\Elementor\Modules\DynamicTags\Module::URL_CATEGORY]; }
        protected function register_controls() {}
        public function render() {
            echo esc_url(get_option('patient_portal_fortmyers', 'https://patient.thedocapp.net/?doctorId=57312'));
        }
    }

    // Register all tags
    $dynamic_tags_manager->register(new Patient_Portal_Link_Tag());
    $dynamic_tags_manager->register(new Jacksonville_Portal_Link_Tag());
    $dynamic_tags_manager->register(new Melbourne_Portal_Link_Tag());
    $dynamic_tags_manager->register(new Naples_Portal_Link_Tag());
    $dynamic_tags_manager->register(new Sarasota_Portal_Link_Tag());
    $dynamic_tags_manager->register(new StPete_Portal_Link_Tag());
    $dynamic_tags_manager->register(new Hialeah_Portal_Link_Tag());
    $dynamic_tags_manager->register(new FortMyers_Portal_Link_Tag());
});

// 4. Shortcodes (backup method)
add_shortcode('patient_portal_link', function() {
    return esc_url(get_option('patient_portal_link', 'https://patient.thedocapp.net/'));
});
add_shortcode('jacksonville_portal_link', function() {
    return esc_url(get_option('patient_portal_jacksonville', 'https://patient.thedocapp.net/?doctorId=41275'));
});
add_shortcode('melbourne_portal_link', function() {
    return esc_url(get_option('patient_portal_melbourne', 'https://patient.thedocapp.net/?doctorId=17590'));
});
add_shortcode('naples_portal_link', function() {
    return esc_url(get_option('patient_portal_naples', 'https://patient.thedocapp.net/?doctorId=5062'));
});
add_shortcode('sarasota_portal_link', function() {
    return esc_url(get_option('patient_portal_sarasota', 'https://patient.thedocapp.net/?doctorId=5062'));
});
add_shortcode('stpete_portal_link', function() {
    return esc_url(get_option('patient_portal_stpete', 'https://patient.thedocapp.net/?doctorId=45993'));
});
add_shortcode('hialeah_portal_link', function() {
    return esc_url(get_option('patient_portal_hialeah', 'https://patient.thedocapp.net/?doctorId=41399'));
});
add_shortcode('fortmyers_portal_link', function() {
    return esc_url(get_option('patient_portal_fortmyers', 'https://patient.thedocapp.net/?doctorId=57312'));
});

// 5. Helper functions for templates
function get_patient_portal_link() {
    return esc_url(get_option('patient_portal_link', 'https://patient.thedocapp.net/'));
}
function get_jacksonville_portal_link() {
    return esc_url(get_option('patient_portal_jacksonville', 'https://patient.thedocapp.net/?doctorId=41275'));
}
function get_melbourne_portal_link() {
    return esc_url(get_option('patient_portal_melbourne', 'https://patient.thedocapp.net/?doctorId=17590'));
}
function get_naples_portal_link() {
    return esc_url(get_option('patient_portal_naples', 'https://patient.thedocapp.net/?doctorId=5062'));
}
function get_sarasota_portal_link() {
    return esc_url(get_option('patient_portal_sarasota', 'https://patient.thedocapp.net/?doctorId=5062'));
}
function get_stpete_portal_link() {
    return esc_url(get_option('patient_portal_stpete', 'https://patient.thedocapp.net/?doctorId=45993'));
}
function get_hialeah_portal_link() {
    return esc_url(get_option('patient_portal_hialeah', 'https://patient.thedocapp.net/?doctorId=41399'));
}
function get_fortmyers_portal_link() {
    return esc_url(get_option('patient_portal_fortmyers', 'https://patient.thedocapp.net/?doctorId=57312'));
}