
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!-- jQuery load latest -->

<section class="full-wide-slider">
  <div class="item image">
    <span class="loading">Loading...</span>
    <figure>
      <div class="slide-image slide-media" style="background-image:url('https://aznow.org/wp-content/uploads/2019/12/gcanyon_2560x1706.jpg');">
        <img data-lazy="https://aznow.org/wp-content/uploads/2019/12/gcanyon_2560x1706.jpg" class="image-entity" />
      </div>
      <figcaption class="caption">Static Image</figcaption>
    </figure>
  </div>
  
  <div class="item vimeo" data-video-start="4">
    <iframe src="http://player.vimeo.com/video/381079119?background=1" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
    <p class="caption">Vimeo</p>
  </div>
  
  <div class="item vimeo" data-video-start="4">
    <iframe src="https://player.vimeo.com/video/76979871?background=1&autopause=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    <p class="caption">Vimeo</p>
  </div>
  
  <div class="item vimeo" data-video-start="4">
    <iframe src="https://player.vimeo.com/video/381960404?background=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    <p class="caption">Vimeo</p>
  </div>
  
 
</section>

<script type="text/javascript">
var slideWrapper = $(".full-wide-slider"),
    iframes = slideWrapper.find('.embed-player'),
    lazyImages = slideWrapper.find('.slide-image'),
    lazyCounter = 0;

function changeSlide(slick, control){
  var currentSlide, slideType, startTime, player, video;

  currentSlide = slick.find(".slick-current");
  slideType = currentSlide.attr("class").split(" ")[1];
  player = currentSlide.find("iframe").get(0);
  startTime = currentSlide.data("video-start");

}

// Resize player
function resizePlayer(iframes, ratio) {
  if (!iframes[0]) return;
  
    var win = $(".full-wide-slider"),
        width = win.width(),
        playerWidth,
        height = win.height(),
        playerHeight,
        ratio = ratio || 16/9;

    iframes.each(function(){
      var current = $(this);
      if (width / ratio < height) {
        playerWidth = Math.ceil(height * ratio);
        current.width(playerWidth).height(height).css({
          left: (width - playerWidth) / 2,
           top: 0
          });
      } else {
        playerHeight = Math.ceil(width / ratio);
        current.width(width).height(playerHeight).css({
          left: 0,
          top: (height - playerHeight) / 2
        });
      }
    });
}

// DOM Ready
$( document ).ready(function() {
  // Initialize
  slideWrapper.on("init", function(slick){
    slick = $(slick.currentTarget);
    setTimeout(function(){
      changeSlide(slick,"play");
    }, 1000);
    resizePlayer(iframes, 16/9);
  });
  slideWrapper.on("beforeChange", function(event, slick) {
    slick = $(slick.$slider);
    changeSlide(slick,"pause");
  });
  slideWrapper.on("afterChange", function(event, slick) {
    slick = $(slick.$slider);
    changeSlide(slick,"play");
  });
  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
    lazyCounter++;
    if (lazyCounter === lazyImages.length){
      lazyImages.addClass('show');
      slideWrapper.slick("slickPlay");
    }
  });

  //start the slider
  slideWrapper.slick({
    fade:true,
    autoplaySpeed:4800,
    lazyLoad:"progressive",
    speed:600,
    arrows:false,
    dots:true,
    cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
  });

// Resize event
$(window).on("resize.slickVideoPlayer", function(){  
  resizePlayer(iframes, 16/9);
});    
});
  
</script>