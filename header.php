<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>







    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/superslides/dist/stylesheets/superslides.css">


    <!-- Load local jQuery. This can be overridden with a ?jquery=___ param. -->
    <script src="<?= get_template_directory_uri()?>/superslides/libs/jquery-loader.js"></script>
    <!-- Load local QUnit. -->
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/superslides/libs/qunit/qunit.css" media="screen">
    <script src="<?= get_template_directory_uri()?>/superslides/libs/qunit/qunit.js"></script>
    <!-- Load local lib and tests. -->
    <script src="<?= get_template_directory_uri()?>/superslides/dist/jquery.superslides.js"></script>
    <script src="<?= get_template_directory_uri()?>/superslides/test/superslides_test.js"></script>
    <!-- Removing access to jQuery and $. But it'll still be available as _$, if
         you REALLY want to mess around with jQuery in the console. REMEMBER WE
         ARE TESTING A PLUGIN HERE, THIS HELPS ENSURE BEST PRACTICES. REALLY. -->
    <script>window._$ = jQuery.noConflict(true);</script>





  </head>
  <body class="vmb">
