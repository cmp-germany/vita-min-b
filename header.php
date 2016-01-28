<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/gfx/favicon.png" />

    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body class="vmb">
    <div class="container-fluid" >
      <div class="navmenu navmenu-default navmenu-inverse navmenu-fixed-right offcanvas">
        <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"/></a>
        <?php wp_nav_menu( array(
             'menu' => 'navigation',
             'container' => '',
             'menu_class'      => 'nav navmenu-nav',
             'menu_id'         => '',
             'walker' => new My_Nav_Menu_Walker()
              ) );
        ?>
      </div>

      <div class="navbar navbar-inverse navbar-fixed-top navvmb">
        <!--<a class="navbar-brand" href="#"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"></a>-->
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
