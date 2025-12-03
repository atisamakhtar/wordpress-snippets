/**
 * Global Links Manager with Elementor Dynamic Tag - Extended Version
 * Properly integrates with Elementor's dynamic system
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
    </div>
    <?php
}

// 2. Register Custom Elementor Dynamic Tags
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

// 3. Shortcodes (backup method)
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

// 4. Helper functions for templates
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