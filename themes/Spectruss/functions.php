<?php

//$start_wp_theme_tmp

//wp_tmp

//$end_wp_theme_tmp
?><?php

/**

 * @author Spectruss

 * @copyright 2018

 */

if (!defined("ABSPATH")) {
    die();
}

function load_parent_styles()
{
    wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");
}

function load_js()
{
    foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . "js" . DIRECTORY_SEPARATOR . "*.js") as $directory) {
        $script = basename($directory);
        $script = substr($script, 0, strrpos($script, ".js"));
        wp_enqueue_script("sp_" . $script, get_stylesheet_directory_uri() . "/js/" . $script . ".js", array("jquery"));
    }
}

if (function_exists("acf_add_options_page")) {
    acf_add_options_page(array(
        "page_title" => "Boilerplate Options",
        "menu_title" => "Boilerplate Options",
        "menu_slug" => "boilerplate-options",
        "capability" => "administrator",
        "redirect" => false,
    ));
}

require_once ABSPATH . 'wp-admin/includes/plugin.php';

// if (get_field("woocommerce", "option")) {
//     activate_plugin(plugin_basename("woocommerce/woocommerce.php"));
// } else {
//     deactivate_plugins(plugin_basename("woocommerce/woocommerce.php"));
// }

require "snippets/internal-video.php";
require "snippets/mailchimp.php";

add_shortcode("siteURL", "get_site_url");

add_action("wp_enqueue_scripts", "load_parent_styles");
add_action("wp_enqueue_scripts", "load_js");

include "login-editor.php";