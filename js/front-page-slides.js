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
  }, 2500);
});

$( ".next" ).click(function() {
    $('#slides').removeClass("loaded");

    setTimeout(function(){
      $('#slides').addClass("loaded");
    }, 2000);
});

$( ".prev" ).click(function() {
    $('#slides').removeClass("loaded");

    setTimeout(function(){
      $('#slides').addClass("loaded");
    }, 2000);

});
