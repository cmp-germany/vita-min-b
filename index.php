<?php get_header(); ?>
<div class="row">
  <div class="page-header col-md-12">
    <div class="headerbild">
      <img src="http://vita-min-b.info/wp-content/uploads/2016/01/Fotolia_79234053_L.jpg" alt="vita-min-b"/>
      <div class="overlay"></div>
    </div>
    <h1><?php the_title() ?></h1>
  </div>
</div>
<div class="row" style="background-color: #fff; min-height: 700px;">
  <?php
    $pageID = get_the_id();
    $page = get_page( $pageID );
    $content = apply_filters( 'the_content', $page->post_content );
    print $content;
  ?>
</div>
<?php get_footer(); ?>
