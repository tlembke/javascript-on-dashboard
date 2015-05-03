<?php

/* Plugin Name: Force JavaScript on WordPress admin Post page
 * Plugin URI: https://github.com/Shortwave-Web-Solutions-Ltd/force-js-on-wp-admin-post-page
 * Description: Includes a JavaScript file on the WordPress admin Post page.
 * Author: Shortwave Web Solutions Ltd
 * Version: 0.1
 * Author URI: http://shortwave.co.nz 
*/

/*	Copyright 2015  SHORTWAVE WEB SOLUTIONS LTD  (email : email@shortwave.co.nz)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'admin_enqueue_scripts', 'my_enqueue' );

function my_enqueue($hook) {
	
	$pages = array('post.php','post-new.php');
	
	if (in_array($hook, $pages)) {
		wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) 
			. 'force-js-on-wp-admin-post-page.js',array(),FALSE,TRUE);
	} else {
		return;
	}
		
}

?>