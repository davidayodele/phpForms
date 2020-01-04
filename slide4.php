<section class="fullsize-video-bg">
	<div class="inner">
		<div>
			<!-- <h1>Responsive Background Video</h1>
	      	<p>with color and dot-grid overlay</p> -->
	      	<h2 class="avia-caption-title" itemprop="name">AZNOW Welcomes you!</h2>
			<img src="http://aznow.org/wp-content/uploads/2019/12/aznow_logo_round.png" alt="AZNOW Logo"/>
			<p>The Arizona National Organization for Women (AZNOW) works to advance the equal status of women and girls in all aspects of their lives.</p>
			</div>
			<a class="floating_menu_button about_us" href="#about" class="avia-slideshow-button avia-button avia-color-light avia-multi-slideshow-button" data-duration="800" data-easing="easeInOutQuad">About us</a>
			<a class="floating_menu_button join_us" href="#reservations" class="avia-slideshow-button avia-button avia-color-red avia-multi-slideshow-button avia-slideshow-button-2" data-duration="800" data-easing="easeInOutQuad">Join</a>
		</div>
	</div>

	<div id="video-viewport">

		<!-- <video width="1920" height="1280" autoplay muted loop>
			<source src="https://storage.googleapis.com/coverr-main/mp4/Winter-Grass.mp4" type="video/mp4" />
			<source src="https://storage.googleapis.com/coverr-main/webm/Winter-Grass.webm" type="video/webm" />
		</video> -->

		<div class="slider" id="main-slider"><!-- outermost container element -->
			<div class="slider-wrapper"><!-- innermost wrapper element -->
				<!-- <img src="http://lorempixel.com/1024/400/animals" alt="First" class="slide" /> image slide 
				<img width="1080" height="720" src="http://aznow.org/wp-content/uploads/2020/01/gcanyon_1920x1279_kraked.jpg" alt="First Slide" class="slide" /> -->

				<iframe class="slide" alt="Second Slide" src="https://player.vimeo.com/video/382549197?background=1" width="1920" height="1280" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

				<!-- <img width="1920" height="1280" src="" alt="Third Slide" class="slide slide_img1" /> -->		

				<iframe class="slide" alt="Fourth Slide" src="http://player.vimeo.com/video/381960404?background=1" width="1920" height="1280" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

				<!-- <img width="1920" height="1280" src="" alt="Fifth Slide" class="slide slide_img2" /> -->

				<!-- <img width="1920" height="1280" src="" alt="Sixth Slide" class="slide slide_img3" /> -->
				<!-- <iframe class="slide" src="https://player.vimeo.com/video/76979871?background=1&autopause=0" width="1080" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
				<iframe class="slide" src="https://player.vimeo.com/video/381960404?background=1" width="1080" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> -->
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
/*======== Slideshow script ========*/
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 6000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var slider = new Slideshow( "#main-slider" );
	});	
})();
/*======== End Slideshow script ========*/
</script>


<script type="text/javascript">
/*======== Resizing script ========*/
var min_w = 300;
var vid_w_orig;
var vid_h_orig;

$(function() {
    vid_w_orig = parseInt($('.slide').attr('width'));
    vid_h_orig = parseInt($('.slide').attr('height'));

    $(window).resize(function () { fitVideo(); });
    $(window).trigger('resize');
});

function fitVideo() {

    $('#video-viewport').width($('.fullsize-video-bg').width()); // set viewport width to video width
    $('#video-viewport').height($('.fullsize-video-bg').height());

    var scale_h = $('.fullsize-video-bg').width() / vid_w_orig; // height is scaled by (width / orig_width)
    var scale_v = $('.fullsize-video-bg').height() / vid_h_orig;
    var scale = scale_h > scale_v ? scale_h : scale_v; // if height is greater set it as scale factor else use width

    if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;}; // if scaled width is less than min width,  use the scaled min width

    $('.slide').width(scale * vid_w_orig); // set width to scaled width
    $('.slide').height(scale * vid_h_orig); // set height to scaled height

    $('#video-viewport').scrollLeft(($('.slide').width() - $('.fullsize-video-bg').width()) / 2); // reposition the left side using the diff of the actual width minus the full size width
    $('#video-viewport').scrollTop(($('.slide').height() - $('.fullsize-video-bg').height()) / 2);

};
/*======== End Resizing script ========*/
</script>

