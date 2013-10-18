<?php
//pull in the wordpress enviroment
//set_include_path("http://".$_SERVER['SERVER_NAME']);
include("/var/www/html/vz_eguide_3/wp-load.php");

//echo $_SERVER['SERVER_NAME'];
$post_id = $_GET['postID'];
$aside = get_post($post_id);
$title = $aside->post_title;
$image = get_the_post_thumbnail($post_id, 'thumbnail');
$content = $aside->post_content;

//generate the data as json:

$html = <<<POP

    <!-- NOTICE THE FLOAT .l-left, THIS NEEDS TO BE AN OPTION -->
<section class="article-aside editorial-list hidden-phone">
  <h3 class="article-aside-title">$title</h3>
  <div class="article-img">
    <a href="#">$image</a>
  </div>
  <div class="article-txt">
  {$aside->post_content}
  </div>
</section>

POP;
        return $html;