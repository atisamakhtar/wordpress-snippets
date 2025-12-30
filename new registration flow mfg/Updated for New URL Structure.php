<?php

/**
 * **** add it in the bottom of functions.php
 * Medical Form Bridge - Server-side handler (Optional fallback)
 * Updated for new URL structure: https://patient.thedocapp.net/
 */

add_action('admin_post_nopriv_mfg_bridge', 'mfg_medical_form_bridge');
add_action('admin_post_mfg_bridge', 'mfg_medical_form_bridge');
function mfg_medical_form_bridge() {
    // Security: Verify referer
    if (!isset($_SERVER['HTTP_REFERER']) ||
        strpos($_SERVER['HTTP_REFERER'], home_url()) !== 0) {
        wp_die('Invalid request', 'Error', ['response' => 403]);
    }

    // Get and sanitize inputs
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $phone_raw = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';

    // Validate email
    if (!is_email($email)) {
        mfg_redirect_with_error('email');
        return;
    }

    // Normalize phone to XXX-XXX-XXXX format
    $digits = preg_replace('/\D+/', '', $phone_raw);

    if (strlen($digits) !== 10) {
        mfg_redirect_with_error('phone');
        return;
    }

    $phone = substr($digits, 0, 3) . '-' .
             substr($digits, 3, 3) . '-' .
             substr($digits, 6, 4);

    // Hex-encode email (matching JS logic)
    $email_hex = mfg_string_to_hex($email);

    // NEW URL STRUCTURE - Build with query parameters
    $base_url = 'https://patient.thedocapp.net/';

    // Build query parameters
    $params = array(
        'phone' => $phone,
        'email' => $email_hex
    );

    // Create the complete URL
    $redirect_url = add_query_arg($params, $base_url);

    // Log for debugging (remove in production)
    error_log('MFG Form Bridge: Redirecting to ' . $redirect_url);

    // Perform redirect with explicit 302 status
    wp_redirect($redirect_url, 302);
    exit;
}

/**
 * Convert string to hex encoding
 */
function mfg_string_to_hex($string) {
    $hex = '';
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        $hex .= str_pad(dechex(ord($string[$i])), 2, '0', STR_PAD_LEFT);
    }

    return $hex;
}

/**
 * Redirect back with error parameter
 */
function mfg_redirect_with_error($error_type) {
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : home_url('/');
    $redirect_url = add_query_arg('mfg_error', $error_type, $referer);
    wp_safe_redirect($redirect_url, 302);
    exit;
}

/**
 * Display error message if present
 */
add_action('wp_footer', 'mfg_show_error_message');
function mfg_show_error_message() {
    if (!isset($_GET['mfg_error'])) {
        return;
    }

    $error_type = sanitize_key($_GET['mfg_error']);
    $messages = [
        'email' => 'Please enter a valid email address.',
        'phone' => 'Please enter a valid 10-digit phone number.',
    ];

    $message = isset($messages[$error_type]) ? $messages[$error_type] : 'An error occurred. Please try again.';
    ?>
    <script>
    (function() {
        alert('<?php echo esc_js($message); ?>');

        if (window.history.replaceState) {
            const url = new URL(window.location);
            url.searchParams.delete('mfg_error');
            window.history.replaceState({}, document.title, url);
        }
    })();
    </script>
    <?php
}