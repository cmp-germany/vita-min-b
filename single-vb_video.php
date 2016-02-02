<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="row">
  <div class="col-sm-3 col-md-6 col-lg-8 col-lg-offset-2">
    <div class="page-header col-lg-12">
      <h1><?php the_title() ?></h1>
    </div>
      <div class="row">
        <div class="col-lg-9">
          <article>
            <div class="pre-content">
              <div id="videoBackground">
                <div id="videoContainer" onclick="if (!startedPlaying &amp;&amp; !isFullScreen()){playVideo();}" style=" -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover;"> <video poster="http://videos.united-studios.com/thumbnail.php?file=<?php the_field('video-id'); ?>.jpg&amp;width=700" id="video" onclick="openVideoLink();" onpause="showPlayButton(true);" onplay="showPlayButton(false);" ontimeupdate="onTimeUpdate();" preload="auto" style="/*display: none;*/"><source src="http://videos.united-studios.com/<?php the_field('video-id'); ?>.mp4" type="video/mp4"></video> </div>
              </div>
              <div id="controlContainer">
                <div id="controls">
                  <div id="play"><img alt="Play" onclick="playVideo();" src="http://videos.united-studios.com/images/play.png" title="Play"></div>
                  <div id="pause" style="display: none;"><img alt="Pause" onclick="pauseVideo();" src="http://videos.united-studios.com/images/pause.png" title="Pause"></div>
                  <div><img alt="Fast rewind" onclick="skip(-8);" src="http://videos.united-studios.com/images/fastrewind.png" title="Fast rewind"></div>
                  <div><img alt="Fast forward" onclick="skip(8);" src="http://videos.united-studios.com/images/fastforward.png" title="Fast forward"></div>
                  <div><img alt="Replay" onclick="replayVideo();" src="http://videos.united-studios.com/images/replay.png" title="Replay"></div>
                  <div><img alt="Full screen" onclick="showFullScreen();" src="http://videos.united-studios.com/images/fullscreen.png" title="Full screen"></div>
                </div>
              </div>
            </div>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
        </article>
      </div>

      <div class="col-lg-3" style="border-bottom: 3px dotted #FF5E00; border-left: 3px dotted #FF5E00;">
        <div id="videoBackground">
          <div id="videoContainer" onclick="if (!startedPlaying &amp;&amp; !isFullScreen()){playVideo();}" style=" -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover;"> <video poster="http://videos.united-studios.com/thumbnail.php?file=<?php the_field('video-id'); ?>.jpg&amp;width=700" id="video" onclick="openVideoLink();" onpause="showPlayButton(true);" onplay="showPlayButton(false);" ontimeupdate="onTimeUpdate();" preload="auto" style="/*display: none;*/"><source src="http://videos.united-studios.com/<?php the_field('video-id'); ?>.mp4" type="video/mp4"></video> </div>
        </div>
        <div id="videoBackground">
          <div id="videoContainer" onclick="if (!startedPlaying &amp;&amp; !isFullScreen()){playVideo();}" style=" -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover;"> <video poster="http://videos.united-studios.com/thumbnail.php?file=<?php the_field('video-id'); ?>.jpg&amp;width=700" id="video" onclick="openVideoLink();" onpause="showPlayButton(true);" onplay="showPlayButton(false);" ontimeupdate="onTimeUpdate();" preload="auto" style="/*display: none;*/"><source src="http://videos.united-studios.com/<?php the_field('video-id'); ?>.mp4" type="video/mp4"></video> </div>
        </div>
        <div id="videoBackground">
          <div id="videoContainer" onclick="if (!startedPlaying &amp;&amp; !isFullScreen()){playVideo();}" style=" -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover;"> <video poster="http://videos.united-studios.com/thumbnail.php?file=<?php the_field('video-id'); ?>.jpg&amp;width=700" id="video" onclick="openVideoLink();" onpause="showPlayButton(true);" onplay="showPlayButton(false);" ontimeupdate="onTimeUpdate();" preload="auto" style="/*display: none;*/"><source src="http://videos.united-studios.com/<?php the_field('video-id'); ?>.mp4" type="video/mp4"></video> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
