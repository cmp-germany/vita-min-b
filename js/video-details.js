$=jQuery.noConflict();

$(document).ready(function(){
  //Event Listener hinzufügen
  $('.breite-fixed').click(function(e) {
    changeIframeSize(e.target.value);
    $('#own-width').prop('disabled', true);
    $('#own-width').val(e.target.value);
  });

  $('#breite-own').click(function(e) {
    $('#own-width').prop('disabled', false);
  });

  $('#own-width').keyup(function(e) {
    changeIframeSize(e.target.value);
  });

  $('#own-width').click(function(e) {
    $('#breite-own').attr('checked', 'checked');
  })

})

function changeIframeSize(width) {
  if (width < 100) width = 100;
  // Calculate height
  height = Math.round(width / 16 * 9);

  // Get the Text
  var newString = $('#iframe-textarea').val();

  // Replace width
  newString = newString.replace(/width="[0-9]*"/, 'width="' + width + '"');
  newString = newString.replace(/\?embedded=[0-9]*/, '?embedded=' + width);

  // Replace height
  newString = newString.replace(/height="[0-9]*"/, 'height="' + height + '"');

  // Save Text
  $('#iframe-textarea').val(newString);
}
