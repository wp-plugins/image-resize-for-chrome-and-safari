<?php
/*
Plugin Name: Image Resize for Chrome and Safari
Plugin URI: http://jamesdbruner.com
Description: Adds handle around images so you can resize them live in Chrome, Safari and other webkit browsers!
Author: James Bruner
Version: 1.0
Author URI: http://jamesdbruner.com
*/

/*  Copyright 2012  James Bruner  (email : jamesdbruner@gmail.com)

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

function tinymce_editor_settings($settings) {
	$settings['webkit_fake_resize'] = 1;
	return $settings;
}
add_filter('tiny_mce_before_init', 'tinymce_editor_settings');