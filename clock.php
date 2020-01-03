<script src="http://player.vimeo.com/api/player.js"></script>

<iframe src="http://player.vimeo.com/video/381079119?background=1" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
<iframe src="https://player.vimeo.com/video/381960404?background=1" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

<iframe src="https://player.vimeo.com/video/76979871?background=1&autopause=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

<div class="clock_container">
<div class="time_text">"Now is our time" - Sheryl Sandberg.</div>
<svg class="clock" width="200" height="200"> <!-- Adapted from Mia Park (https://codepen.io/sansolmom/pen/abzwMoe) -->

    <filter id="innerShadow" x="-20%" y="-20%" width="140%" height="140%">
        <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur"></feGaussianBlur>
        <feOffset in="blur" dx="2.5" dy="2.5"></feOffset>
    </filter>

    <g>
        <circle id="shadow" style="fill:rgba(0,0,0,0.1)" cx="97" cy="100" r="87" filter="url(#innerShadow)"></circle>
        <circle id="circle" style="stroke: #FFF; stroke-width: 2px; fill:transparent" cx="100" cy="100" r="80"></circle>
    </g>
    <g>
        <line x1="100" y1="100" x2="100" y2="55" transform="rotate(80 100 100)" style="stroke-width: 3px; stroke: #fffbf9;" id="hourhand">
            <animatetransform attributeName="transform"
                              attributeType="XML"
                              type="rotate"
                              dur="43200s"
                              repeatCount="indefinite"></animatetransform>
        </line>
        <line x1="100" y1="100" x2="100" y2="40" style="stroke-width: 4px; stroke: #fdfdfd;" id="minutehand">
            <animatetransform attributeName="transform"
                              attributeType="XML"
                              type="rotate"
                              dur="3600s"
                              repeatCount="indefinite"></animatetransform>
        </line>
        <line x1="100" y1="100" x2="100" y2="30" style="stroke-width: 2px; stroke: #dadada;" id="secondhand">
            <animatetransform attributeName="transform"
                              attributeType="XML"
                              type="rotate"
                              dur="60s"
                              repeatCount="indefinite"></animatetransform>
        </line>
    </g>
    <circle id="center" style="fill:#273b67; stroke: #dadada; stroke-width: 2px;" cx="100" cy="100" r="3"></circle>
</svg>
<div id="aznow_clock"></div>
</div>

<style type="text/css">

.clock_container {
    position: absolute;
    height: 440px;
}

svg {
    position: relative;
    left: 85%;
    transform: translate(-75%, 0%);
    z-index: 2;
}

.avia_code_block_1 .avia_codeblock {
    margin-top: -155px;
}

circle#circle {
    /* fill: transparent; */
    stroke: #FFF;
    stroke-width: 2px;
    fill: transparent;
}

.time_text {
    margin-left: 244px;
    margin-top: -24px
    font-style: italic !important;
}

div#aznow_clock {
    margin-top: 0px;
    left: 295px;
    width: 200px;
    position: relative;
}

.av-special-heading.av-special-heading-h3.avia-builder-el-58.el_before_av_google_map.avia-builder-el-no-sibling {
    background-color: #fff;
}

</style>



<script type="text/javascript">

var hands = [];
hands.push(document.querySelector('#secondhand > *'));
hands.push(document.querySelector('#minutehand > *'));
hands.push(document.querySelector('#hourhand > *'));

var cx = 100;
var cy = 100;

function shifter(val) {
  return [val, cx, cy].join(' ');
}

var date = new Date();
var hoursAngle = 360 * date.getHours() / 12 + date.getMinutes() / 2;
var minuteAngle = 360 * date.getMinutes() / 60;
var secAngle = 360 * date.getSeconds() / 60;

hands[0].setAttribute('from', shifter(secAngle));
hands[0].setAttribute('to', shifter(secAngle + 360));
hands[1].setAttribute('from', shifter(minuteAngle));
hands[1].setAttribute('to', shifter(minuteAngle + 360));
hands[2].setAttribute('from', shifter(hoursAngle));
hands[2].setAttribute('to', shifter(hoursAngle + 360));

for(var i = 1; i <= 12; i++) {
  var el = document.createElementNS('http://www.w3.org/2000/svg', 'line');
  el.setAttribute('x1', '100');
  el.setAttribute('y1', '30');
  el.setAttribute('x2', '100');
  el.setAttribute('y2', '40');
  el.setAttribute('transform', 'rotate(' + (i*360/12) + ' 100 100)');
  el.setAttribute('style', 'stroke: #ffffff;');
  document.querySelector('svg').appendChild(el);
}

var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

function checkTime() {
  var date2 = new Date();
  var sufix = '';
  var hours = ('0' + date.getHours()).slice(-2);
  var minutes = ('0' + date.getMinutes()).slice(-2);
  var day = date2.getDate();
  var month = monthNames[date2.getMonth()];
  var weekday = dayNames[date2.getDay()];
  if (day > 3 && day < 21) sufix = 'th';
  switch (day % 10) {
    case 1:
      sufix = "st";
    case 2:
      sufix = "nd";
    case 3:
      sufix = "rd";
    case 4:
      sufix = "th";
    case 5:
      sufix = "th";
    case 6:
      sufix = "th";
    case 7:
      sufix = "th";
    case 8:
      sufix = "th";
    case 9:
      sufix = "th";
    default:
      sufix = " ";
  }
  document.getElementById('aznow_clock').innerHTML = "<span class='date'>" + weekday  + ', ' + month + ' ' + day + sufix + ".</span>";
}

checkTime();

setInterval(checkTime, 86400000);  /*5000ms = 5s => 12*5000 = 60,000ms = 60s => 24*60*60,000 = 86,400,000*/

</script>
