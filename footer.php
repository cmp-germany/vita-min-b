<?php

// Footerausgabe: wp-Walker

class Walker_Footer extends Walker_Nav_Menu {

    // Displays start of a level. E.g '<ul>'
    // @see Walker::start_lvl()
    function start_lvl(&$output, $depth=0, $args=array()) {
        //$output .= "\n<ul>\n";
    }

    // Displays end of a level. E.g '</ul>'
    // @see Walker::end_lvl()
    function end_lvl(&$output, $depth=0, $args=array()) {
        //$output .= "</ul>\n";
    }

    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array()) {
      ob_start();
      ?><a href="<?= $item->url ?>"><?= $item->title ?></a> <span class="sep">|</span> <?php
      $output .= ob_get_contents();
      ob_end_clean();
    }

    // Displays end of an element. E.g '</li>'
    // @see Walker::end_el()
    function end_el(&$output, $item, $depth=0, $args=array()) {
        //$output .= "</li>\n";
    }
}
?>


      <div class="row">
        <footer class="site-footer" id="colophon" role="contentinfo">
          <div class="site-info">
            <?php wp_nav_menu( array(
              'theme_location' => 'footermenu',
              'depth'          => 1,
              'walker'         => new Walker_Footer()
            ));?>
          </div>
        </footer>
      </div>
    </div>
   <?php wp_footer(); ?>
  </body>
</html>
