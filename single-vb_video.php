<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();
$currentVideo = get_field('video-id');
?>

<?php get_template_part( 'headerleiste' ); ?>

<div class="row site">
  <div class="col-lg-12">
    <div class="pre-content">
      <div id="videoBackground">
        <div id="videoContainer" onclick="if (!startedPlaying &amp;&amp; !isFullScreen()) {playVideo();}" style="
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size:cover;">
          <video poster="//videos.united-studios.com/thumbnail.php?file=<?= get_field('video-id') ?>.jpg&amp;width=1000" id="video" onclick="openVideoLink();" onpause="showPlayButton(true);" onplay="showPlayButton(false);" ontimeupdate="onTimeUpdate();" preload="auto">
            <source src="//videos.united-studios.com/<?= get_field('video-id') ?>.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <div id="controlContainer">
        <div id="controls">
          <div id="play"><img alt="Play" onclick="playVideo();" src="<?= get_template_directory_uri() ?>/gfx/video/play.png" title="Play"></div>
          <div id="pause" style="display: none;"><img alt="Pause" onclick="pauseVideo();" src="<?= get_template_directory_uri() ?>/gfx/video/pause.png" title="Pause"></div>
          <div><img alt="Fast rewind" onclick="skip(-8);" src="<?= get_template_directory_uri() ?>/gfx/video/fastrewind.png" title="Fast rewind"></div>
          <div><img alt="Fast forward" onclick="skip(8);" src="<?= get_template_directory_uri() ?>/gfx/video/fastforward.png" title="Fast forward"></div>
          <div><img alt="Replay" onclick="replayVideo();" src="<?= get_template_directory_uri() ?>/gfx/video/replay.png" title="Replay"></div>
          <div><img alt="Full screen" onclick="showFullScreen();" src="<?= get_template_directory_uri() ?>/gfx/video/fullscreen.png" title="Full screen"></div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </div>
    <div class="site-content">
      <div class="content-area col-sm-8">
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="col-sm-4">
        <?php get_template_part( 'video_widget' ); ?>
      </div>
    </div>
  </div>
</div>


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
