<!-- 
https://codepen.io/Pc/pen/QywZga 
https://codepen.io/martinwolf/pen/dyLAC
-->
<div class="buttons">
	<button class="button" id="play-button">PLAY</button>
	<button class="button" id="pause-button">PAUSE</button>
	<button class="button" id="stop-button">STOP</button>
</div>

<!-- Make sure ?enablejsapi=1 is on URL -->
<iframe id="video" src="https://www.youtube.com/embed/AASd5ewKNSw?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>

<style type="text/css">

</style>

<script type="text/javascript">
// global variable for the player
	var player;

	// this function gets called when API is ready to use
	function onYouTubePlayerAPIReady() {
	  // create the global player from the specific iframe (#video)
	  player = new YT.Player('video', {
	    events: {
	      // call this function when player is ready to use
	      'onReady': onPlayerReady
	    }
      console.log('aaa')
	  });
	}

	function onPlayerReady(event) {
	  
	  // bind events
	  var playButton = document.getElementById("play-button");
	  playButton.addEventListener("click", function() {
	    player.playVideo();
	  });
	  
	  var pauseButton = document.getElementById("pause-button");
	  pauseButton.addEventListener("click", function() {
	    player.pauseVideo();
	  });

	  var stopButton = document.getElementById("stop-button");
	  stopButton.addEventListener("click", function() {
	    player.stopVideo();
	  });
	  
	}

	// Inject YouTube API script
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>