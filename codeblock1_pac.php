[rev_slider alias="slider-1"][/rev_slider]

<style type="text/css">
/* ====== Notes =====

#top #main .avia-section .template-page {
    margin-top: -35px;
}

<!-- 
Carousel: https://codepen.io/vishnu1991/pen/pEbwAa, http://jsfiddle.net/ANRHT/6/, 
https://www.youtube.com/watch?v=nf55pmywQKs
https://www.youtube.com/watch?v=Fdf5aTYRW0E
https://www.youtube.com/watch?v=QV7ke4a7Lvc,
https://www.youtube.com/watch?v=Tf_VWOSKOQ4&list=PLVz2XdJiJQxwAhzEZSpDqXlfT7XvNPDIE
http://jsfiddle.net/ANRHT/6/
https://codepen.io/martinwolf/pen/dyLAC

AMTI Bookmark! -->
<!-- notes: blue: #273C69, red: #B8272E, yellow: EAC34D, dgray: #47484a;


5) canyons-382549197 1) downtown-384405427 2) entrance-384669026 3) actv-384674057 4) floor-384675996,384908547
6) applause-384689797 
-->

*/

/*==== Header, nav, & line menu ====*/
#top .av_header_glassy.av_header_transparency .social_bookmarks li, #top .av_header_glassy.av_header_transparency .social_bookmarks li a {
    border-color: rgba(255,255,255,0.25);
    color: #ffffff !important;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.25));
}

.logo img {
    /*
    padding: 0;
    display: block;
    width: auto;
    height: auto;
    max-height: 100%;
    image-rendering: auto;
    position: relative;
    z-index: 2;
    height: 100%\9;
    height: auto\9;
    -webkit-transition: opacity 0.4s ease-in-out;
    transition: opacity 0.4s ease-in-out;
    */
    padding: 5px 0px 7px 0px;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=2, OffY=2, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=2, OffY=2, Color='#000')";
    filter: drop-shadow(0.5px 1px 2px rgba(0,0,0,0.33));
}

.header_color .av-hamburger-inner, .header_color .av-hamburger-inner::before, .header_color .av-hamburger-inner::after {
    box-shadow: 0.5px 0.5px 0px 0.5px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
}

#top .av_header_glassy.av_header_transparency .header_bg {
    background-color: #000;
    opacity: 0.65;
    filter: alpha(opacity=65);
}

#top .av_header_glassy.av_header_transparency #header_main {
    position: relative;
    z-index: 1;
    background: inherit;
    overflow: hidden;
}

.html_header_transparency #top .avia-builder-el-0 .container, .html_header_transparency #top .avia-builder-el-0 .slideshow_caption {
    padding-top: 0px;
    margin-top: -70px;
}

.av_minimal_header_shadow {
    box-shadow: 0 0 2px 1px rgba(0,0,0,0.1) !important;
    /*
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 0, 0, 0.15);
    */
}

#top #wrap_all .av-burger-overlay .av-burger-overlay-scroll #av-burger-menu-ul li a {
    font-weight: normal;
    color: inherit; 
}

.html_burger_menu_active #top #wrap_all .menu-item-search-dropdown > a {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 2px 1px rgba(0,0,0,0.33));
}

.html_av-overlay-side #top .av-burger-overlay-scroll {
    background: rgba(0, 0, 0, 0.65);
    color: #273C69 !important;
}
/*==== End Header, nav, & line menu ====*/
</style>

@media max-width: 660px
#top .av_header_glassy.av_header_transparency #header_main {
    background-color: rgba(0, 0, 0, 1);
}