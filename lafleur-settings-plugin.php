<?php
/**
 * Plugin Name: LaFleur Settings Plugin
 * Description: Inserts Google Tag Manager script into website head
 * Version: 1.02
 * Author: LaFleur Marketing
 */

function lf_settings_header() {
    $lf_settings_id = get_option('lf_settings_id');
    if (!empty($lf_settings_id)) {
        ?>
        <!-- Google Tag Manager -->
        <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php echo $lf_settings_id; ?>');
        </script>
        <!-- End Google Tag Manager -->
        <?php
    }
}

function lf_settings_noscript() {
    $lf_settings_id = get_option('lf_settings_id');
    if (!empty($lf_settings_id)) {
        ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $lf_settings_id; ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php
    }
}

function lf_settings_footer() {
    $lf_settings_add_mui = get_option('lf_settings_add_mui');
    if (!empty($lf_settings_add_mui)) {
        ?>
        <script>
            var lfmui=function(){var b=!1,a=function(){if(b)return!1;dataLayer.push({"minimal-user-interaction":!0});dataLayer.push({event:"minimal-user-interaction"});return fired=!0};document.addEventListener("mousemove",a,{once:!0});document.addEventListener("scroll",a,{once:!0});document.addEventListener("focus",a,{once:!0});document.addEventListener("touchstart",a,{once:!0})}();
        </script>
        <?php
    }
}


function lf_settings_plugin_init() {
    add_action('wp_head', 'lf_settings_header');
    add_action('wp_footer', 'lf_settings_footer');
    add_action('admin_menu', 'lf_settings_plugin_menu');
    add_action('admin_init', 'lf_settings_plugin_settings');
    add_action('wp_body_open', 'lf_settings_noscript');
}
add_action('plugins_loaded', 'lf_settings_plugin_init');

function lf_settings_plugin_menu() {
    add_options_page('LaFleur Plugin Settings', 'LaFleur Plugin', 'manage_options', 'lf-settings-plugin-settings', 'lf_settings_plugin_options_page');
}

function lf_settings_plugin_settings() {
    register_setting('lf-settings-plugin-settings-group', 'lf_settings_id');
    register_setting('lf-settings-plugin-settings-group', 'lf_settings_add_mui');
    add_settings_section('lf-settings-plugin-settings-section', 'Google Tag Manager Settings', 'lf_settings_plugin_settings_section_callback', 'lf-settings-plugin-settings');
    add_settings_field('my-gtm-id', 'GTM ID', 'lf_settings_plugin_id_setting_callback', 'lf-settings-plugin-settings', 'lf-settings-plugin-settings-section');
    add_settings_field('my-gtm-add-mui', 'Add Minimal User Interaction script to footer', 'lf_settings_plugin_add_mui_setting_callback', 'lf-settings-plugin-settings', 'lf-settings-plugin-settings-section');
}

function lf_settings_plugin_add_mui_setting_callback() {
    $lf_settings_add_mui = get_option('lf_settings_add_mui');
    echo '<input type="checkbox" id="lf_settings_add_mui" name="lf_settings_add_mui" value="1" ' . checked(1, $lf_settings_add_mui, false) . ' />';
    if ($lf_settings_add_mui) {
        echo '<p>To support the Minimal User Interaction event, please add a Custom Event trigger to Google Tag Manager that listens for the event name <pre>minimal-user-interaction</pre> </p>';
    }
}

function lf_settings_plugin_settings_section_callback() {
    echo '<p>Enter your Google Tag Manager ID below:</p>';
}

function lf_settings_plugin_id_setting_callback() {
    $lf_settings_id = get_option('lf_settings_id');
    echo '<input type="text" id="lf_settings_id" name="lf_settings_id" value="' . $lf_settings_id . '" />';
}

function lf_settings_plugin_options_page() {
    ?>
    <div class="wrap">
        <h2>Google Tag Manager Settings</h2>
        <form method="post" action="options.php">
            <?php settings_fields('lf-settings-plugin-settings-group'); ?>
            <?php do_settings_sections('lf-settings-plugin-settings'); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}


?>


