# Force JavaScript on WordPress admin Post page

	Copyright 2015  SHORTWAVE WEB SOLUTIONS LTD  (email : email@shortwave.co.nz)

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
 

Purpose
-------

Includes custom JavaScript in the footer of the WordPress post add/edit (and optionally other) admin pages. 
 
    
Installing
----------

1. Download these files to a new folder in your plugins directory: wp-content/plugins/force-js-on-wp-admin-post-page-master
2. Edit the file via wp-admin/plugins.php - add your JavaScript code to force-js-on-wp-admin-post-page.js 
3. Your script will now run when you create a new post or edit an existing post.

NOTE: You can use this plugin on other admin pages too, by modifying the following line in force-js-on-wp-admin-post-page.php:
	$pages = array('post.php','post-new.php');