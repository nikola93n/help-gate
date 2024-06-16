<?php

/* 
 * Plugin Name:       Help Gate
 * Plugin URI:        https://nnweb.net/plugins/help-gate/
 * Description:       Help gate gives a help modul located near to the end user to reach out support when it is needed.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            NNWeb
 * Author URI:        https://nnweb.net/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       help-gate
 * Domain Path:       /languages
 */

if(!defined('ABSPATH')){
    exit;
}


if (!class_exists('Help_Gate')) {
    class Help_Gate {
        function __construct() {
            $this->define_constants();
        }

        public function define_constants(){
            define('HELP_GATE_PATH', plugin_dir_path(__FILE__));
            define('HELP_GATE_URL', plugin_dir_url(__FILE__));
            define('HELP_GATE_VERSION', '0.1');
        }

    }
}

if (class_exists('Help_Gate')){
    $help_gate = new Help_Gate();
}


