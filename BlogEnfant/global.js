//Quand le doc s'ouvre. il faudra faire une new fonction
//et fait ce qui est à l'intérieur.
$(document).ready(function(){
  // Element oligatoire
});
<!-- JavaScript and minified version -->
    uikit.js
    uikit.min.js
     var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var done = false;
var player_3;
function onYouTubeIframeAPIReady() {
player_3 = new YT.Player('ytVid');
$('#myModal').on('hide', function () {
player_3.stopVideo();
});
}