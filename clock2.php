<div class="clock"><!-- Adapted from Peter Butcher - https://github.com/pbutcher -->
  <div id="flipdown" class="flipdown">Clock</div>
</div>


<script type="text/javascript">
const countdown = new FlipDown();
console.log(countdown);

document.addEventListener('DOMContentLoaded', () => {

  // Unix timestamp (in seconds), 86400s = 60s * 60min * 24h
  var DaysFromNow = (new Date().getTime() / 1000) + (86400 * 289) + 1;

  // Set up FlipDown
  var flipdown = new FlipDown(DaysFromNow)

    // Start the countdown
    .start()

    // Do something when the countdown ends
    .ifEnded(() => {
      console.log('The countdown has ended!');
    });
  
  /*
  // Toggle theme
  var interval = setInterval(() => {
    let body = document.body;
    body.classList.toggle('light-theme');
    body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
    body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
  },5000000);
  */
  
 /* body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
  }, 5000);
 */
});

</script>