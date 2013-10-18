<?php
/*
Plugin Name: Posts Aside
Plugin URI: http://github.com/weatheredwatcher/wp-posts-asides
Description: An easy method of creating aside code in posts
Version: 1.0
Author: David Duggins
Author URI: http://weatheredwatcher.com
License: GPL2
*/

/*  Copyright 2012 David Duggins  (email : weatheredwatcher@gmail.com)

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



// add the shortcode handler for asides
function addAsides($atts, $content = null) {
        $id = $atts['id'];
        $alignment = $atts['alignment'];
        $aside = get_post($id);
        $image = get_the_post_thumbnail($id, 'thumbnail');
        $html = <<<POP

    <!-- NOTICE THE FLOAT .l-left, THIS NEEDS TO BE AN OPTION -->
<section class="article-aside editorial-list $alignment hidden-phone">
  <h3 class="article-aside-title">{$aside->post_title}</h3>
  <div class="article-img">
    <a href="#">$image</a>
  </div>
  <div class="article-txt">
  {$aside->post_content}
  </div>
</section>

POP;
        return $html;
}
add_shortcode('aside', 'addAsides');

function add_asides_button() {

     add_filter("mce_external_plugins", "add_aside_tinymce_plugin");
     add_filter('mce_buttons', 'register_aside_button');
}

function register_aside_button($buttons) {
   array_push($buttons, "|", "vz_aside");
   return $buttons;
}

// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_aside_tinymce_plugin($plugin_array) {
  $plugin_array['vz_aside'] = plugins_url('', __FILE__).'/editor_plugin.js';
   return $plugin_array;
}

//function my_refresh_mce($ver) {
//  $ver += 3;
//  return $ver;
//}







// init process for button control
add_filter( 'tiny_mce_version', 'my_refresh_mce');
add_action('init', 'add_asides_button');
//
