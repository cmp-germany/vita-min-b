<?php
  if ( $_GET['embedded'] > 100 ) {
    $width = $_GET['embedded'];
  } else {
    $width = 700;
  }
?>
<!DOCTYPE html>
<html lang="de" itemscope itemtype="http://schema.org/Article">
  <head>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/vita-min-b/video-embedded.css" type="text/css" media="all">
    <style media="screen">
      #videoBackground #videoContainer {
        max-width: <?= $width ?>px;
      }
    </style>
  </head>
  <body>
    <div class="pre-content">
      <div id="videoBackground">
        <div id="videoContainer" onclick="if (!startedPlaying &amp;&amp; !isFullScreen()) {playVideo();}" style="
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size:cover;">
          <video
            controls
            poster="//videos.united-studios.com/thumbnail.php?file=<?= get_field('video-id') ?>.jpg&amp;width=<?= $width ?>"
            id="video"
            onclick="openVideoLink();"
            preload="auto"
          >
            <source src="//videos.united-studios.com/<?= get_field('video-id') ?>.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
    <script src="<?= get_template_directory_uri() ?>/js/video-embedded.js" charset="utf-8"></script>
  </body>
</html>
