var startedPlaying = false;
var video = document.getElementById("video");
var play = document.getElementById("play");
function onTimeUpdate() {
  if (!startedPlaying && video.currentTime > 0) {
    startedPlaying = true;
    showStartScreen(false);
  }
}
function showStartScreen(show) {
  if (show) {
    //video.style.display = "none";
    video.style.cursor = "pointer";
  }
  else {
    //video.style.display = "block";
    video.style.cursor = "default";
  }
}
function showPlayButton(show) {
  if (show) {
    play.style.display = "inline";
    pause.style.display = "none";
  }
  else {
    play.style.display = "none";
    pause.style.display = "inline";
  }
}
function openVideoLink() {
}
function playVideo() {
  video.play();
}
function pauseVideo() {
  video.pause();
}

function showFullScreen() {
  if (video.requestFullscreen) {
    video.requestFullscreen();
  }
  else if (video.msRequestFullscreen) {
    video.msRequestFullscreen();
  }
  else if (video.mozRequestFullScreen) {
    video.mozRequestFullScreen();
  }
  else if (video.webkitRequestFullScreen) {
    video.webkitRequestFullScreen();
  }
}
function isFullScreen() {
  return document.fullscreenElement || document.msFullscreenElement || document.mozFullScreen || document.webkitIsFullScreen;
}
document.addEventListener("fullscreenchange", function () {
  onFullScreenChange();
}, false);
document.addEventListener("MSFullscreenChange", function () {
  onFullScreenChange();
}, false);
document.addEventListener("mozfullscreenchange", function () {
  onFullScreenChange();
}, false);
document.addEventListener("webkitfullscreenchange", function () {
  onFullScreenChange();
}, false);
function onFullScreenChange() {
  showStartScreen(!startedPlaying && !isFullScreen());
}
