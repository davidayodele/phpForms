<!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- jQuery load latest -->
  <title>Slider2</title>

  <script>
  $('.slider').slick({
    draggable: true,
    arrows: false,
    dots: true,
    fade: true,
    speed: 900,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100
  })
</script>

</head>
<body>
<div class="slideshow">
  <div class="slider">
    <div class="item">
      <img src="https://images.unsplash.com/photo-1445768593937-05a3f7832b68?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1443363742879-63e3d75de2f8?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1446329813274-7c9036bd9a1f?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
    </div>
  </div>
</div>

</body>

<style type="text/css">
body,
html {
  height: 100%;
  background: #333;
  font-family: 'Roboto', sans-serif;
}

.slideshow {
  position: relative;
  z-index: 1;
  height: 100%;
  max-width: 700px;
  margin: 50px auto;
  
  * {
    outline: none;
  }
  
  .slider {
    box-shadow: 0 20px 50px -25px rgba(0, 0, 0, 1);
  }
  
  .slider-track {
    transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
  }
  
  .item {
    height: 100%;
    position: relative;
    z-index: 1;
    
    img {
      width: 100%;
      transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
      transform: scale(1.2);
    }
    
    &.slick-active img {
      transform: scale(1);
    }
  }
}
/* 
https://codepen.io/digistate/pen/BdKaaY
https://codepen.io/davidhc/pen/nLpJk
https://codepen.io/mrnitin/pen/rWXxev
*/

</style>



</html>




