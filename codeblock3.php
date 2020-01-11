<hr>
<div class="video-container" id="player">
<!-- Make sure ?enablejsapi=1 is on URL -->
<!-- <iframe id="video" src="https://www.youtube.com/embed/AASd5ewKNSw?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>-->
<iframe id="video" src="" frameborder="0" allowfullscreen></iframe>
</div>
<div>
<br>
<button class="btn btn-default btn-xl js-scroll-trigger" onclick="nextVideo()">Next</button>
</div>
<br>
<hr>

<style type="text/css">
/*========= Video Style ==========*/
.video-container {
    position: relative;
    padding-bottom: 0px; /* 16:9 */
    padding-top: 10px; /* size of chrome */
    height: 400px;
    width: 100%;
}

.video-container_sm {
    position: relative;
    padding-bottom: 0px; /* 16:9 */
    padding-top: 5px; /* size of chrome */
    height: 181px;
    width: 322px;
}

.btn {
	padding: 12px 16px;
    background-color: rgba(0,0,0,0.2);
    color: #382410;
    border: 3px solid #382410;
    background: transparent;
    border-radius: 3px;
    text-transform: uppercase;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    font-weight: bold;
    font-family: 'Lato','HelveticaNeue','Helvetica Neue',Helvetica,Arial,sans-serif;
}

.btn:hover {
	box-shadow: 1px 1px 7px 1px rgba(0, 0, 0, 0.93);
}
/*================================*/
</style>

<!-- Video Player Script (updated 1/5/20) source(mostly): https://developers.google.com/youtube/iframe_api_reference----- --> <!-- https://www.youtube.com/watch?v=any9v2oFm1E -->
<script>
//function _(id){ return document.getElementById(id); }
var window_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var vid_height = '400';
var vid_width = '';
var playlist = ['bCBYJZ6QbUI', 'GjYtacfcgPU', 'JaS6aSTtrgk', 'c9SUAcNlVQ4', 'Fxt_MZKMdes', 'hg3umXU_qWc', 'o_hsWRVR8_M', '8hx0ajieM3M'];
var loopPlaylists = true;
var tag = document.createElement('script');  //loads the IFrame Player API code asynchronously

/*
if (window_width < 500) {
    //alert('Less than 500');
	vid_height = '181';
	vid_width = '322';
	_('player').removeClass("video_container");
    _('player').addClass( "video_container_sm" );
    _('player').className = 'video_container_sm';
}
*/
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
document.getElementById('video').src = "https://www.youtube.com/embed/" + playlist[1] + "?enablejsapi=1&html5=1";

function onYouTubeIframeAPIReady() {  // creates an <iframe> (and YouTube player) after the API code downloads
    player = new YT.Player('player', {
        height: vid_height,
        width: vid_width,
        loadPlaylist:{
            listType:'playlist',
            list: playlist,
            index:parseInt(0),
            suggestedQuality:'small'
        },
        playerVars: {
            'autoplay': 0,
            rel: 0,
            'cc_load_policy': 1
        },
        //videoId: 'doMbsw-d3C4',
        events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerReady(event) {  // API will call this function when the video player is ready
    event.target.cuePlaylist(playlist);
    //event.target.loadPlaylist(playlist); // for autoplay
    //event.target.playVideo();
}
// The function indicates that when playing a video (state=1),
// the player should play for six seconds and then stop.
var done = false;

function onPlayerStateChange(event) {  // API calls this function when the player's state changes
    if (event.data == YT.PlayerState.PLAYING && !done) {
        player.setLoop(loopPlaylists);
        player.setOption("captions", "fontSize", 2);
        player.setOption("captions", "reload", true);
        player.getOptions("captions") || player.getOptions("cc")  //detects if captions were ever loaded at one point.
        player.setOption("captions", "displaySettings", {"background": "#000"});  //Works for html5 ignored by AS3
        player.setOption("cc", "displaySettings", {"background": "#000"});  //Works for AS3 ignored by html5
        player.loadModule("captions");
        player.loadModule("cc");
        //setTimeout(stopVideo, 6000);
        done = true;
    }
}

function stopVideo() {
    player.stopVideo();
}

function nextVideo() {
    player.nextVideo();
};  //activated by button click
</script>
<!--- End Video Player Script -->