<style type="text/css">

/*========= Slider styles ============*/
.slide_img1 {
    background: url("http://aznow.org/wp-content/uploads/2020/01/march_fist_1920x1080.jpg");
}

.slide_img2 {
    background: url("http://aznow.org/wp-content/uploads/2020/01/womens_march_1920x1281_kraked.jpg");
}

.slide_img3 {
	background: url("http://aznow.org/wp-content/uploads/2020/01/era_sandra_day_1920x1279.jpg");
}
/*
.slide {
	float: left;
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -10;
	transition: opacity 3s linear;

	position: fixed;
	left: 0;
	bottom: 0;
	min-width: 100%;
	min-height: 100%;
	width: auto;
	height: auto;
	object-fit: fill;
	z-index: 1;
}
*/
.slider-wrapper > .slide:first-child {
	opacity: 1;
}

a.floating_menu_button {
    display: inline-block;
    width: 200px;
    /* float: left; */
    position: absolute;
    top: 538px;
    left: 80px;
    font-family: 'Lato','HelveticaNeue','Helvetica Neue', Helvetica, Arial, sans-serif;
}

.fullsize-video-bg .inner > div {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
    padding: 0 2em;
    color: #fff;
    font-family: 'Lato','HelveticaNeue','Helvetica Neue', Helvetica, Arial, sans-serif;
}

a.floating_menu_button.join_us {
    left: 250px;
}

/*========= End Slider styles ============*/

/*
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: inherit;
    -moz-box-sizing: inherit;
    box-sizing: inherit;
}
html {
    background: #000;
    font: normal 1em/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif;
    color: #fff;
    text-align: center;
    height: 100%;
}
body {
    height: 100%;
}
*/



#video-viewport {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}
video {
    display: block;
    width: 100%;
    height: auto;
}

.slide {
	top: -265px;
    display: block;
    width: 100%;
    height: 1280px;
    position: absolute;
    opacity: 0;
	transition: opacity 3s linear;
}

.fullsize-video-bg {
    height: 100%;
    overflow: hidden;
}
.fullsize-video-bg:before {
    content: "";
    background: rgba(39,59,103,.5);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}
/*
.fullsize-video-bg:after {
    content: "";
    
    /*background: url(data:image/png;
    base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAYAAABWKLW/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI4RkZBQTgzNzg1NzExRTU4NTQyODc3OUM4MTZGMUREIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI4RkZBQTg0Nzg1NzExRTU4NTQyODc3OUM4MTZGMUREIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjhGRkFBODE3ODU3MTFFNTg1NDI4Nzc5QzgxNkYxREQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjhGRkFBODI3ODU3MTFFNTg1NDI4Nzc5QzgxNkYxREQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz66uHInAAAAIUlEQVR42mL5//8/AyMj42YGIGBigABfEMEIkoEBgAADAKvuBwVS8BAjAAAAAElFTkSuQmCC);*/
    /*background-image: url("https://cdnjs.cloudflare.com/ajax/libs/vegas/2.3.1/overlays/03.png");
    background-size: 3px 3px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}
*/
.fullsize-video-bg .inner {
    display: table;
    width: 100%;
    max-width: 24em;
    height: 100%;
    /*margin: 0 auto;*/
    padding: 0;
    position: relative;
    z-index: 2;
    text-shadow: 0 1px 5px rgba(0,0,0,.5);
}
.fullsize-video-bg .inner > div {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
    padding: 0 2em;
}
h1 {
    font-family: "Raleway", sans-serif;
    font-size: 3em;
    line-height: .9;
    font-weight: 900;
    letter-spacing: -.025em;
    text-transform: uppercase;
    margin-bottom: .5em;
}
h1 + p {
    font-family: "Shadows Into Light Two", cursive;
    font-size: 1.5em;
}

</style>