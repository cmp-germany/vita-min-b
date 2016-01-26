function onTimeUpdate() {
  !startedPlaying && video.currentTime > 0 && (startedPlaying = !0, showStartScreen(!1))
}

function showStartScreen(e) {
  e ? video.style.cursor = "pointer" : video.style.cursor = "default"
}

function showPlayButton(e) {
  e ? (play.style.display = "inline", pause.style.display = "none") : (play.style.display = "none", pause.style.display = "inline")
}

function openVideoLink() {}

function playVideo() {
  video.play()
}

function pauseVideo() {
  video.pause()
}

function skip(e) {
  video.currentTime + e > video.duration ? replayVideo() : video.currentTime += e
}

function replayVideo() {
  startedPlaying = !1, video.load(), showStartScreen(!0), showPlayButton(!0)
}

function showFullScreen() {
  video.requestFullscreen ? video.requestFullscreen() : video.msRequestFullscreen ? video.msRequestFullscreen() : video.mozRequestFullScreen ? video.mozRequestFullScreen() : video.webkitRequestFullScreen && video.webkitRequestFullScreen()
}

function isFullScreen() {
  return document.fullscreenElement || document.msFullscreenElement || document.mozFullScreen || document.webkitIsFullScreen
}

function onFullScreenChange() {
  video.controls = isFullScreen(), showStartScreen(!startedPlaying && !isFullScreen())
}
var startedPlaying = !1,
  video = document.getElementById("video"),
  play = document.getElementById("play");
document.addEventListener("fullscreenchange", function() {
  onFullScreenChange()
}, !1), document.addEventListener("MSFullscreenChange", function() {
  onFullScreenChange()
}, !1), document.addEventListener("mozfullscreenchange", function() {
  onFullScreenChange()
}, !1), document.addEventListener("webkitfullscreenchange", function() {
  onFullScreenChange()
}, !1);
