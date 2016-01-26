<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-3 col-md-6 col-lg-6 col-lg-offset-3">
      <div class="page-header col-lg-12">
        <h1>Impressum</h1>
      </div>
      <?php
        /*$page = get_page_by_title( 'page-name' );
        $content = apply_filters( 'the_content', $page->post_content );
        print $content;
        print ("Test" + $page);*/
        $article =    get_post(6);
        $content =    $article->post_content;
        return '<p>'.$content.'</p>';
      ?>
    </div>
  </div>
<?php get_footer(); ?>
