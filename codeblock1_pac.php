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


/*==== Mobile section 1 ====*/
@media only screen and (max-width: 990px) {
    .avia-builder-el-first .av-section-color-overlay-wrap {
        top: -20px;
    }

    .avia-builder-el-first .av-section-color-overlay-wrap {
        margin-top: -160px;
    }
}


@media only screen and (max-width: 768px) {

    .avia-builder-el-first .av-section-color-overlay-wrap {
        margin-top: 0px;
    }
}

@media only screen and (max-width: 692px) {

    .avia-section-large .content, .avia-section-large .sidebar {
        padding-top: 0px !important;
    }

    span.hr-inner.inner-border-av-border-thin {
        width: 140px !important;
    }

    #top h1 strong, #top h2 strong, #top h3 strong, #top h4 strong, #top h5 strong, #top h6 strong {

        font-size: 12.5vw !important;
    }

}

/*==== End Mobile section 1 ====*/


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
    color: #a0a0a0 !important;
}
/*==== End Header, nav, & line menu ====*/


/*==== Social Media Section ====*/
div#av_section_2 {
    background-color: #f8f8f8;
}

/* == FB codeblock ==*/
<script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2">
</script>

<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/nowpacaz" data-tabs="timeline, events" data-width="500" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&app_id=&container_width=501&height=400&hide_cover=false&href=https%3A%2F%2Fwww.facebook.com%2Fnowpacaz&locale=en_US&sdk=joey&show_facepile=false&small_header=true&tabs=timeline%2C%20events&width=500"><span style="vertical-align: bottom; width: 500px; height: 500px;"><iframe name="f249e4acced1964" width="500px" height="500px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Df3f9683534b2904%26domain%3Daznowpac.org%26origin%3Dhttp%253A%252F%252Faznowpac.org%252Ff3300a944931ccc%26relation%3Dparent.parent&container_width=501&height=400&hide_cover=false&href=https%3A%2F%2Fwww.facebook.com%2Fnowpacaz&locale=en_US&sdk=joey&show_facepile=false&small_header=true&tabs=timeline%2C%20events&width=500" style="border: none; visibility: visible; width: 500px; height: 500px;" class=""></iframe></span></div>
/* == End FB codeblock ==*/

/* == Twitter codeblock ==*/
<a class="twitter-timeline" data-height="500" href="https://twitter.com/NOWPACAZ?ref_src=twsrc%5Etfw">Tweets by NOWPACAZ</a> 

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

/*== End Twitter codeblock ==*/

@media only screen and (min-width: 615px) {
    .fb-page.fb_iframe_widget {
        margin-left: 12%;
    }
}

.avia-builder-el-11 .av-subheading p:last-child {
    color: #000 !important;
}

/*==== End Social Media Section ====*/


/*==== Endorsements ====*/

.avia-builder-el-19 .av-subheading p:last-child {
    margin-bottom: 0;
    font-weight: 400 !important;
}
.av-masonry-entry .av-masonry-entry-title {
    font-weight: 400 !important;
    color: #fff !important;
    text-shadow: 0.5px 1px 2px rgba(0, 0, 0, 0.83);
}

.av-masonry-entry .av-masonry-entry-title + .av-masonry-entry-content {
    font-weight: 400;
    color: #fff !important;
    text-shadow: 0.5px 1px 2px rgba(0, 0, 0, 0.83);
}

.main_color .av-masonry-pagination, .main_color .av-masonry-pagination:hover, .main_color .av-masonry-outerimage-container {
    background-color: rgba(0, 0, 0, 0.9);
}

.av-inner-masonry-content, #top .main_color .container .av-masonry-load-more, #top .main_color .container .av-masonry-sort, .main_color .container .av-masonry-entry .avia-arrow {
    background-color: rgba(0, 0, 0, 0.65) !important;
}

/*==== End Endorsements ====*/


/*==== Endorsement Process ====*/
.avia-builder-el-51 .avia_textblock {
    font-weight: normal;
}

.avia-builder-el-55 .avia_textblock {
    font-weight: normal;
}

.avia-builder-el-59 .avia_textblock {
    font-weight: normal;
}

.avia-builder-el-54 .avia_textblock {
    font-weight: normal;
}

.avia-builder-el-58 .avia_textblock {
    font-weight: normal;
}

.avia-builder-el-62 .avia_textblock {
    font-weight: normal;
}

.main_color .hr-short .hr-inner-style, .main_color .hr-short .hr-inner {
    background-color: #000;
}


.main_color, .main_color div, .main_color header, .main_color main, .main_color aside, .main_color footer, .main_color article, .main_color nav, .main_color section, .main_color span, .main_color applet, .main_color object, .main_color iframe, .main_color h1, .main_color h2, .main_color h3, .main_color h4, .main_color h5, .main_color h6, .main_color p, .main_color blockquote, .main_color pre, .main_color a, .main_color abbr, .main_color acronym, .main_color address, .main_color big, .main_color cite, .main_color code, .main_color del, .main_color dfn, .main_color em, .main_color img, .main_color ins, .main_color kbd, .main_color q, .main_color s, .main_color samp, .main_color small, .main_color strike, .main_color strong, .main_color sub, .main_color sup, .main_color tt, .main_color var, .main_color b, .main_color u, .main_color i, .main_color center, .main_color dl, .main_color dt, .main_color dd, .main_color ol, .main_color ul, .main_color li, .main_color fieldset, .main_color form, .main_color label, .main_color legend, .main_color table, .main_color caption, .main_color tbody, .main_color tfoot, .main_color thead, .main_color tr, .main_color th, .main_color td, .main_color article, .main_color aside, .main_color canvas, .main_color details, .main_color embed, .main_color figure, .main_color fieldset, .main_color figcaption, .main_color footer, .main_color header, .main_color hgroup, .main_color menu, .main_color nav, .main_color output, .main_color ruby, .main_color section, .main_color summary, .main_color time, .main_color mark, .main_color audio, .main_color video, #top .main_color .pullquote_boxed, .responsive #top .main_color .avia-testimonial, .responsive #top.avia-blank #main .main_color.container_wrap:first-child, #top .main_color.fullsize .template-blog .post_delimiter, .main_color .related_posts.av-related-style-full a {
    border-color: unset;
}
/*==== End Endorsement Process ====*/



