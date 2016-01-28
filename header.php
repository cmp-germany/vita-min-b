<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body class="vmb">
    <div class="container-fluid" >
      <div class="navmenu navmenu-default navmenu-inverse navmenu-fixed-right offcanvas">
        <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"/></a>



        <ul class="nav navmenu-nav">
          <li><a href="#" ><img src="<?= get_template_directory_uri(); ?>/gfx/icons/1453752054_user-admin.png" alt="" /> Bewerbervideos</a></li>

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= get_template_directory_uri(); ?>/gfx/icons/1453752061_home.png" alt="" /> Corporate Film <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="#">Imagefilme</a></li>
              <li><a href="#">Teaser</a></li>
              <li><a href="#">Tutorial Videos</a></li>
              <li><a href="#">Video FAQ's</a></li>
              <li><a href="#">Produkt Präsentationen</a></li>
            </ul>
          </li>

          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= get_template_directory_uri(); ?>/gfx/icons/1453752057_earth.png" alt="" /> Studio Produktionen <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="#">Studio Broadcast</a></li>
              <li><a href="#">Video Newsletter</a></li>
            </ul>
          </li>

          <li><a href="#" ><img src="<?= get_template_directory_uri(); ?>/gfx/icons/1453752099_notepad.png" alt="" /> Shop - Systeme</a></li>
        </ul>



        <!-- <ul class="nav navmenu-nav">
          <li><a href="../navmenu/">Slide in</a></li>
          <li class="active"><a href="./">Push</a></li>
          <li><a href="../navmenu-reveal/">Reveal</a></li>
          <li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
        </ul>
        <ul class="nav navmenu-nav">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul> -->
      </div>

      <div class="navbar navbar-inverse navbar-fixed-top navvmb">
        <!--<a class="navbar-brand" href="#"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"></a>-->
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
