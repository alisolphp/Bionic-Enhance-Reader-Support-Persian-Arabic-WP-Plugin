<?php
/**
 * bionic-enhance-reader-support-persian-arabic plugin
 *
 * Activate this plugin then:
 * Every h1,h2,h3,h4,h5,h6,p tags will be converted to bionic text automatically.
 * Enjoy it!
 *
 * @link              https://github.com/alisolphp
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Bionic Enhance Reader (Support Persian Arabic)
 * Plugin URI:        https://github.com/alisolphp/Bionic-Enhance-Reader-Support-Persian-Arabic-WP-Plugin/
 * Description:       WordPress plugin to make bionic all posts on your website to enhance reading speed and quality.
 * Version:           1.0.0
 * Author:            Alisol
 * Author URI:        https://github.com/alisolphp
 * License:           GPLv3
 * License URI:       http://www.gnu.org/licenses/gpl.html
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.

 */

// TODO for next version: 
    // add option for users to choose using bionicText.js with .bionicText class 
    // or using bionicText.all.js for applying on all paragraphs.


function load_css_js() {
    // wp_enqueue_style( 'gdgt-base', get_template_directory_uri() . '/css/gdgt-base.css', false, NULL, 'all' );
    // wp_enqueue_style( 'gdgt-icon', get_template_directory_uri() . '/icons/css/gdgt.css', false, NULL, 'all' );

    wp_register_script( 'bionicText', '/wp-content/plugins/bionic-enhance-reader-support-persian-arabic/js/bionicText.all.js' , array(), false, true );
    wp_enqueue_script( 'bionicText' );
}

add_action( 'wp_enqueue_scripts', 'load_css_js' );