/*==== Core Issues Section ====*/
.av-subheading p:last-child {
    margin-bottom: 0;
    font-weight: 400;
}

/*=== Core issues text ===*/
.avia-builder-el-11 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-15 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-20 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-24 p {
    font-weight: normal;
}

.avia-builder-el-25 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-27 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-29 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-31 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-33 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-35 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-37 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-39 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-41 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-45 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-28 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-32 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-36 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-40 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-44 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-48 p {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}
/*=== End Core Issues Text ===*/

/*=== Core issues icons ===*/
.avia-builder-el-11 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-15 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-20 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-24 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-25 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-29 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-31 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-33 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-35 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-28 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-32 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-36 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-40 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-44 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-48 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}
.avia-builder-el-37 .av-icon-char {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-39 .av-icon-char {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-41 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}

.avia-builder-el-43 .av-icon-char {
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-45 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}
/*=== End Core issues icons ===*/

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.first.avia-builder-el-37.el_after_av_one_third.el_before_av_one_third.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 10px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

to-left.flex_column_div.av-zero-column-padding.avia-builder-el-41.el_after_av_one_third.el_before_av_one_third.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 10px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.first.avia-builder-el-25.el_after_av_heading.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 10px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-29.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-31.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-33.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-35.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-37.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-39.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-41.el_after_av_one_third.avia-builder-el-last.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-43.el_after_av_one_third.avia-builder-el-last.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-45.el_after_av_one_third.avia-builder-el-last.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-41.el_after_av_one_third.el_before_av_one_third.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65) !important;
    padding: 15px 5px 0px 15px !important;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33) !important;
}


.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.first.avia-builder-el-28.el_after_av_heading.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-32.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-34.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-36.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-38.el_after_av_one_third.el_before_av_one_third.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.first.avia-builder-el-40.el_after_av_one_third.el_before_av_one_third.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-44.el_after_av_one_third.el_before_av_one_third.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-44.el_after_av_one_third.avia-builder-el-last.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.flex_column.av_one_third.av-animated-generic.right-to-left.flex_column_div.av-zero-column-padding.avia-builder-el-48.el_after_av_one_third.avia-builder-el-last.column-top-margin.avia_start_animation.avia_start_delayed_animation {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 15px 5px 0px 15px;
    box-shadow: 0.5px 0.5px 5px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-33 p {
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-29 p {
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}


.avia-builder-el-18 .av-extra-border-inner {
    opacity: 0.79;
}

/*.avia_textblock p {
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.33);
}

.avia-builder-el-33 .av-icon-char {
    color: #fff;
    ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0.5, OffY=0.5, Color='#000')";
    filter: drop-shadow(0.5px 1.5px 0.5px rgba(0,0,0,0.65));
}
*/
.template-page .entry-content-wrapper h1, .template-page .entry-content-wrapper h2 {
    color: #fff;
}
/*==== End Core Issues Section ====*/

/*==== TV Stream ====*/
div#player {
    width: 100% !important;
}

#player-wrap {
    width: 100%;
}

#player-section {
    float: left;
    width: 92% !important;
    background-color: transparent !important;
}
/*==== End TV Stream ====*/

/*==== Calendar ====*/

/*---- Featured Event ----*/
<br>
<hr>
<iframe src="https://docs.google.com/viewer?url=http://aznow.org/wp-content/uploads/2020/02/Equal-Rights-amendment-task-force-AZ-invites-you-to.pdf&amp;embedded=true" width="100%" height="500px" frameborder="0">
</iframe>
<hr>
<br>
/*---- End Featured Event ----*/

span.simcal-day-label.simcal-day-number {
    font-weight: normal;
}

span.simcal-event-title {
    font-weight: normal;
}

span.simcal-event-address.simcal-event-start-location {
    font-weight: normal;
}

.simcal-calendar.simcal-default-calendar.simcal-default-calendar-grid.simcal-default-calendar-dark {
    font-weight: normal !important;
    box-shadow: 0.5px 0.5px 3px 0.5px rgba(0, 0, 0, 0.33);
}

.simcal-event-bubble .simcal-event-details .simcal-event-description, .simcal-event-bubble .simcal-event-details p {
    font-weight: normal;
}
/*==== End Calendar ====*/

/*==== Footers ====*/
.textwidget {
    font-weight: normal !important;
}

#socket .copyright {
    float: left;
    font-weight: normal;
}
/*==== End Footers ====*/



/*
@media max-width: 660px
#top .av_header_glassy.av_header_transparency #header_main {
    background-color: rgba(0, 0, 0, 1);
}
*/
</style>

