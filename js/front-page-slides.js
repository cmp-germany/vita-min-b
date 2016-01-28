var $ = jQuery.noConflict();

$(function() {
  $('#slides').superslides({
    hashchange: false,
    //play: 8000,
    animation_speed: 'slow'
  });
});

$(document).ready(function(){
  var height = $(window).height();
  $(".next").height(height);
  $(".prev").height(height);
  $(".img-shadow").height(height);

  $(window).resize(function(){
    height  = $(window).height();
    $(".next").height(height);
    $(".prev").height(height);
    $(".img-shadow").height(height);
  });

  setTimeout(function(){
    $('#slides').addClass("loaded");
  }, 1000);
});

$( ".next" ).click(function() {

});

$( ".prev" ).click(function() {
  
});
