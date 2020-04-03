<!DOCTYPE html>

<?php
error_reporting(E_ERROR | E_PARSE);

define('scsn', TRUE);
include 'includes/db.php';
include_once("includes/functions.php"); 

// Set Time Zone
date_default_timezone_set('America/Phoenix');
//echo(date('h:i:s: A'). "<br>");
//echo(time());

$pos_time = array(10);
$pos_loc = array(10);
$pos_type = array(10);
$pos_pay = array(10);
$pos_desc = array(10);

//$query0 = "INSERT INTO postings2 (pos_id) VALUES ($i);";
//$query0_result = mysqli_query($conn, $query0);

//var_dump($query0_result);
//$query0_array = mysqli_fetch_array($query0_result, MYSQLI_ASSOC) or die("Error: ".mysqli_error($conn));
//echo "post_id: ".$i."<br>";
//print_r($query0_array);

$query1 = "SELECT * FROM postings;";
$query1_result = mysqli_query($conn, $query1);

if ($query1_result) {
    //echo "QUERY #1 SUCCESSFUL<br>";
    $query1_array = mysqli_fetch_all($query1_result, MYSQLI_ASSOC);
    //echo "post_id: ".$i."<br>";
    //print_r($query1_array);
    $i = mysqli_num_rows($query1_result);
    

} else {
    //echo "QUERY #1 ERROR: ".mysqli_error($conn)."<br>";
}

if ($i > 0) {
    //echo "post_id: ".$i."<br><br>";
} else {
    $i = 0;
}

$_SESSION['i_g'] = $i;
 
?>

<!--
Written: 3-6-20
By: David Ayodele
-->
<html lang="en">
<head><!-- <head oncontextmenu="return false"> -->
    <meta charset="utf-8">
    <!-- <meta http-equiv="Cache-control" content="no-cache"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
    Star Canyon School of Nursing
    </title>        
    <!--Begin Priority scripts/sheets -->
    <link rel="stylesheet" href="style.css" media="all"><!--?<?php //echo date('l jS \of F Y h:i:s A'); ?>-->
  <link rel="stylesheet" href="css/bootstrap.min_3_0_3.css">
  <link rel="stylesheet" href="../css/jobs_board.css?<?php //echo date('l jS \of F Y h:i:s A'); ?>" media="all">
	<!--<link rel="stylesheet" href="clock.css" media="all">-->
    
	<script src="js/jquery.min.js"></script><!-- jQuery load -->
	
	<script type="text/javascript" src="js/bootstrap_carousel_3_3_7.js"></script>
	<script type="text/javascript" src="js/font-awesome_kit.js"></script> <!-- Watch for duplicate fontawesome links!! -->
	<script type="text/javascript" src="js/sorttable.js"></script> <!-- Thanks Stuart! -->
    <!--<script src="js/clock.js"></script> Clock load -->
    <!-- Google reCaptcha API script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<!-- PHP call & carousel script -->
	<script type="text/javascript">
	var form=document.getElementById("contactForm");
	
	function reCaptcha() {
	    $.get("recaptcha_scsn.php");
	}
	</script>
	<!--End Priority scripts -->
	
	<!-- Custom fonts for this template -->
    <!-- <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> -->
    <link href= 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- Custom icons for website -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#917c95">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Facebook opengraph data -->
    <meta property="og:image:width" content="1064">
    <meta property="og:image:height" content="557">
    <meta property="og:description" content="CNA/LNA and CPR at an affordable price. The vision of SCSN is to produce caring and sensitive Nursing Assistants who will be able to demonstrate excellence and practice ethically in the field of Nursing in the State of Arizona. ">
    <meta property="og:title" content="Star Canyon School of Nursing, LLC">
    <meta property="og:url" content="http://www.starcanyonschoolofnursing.com">
    <meta property="og:image" content="http://www.starcanyonschoolofnursing.com/img/nurses_general_med_1100x733.jpg/og-image.jpg">
    
    <!-- Begin Analytics Script -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128590970-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-128590970-1');
    </script>
    <!-- End Analytics Script -->    
</head>
<body>
    <div class="wrapperTop"> <!-- contains logo, navbar and search form -->
        <header class="pageHeader clearfix"> <!-- wrapper needed for floating logo and search form -->
        <div class="fl_half logo_top"> <!-- will float and take up half of page -->
        <img src="img/scsn_temp_logo_b&p6c.png" alt="My logo" class="logo">
        <span class="logo_text">Star Canyon School of Nursing
		</span>
        </div>
        <!--
        <div class="fl_half">
        <form class="searchForm" method="get">
        <input class="searchField" type="text" name="search" placeholder="" tabindex=2>
        <input type="image" src="img/search_icon_wht.png" alt="Search icon" style="color: #ffffff;">
        </form>
        </div>
        -->
        </header>
        <!--
        <nav id="ham-navigation" class="ham-menu">
        <ul class="menu">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#">Contact Us</a></li>        
        </ul>        
        </nav>
        -->
        <nav class="pageNav clearfix"> <!-- used to control width/spacing of page elements on larger screens-->
        <!--
        <button class="toggleMenu" id="toggleMenu">
        <img src="img/mobile_menu_wht.png" alt="&#926;" class="toggle_menu_img">
        </button>
        -->
        <button id="hamburger-menu" data-toggle="ham-navigation" class="hamburger-menu-button toggleMenu">
        <span class="hamburger-menu-button-open">Menu
        </span>
    	</button>
        <ul class="menuItems visible_on_mobile" id="menuItems">
        <li>
        <a href="index.html">Home</a>
        </li>
        <li>
        <a href="about.html">About Us</a>
        </li>
        <li>
        <a href="classes.html">Classes</a>
        </li>
        <li>
        <a href="enroll.html">Enrollment</a>
        </li>
        <li>
        <a href="faq.html">Questions/Info</a>
        </li>
        <li>
        <a href="jobs.php">Jobs</a>
        </li>
        </ul>
        </nav>
    </div>
    <div class="wrapperMain clearfix">
        <div class="fl_fullwidth">
        <div class="banner_jobs">
        <h1 class="banner_text">
        Jobs &amp; Careers
        <br>
        </h1>
        <br>
        </span>
        </div>
        </div>
        <main class="fl_twoThirds"> <!-- main tag allows search engines to better find main content -->
        <article>
        <!--    
        <div class="layer2">
        </div>
        -->
        <center>
        <h2 class="jobs_page_header">Employment Assistance &amp; Career services </h2>
        </center>
        <br>
        <h2 class="flyers_header">Flyers/Promos</h2>
    <br>
    
    <!-- Begin Flyers -->
    <!-- Controls -->
		<div class='ctrls'>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<i class="fas fa-angle-left" aria-hidden="true" title="Previous"></i>
			</a>
			<a class="right carousel-control swiper-button-next" href="#carousel-example-generic" role="button" data-slide="next">
			<i class="fas fa-angle-right" aria-hidden="true" title="Next"></i>
			</a>
    </div>
    <br>
    <br>
    <div class="carousel_container"> <!-- Adapted from: https://codepen.io/vraajesh/pen/EZQGJO -->		

		<div id="carousel-example-generic" class="carousel carousel_slide" data-ride="carousel">
		
		<div class="carousel-inner" role="listbox">

			<div class="item active">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;"> <!-- https://docs.google.com/viewer?url=https://starcanyonschoolofnursing.com/img/flyers/spectrum_hiring_flyer.pdf&amp;embedded=true -->
			<iframe id="frame1" src="https://drive.google.com/file/d/1c0qOAM33W4bfriXctLVZZWIgFvkUTnVV/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
			</div>
			</div>
      </div>
      
			<div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;">
			<iframe id="frame2" src="https://drive.google.com/file/d/1PeimmsTlwomVX5nFC-BIiEXmTF5boMav/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
		
			<div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;">
			<iframe id="frame3" src="https://drive.google.com/file/d/1WtQkIZ_L5ezNFkPF4BRFhn7kAwISGgJJ/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
			</div>
			</div>
      </div>
      
      <div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;">
			<iframe id="frame4" src="https://drive.google.com/file/d/1PUaoveHfsfeJXqKgGnDXyhk0tjL72arO/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
      
      <div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;">
			<iframe id="frame5" src="https://drive.google.com/file/d/1qWxtBkEQTsYvH7xDgn3WOdpxm_4hk1WD/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
      
      <div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;">
			<iframe id="frame6" src="https://drive.google.com/file/d/19dCo70rIESq1YZ2zYTvzAMKkKLPK81lk/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
      
      <div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container" style="--aspect-ratio: 16/9;">
			<iframe id="frame7" src="https://drive.google.com/file/d/19pngKUdZd6EVHWo8YcQ-LWMeG9CBHgsw/preview" width="" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
      
		</div>
		
		</div>
		
		</div>
		<!-- End Flyers -->
		<br>
		<br>
		<hr class="divider">
		
		<!-- Jobs form -->
		
		<!-- End Jobs form -->

		<br>
		<br>
		<?php //echo($_SESSION['i_g']); ?>
		<!-- 
		--------------
		Postings Board
		--------------	
		-->
		<!-- Postings board (Adapted from Cindy Lee: https://codepen.io/cindylee/pen/eZgJgw) -->
		<div class="bb-wrapper">
    <div class="bb-title"><h2 class="openings_header">Job Openings</h2>
    </div>
      <!--
			<div class="bb-filter">

      <div class="bb-filter-options bb-filter-options__location">
        <span class="bb-filter-options__label">Location</span>
        <select>
          <option>Select a Location</option>
          <option>Kansas City, MO</option>
          <option>Institute, WV</option>
          <option>Muskegon, MI</option>
          <option>West Sacramento, CA</option>
          <option>Shakopee, MN</option>
        </select>
      </div>
      <div class="bb-filter-options bb-filter-options__posting">
        
      <span class="bb-filter-options__label">Posting Type</span>
        <select>
          <option>Select a Posting Type</option>
          <option data-name="forsale">For Sale</option>
          <option data-name="event">Event</option>
          <option data-name="announcement">Announcement</option>
          <option data-name="bartertrade">Barter/Trade</option>
          <option data-name="services">Services</option>
        </select>
        <div class="bb-filter-options__forsale">
          <span class="bb-filter-options__label">Item Type</span>
          <select>
            <option>Select a Posting Type</option>
            <option data-name="realestate">Real Estate</option>
            <option data-name="electronics">Electronics</option>
            <option data-name="homegoods">Home Goods</option>
            <option data-name="furniture">Furniture</option>
            <option data-name="vehicles">Vehicles</option>
            <option data-name="clothes">Clothes & Accessories</option>
            <option data-name="appliances">Appliances</option>
            <option data-name="wanted">Wanted</option>
            <option data-name="other">Other</option>
          </select>
        </div>        
      </div> 

      </div>
      -->
      
      <!--
      <div class="bb-pagination">
				<span>Page:</span>
				<div class="buttons-container">
          
					<li id="tab0_btn"><button onclick="document.getElementById('tab_0').style.display=''; document.getElementById('tab_1').style.display='none'; document.getElementById('tab_2').style.display='none'; document.getElementById('tab_3').style.display='none'; document.getElementById('tab_all').style.display='none';">1 - 10</button></li>
					<li id="tab1_btn"><button onclick="document.getElementById('tab_1').style.display=''; document.getElementById('tab_0').style.display='none'; document.getElementById('tab_2').style.display='none'; document.getElementById('tab_3').style.display='none'; document.getElementById('tab_all').style.display='none';">11 - 20</button></li>
					<li id="tab2_btn"><button onclick="document.getElementById('tab_2').style.display=''; document.getElementById('tab_0').style.display='none'; document.getElementById('tab_1').style.display='none'; document.getElementById('tab_3').style.display='none'; document.getElementById('tab_all').style.display='none';">21-30</button></li>
          <li id="tab3_btn"><button onclick="document.getElementById('tab_3').style.display=''; document.getElementById('tab_0').style.display='none'; document.getElementById('tab_1').style.display='none'; document.getElementById('tab_2').style.display='none'; document.getElementById('tab_all').style.display='none';">31-40</button></li>
          <li id="tabAll_btn"><button onclick="document.getElementById('tab_all').style.display=''; document.getElementById('tab_0').style.display='none'; document.getElementById('tab_1').style.display='none'; document.getElementById('tab_2').style.display='none'; document.getElementById('tab_3').style.display='none';">View All</button></li>
          ->
          <ul>
					<li>&nbsp; 1 - 10 &nbsp;</li>
					<li>&nbsp; 11 - 20 &nbsp;</li>
					<li>&nbsp; 21 - 30 &nbsp;</li>
          <li>&nbsp; 31 - 40 &nbsp;</li>
          <li>&nbsp; View All &nbsp;</li>
				  </ul>
          <input id="switch-0" type="checkbox" name="table-check" class="switch4-input" style="display: block;"/>
          <div class="toggle-switch0">
          <input type="checkbox" id="switch0" name="chkTest0">
          <label for="chkTest0">
          <span class="toggle-track0"></span>
          </label>          
          </div>
          <!-
          <div class="toggle-switch1">
          <input type="checkbox" id="chkTest1" name="chkTest1">
          <label for="chkTest1">
          <span class="toggle-track1"></span>
          </label>
          </div>

          <div class="toggle-switch2">
          <input type="checkbox" id="chkTest2" name="chkTest2">
          <label for="chkTest2">
          <span class="toggle-track2"></span>
          </label>
          </div>
         
          <div class="toggle-switch3">
          <input type="checkbox" id="chkTest3" name="chkTest3">
          <label for="chkTest3">
          <span class="toggle-track3"></span>
          </label>
          </div>
          
          <div class="toggle-switch4">
          <input type="checkbox" id="chkTest4" name="chkTest4">
          <label for="chkTest4">
          <span class="toggle-track4"></span>
          </label>
          </div>          
          
        </div>
      </div> -->

      <!-- ##### Pagination Area ##### -->
      
      <div class="bb-pagination">
      <!-- <span>Page:</span> -->
      <div class="buttons-container">
      <!-- 
      <ul>
      <li>&nbsp; 1 - 10 &nbsp;</li>
      <li>&nbsp; 11 - 20 &nbsp;</li>
      <li>&nbsp; 21 - 30 &nbsp;</li>
      <li>&nbsp; 31 - 40 &nbsp;</li>
      <li>&nbsp; View All &nbsp;</li>
      </ul>
      -->
      <!-- <input id="switch-0" type="checkbox" name="table-check" class="switch0-input" style="display: block;"/> -->
      
      <!-- ##### Toggle buttons ##### -->
      <div class="button_container">
      <strong><span class="page_text">Display &nbsp; &nbsp;</span></strong>

      <div class="toggle-switch0">
      <!-- <input id="switch-0" type="checkbox" name="table-check" class="switch0-input"> -->
      <label for="switch-0" class="switch0-label">
      <span class="toggle-track0 active_toggle"> <center class="pagination_text">1 - 10</center> </span>
      </label>          
      </div>

      <div class="toggle-switch1">
      <!-- <input id="switch-1" type="checkbox" name="table-check" class="switch0-input"> -->
      <label for="switch-1" class="switch1-label">
      <span class="toggle-track1"> <center class="pagination_text">11 - 20</center> </span>
      </label>          
      </div>

      <div class="toggle-switch2">
      <!-- <input id="switch-1" type="checkbox" name="table-check" class="switch0-input"> -->
      <label for="switch-2" class="switch2-label">
      <span class="toggle-track2"> <center class="pagination_text">21 - 30</center> </span>
      </label>          
      </div>
      
      <div class="toggle-switch3">
      <!-- <input id="switch-1" type="checkbox" name="table-check" class="switch0-input"> -->
      <label for="switch-3" class="switch3-label">
      <span class="toggle-track3"> <center class="pagination_text">31 - 40</center> </span>
      </label>          
      </div>

      <div class="toggle-switch4">
      <!-- <input id="switch-1" type="checkbox" name="table-check" class="switch0-input"> -->
      <label for="switch-4" class="switch4-label">
      <span class="toggle-track4"> <center class="pagination_text">41 - 100</center> </span>
      </label>          
      </div>

      </div>
      <!-- ##### End Toggle buttons ##### -->

      </div>
      </div>
      <!-- ##### End Pagination Area ##### -->
      
      <center>
      <div class="db_container" id="log">    
      
      <!-- DivTable.com -->     
      </div>
      </center>
    <!-- End Postings Board -->
    <br>
    <br>
    <hr class="divider3">
    <h3 class="location_header" style="font-family: Arial, sans-serif;">Our Location
    </h3>
    <br>
    <br>
    <p style="font-size: 14px;">
    &bull; We're conveniently located along city bus routes on Central Avenue &amp; Dunlap Road. Plan a trip <a class="scrubs_link" href="https://www.valleymetro.org/trip-planner" target="_blank" style="text-decoration:none;">
		<u>here</u></a>!
    <br>
    <br>
    <div id="map">
    </div>
    </article>
    </main>
    <!-- End Main Area -->

    <!-- Begin Side Area -->
    <aside class="fl_oneThird">
    <section class="aside_classes">
    
    <h3 class="resume_header" style="font-family: Arial, sans-serif;">Résumé Help
    </h3>
    <div class="resume">
    <img class="resume" src="img/flyers/scsn_resume_508x718.jpg">
    </div>
    <br>
    <br>
    </p>
    </section>
    <section id="tax_form">
		<h4>
		<strong>Need some work on your résumé?</strong> <br><br> We're here to help! We offer professional résumé building sessions in private or in group settings to all students. 
		</h4>
		<p>
		</p>
		<!--
		<span id = "taxframe_span">
    <iframe id="tax_frame" src="tax_form_front.php" style="border-width:0" width="100%" height="600px" frameborder="0" scrolling="yes">
    </iframe>
    </span>
    -->
    <br>
    <br>
    </section>        
        
    <!-- Contact Form (edited 7/07/18)-->
		<section id="contact_form">
		<h3 class="hiring_header">
		Hiring CNAs/LNAs/Caregivers?
		</h3>
		<h4 class="post_form_header">
		Post a job opening below!
    <br>
    <span class="post_form_sub">We'll get the word to our students ASAP.</span>
		<br>
		</h4>
      
    <script>
    var submitted=false;
    </script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" frameborder="0"> <!-- onload="if(submitted){this.style.display='block';}" // Will display form confirmation in iframe above form --> 
    </iframe>
    <center>
    <div class="content">
      <div id="form">

      <form action="" method="POST" target="hidden_iframe" class="contact-form" id="contactForm" name="form1"> <!-- onsubmit="return validateFormOnSubmit(this); event.preventDefault(); -->
      <input maxlength="1000" type="text" name="catcher" id="catcher_id" class="catcher_class" value="" />
      
      <input maxlength="1000" type="text" name="entry.321910209" id="name" class="name" placeholder="Employer/Agent name:" tabindex=1 required/>
      
      <input maxlength="1000" type="text" name="entry.1847339881" id="email" class="email" placeholder="Employer email:" tabindex=2 required/>
      
      <input maxlength="1000" type="text" name="entry.1710439998" id="phone" class="phone fas fa-phone" placeholder="Employer phone: use (XXX) XXX-XXXX format" tabindex=2 required/>
      
      <input maxlength="1000" type="text" id="msg" name="entry.1111273474" placeholder="Special notes (optional)" class="message2" tabindex=2 />
      
      <br>
      <input id="input_loc" maxlength="1000" class="city" type="text" name="entry.1734281767" placeholder="Job location" tabindex=2 required/>
      
      <input id="input_typ" maxlength="1000" class="course_date" type="text" name="entry.609998995" placeholder="Job type (e.g. CNA/LNA/Caregiver)" tabindex=2 required/>
      
      <input id="input_pay" maxlength="1000" class="payment" type="text" name="entry.842548913" placeholder="Job pay" tabindex=2 required/>
      
      <textarea tabindex=""" class="message" maxlength="10000" rows="5" id="input_desc" name="entry.1128242642" placeholder="Job description" tabindex=2 required></textarea> <!-- TEXTAREA TAGS MUST BE ON ONE LINE!! -->
                
      <button type="submit" name="submit_btn" id="submit_btn" class="submit_btn" tabindex=5>Submit</button>
      <span style="font: bold normal 12px/80% Arial, Helvetica, sans-serif; line-height: 10px;">To submit, please click the captcha below <br>(may take a few seconds)</span>
      <br>
      <div class="g-recaptcha jobs_captcha" id="captchabox" data-sitekey="6LdSPuYUAAAAAOCZ968-sJ5Z1u5l68xucoEBZhVl" data-callback="imNotARobot"> <!-- localhost: 6LfWbN8UAAAAALUon3XBSFs-fMmm0GNVXGlNDq6s -->
      </div>
      <span class="" id="status_msg" name="msg"></span>
      <!-- <span id="captcha">Captcha Code:</span> -->					
      </form>

      </div>
	  </div>
    </center>
    </section>
    <!-- End contact form -->
    <br>
    <br>
    <h3 class="upload_header" style="font-family: Arial, sans-serif;">Send media
    </h3>
    <button class="upload_btn" width="200" onclick="window.open('https://script.google.com/macros/s/AKfycbz2jRfte0UTKlTPgjksETvan4soLPWkco0HAzUcQHJmo-3njZnC/exec');">
    Upload a file    
    </button>
    <br>
    <br>
		<h4>
		We'll try to show your ad on this page or on our bulletin board if we have room. You should create a post with the form above just in case. You can also email ads for our students to starcanyonschool at gmail.com. 
    </h4>
    
    </aside>
    </div><!-- end wrapper main -->
    <div class="wrapperBottom">
        <footer class="pageFooter clearfix"> <!-- footer will act aas inner wrapper for 3 floating cols centered on page -->
        <div class="fl_oneThird">
        <a href="https://www.facebook.com/Star-Canyon-School-of-Nursing-1589562361058884/">
        <img class="fb_img" src="img/fb_img.png">
        </a>
        </div>
        <div class="fl_oneThird copyleft">
        Star Canyon School of Nursing <span class="copyleft_logo">&copy;</span><p id="scsn_year" style="display: inline;"></p> 
        <br>
        8900 N. Central Avenue, Suite 107
        <br>
        Phoenix, AZ 85020
        <br>
        Phone: 602.935.6628
        <br>
        Fax: 602.943.0864 
        </div>
        <div class="fl_oneThird">
        <a href="https://www.instagram.com/starcanyonschool/">
        <!-- <a href="mailto:regina.ayodele@gmail.com?Subject=SCSN%20Inquiry%20(From%20Website)%20"> -->
        <img class="mail_img" src="img/instagram_logo_thicker.png">
        </a> 
        </div>
        </footer>
    </div>
    
    <!-- Google Maps marker and Toggle Menu script (edited 5/28/18, 5/4/19)-->
    <script type="text/javascript">
    function initMap() {
        var loc = {lat: 33.565630, lng: -112.074325};
        var map = new google.maps.Map(document.getElementById("map"), {zoom: 15, center: loc});
        var marker = new google.maps.Marker({position: loc, map: map});
    }

    var button = document.getElementById('hamburger-menu');
    var span = button.getElementsByTagName('span')[0];

    button.onclick =  function() {
      span.classList.toggle('hamburger-menu-button-close');
    };

    $('#hamburger-menu').on('click', toggleOnClass);
    //$('#menuItems').on('click', toggleOnClass);

    function toggleOnClass(event) {
        var toggleElementId = '#' + $(this).data('toggle');
        var element = $(toggleElementId);
        element.toggleClass('on');
        element.toggleClass('visible_on_mobile');
        if(menu.className == "menuItems visible_on_mobile") {
                menu.className = "menuItems hidden_on_mobile";
        }
        else {
            menu.className = "menuItems visible_on_mobile"; 
        }
    }

    // close hamburger menu after click a
    $( '.menu li a' ).on("click", function(){
      $('#hamburger-menu').click();
    });
    
    var menuToggle = function menuToggle() {
        //var btn = document.getElementById("toggleMenu"); /*id for button*/
        var menu = document.getElementById("menuItems"); /*id for <ul>*/
        var button = document.getElementById('hamburger-menu');
        var menuHandler = function menuHandler() {
            if(menu.className == "menuItems visible_on_mobile") {
                menu.className = "menuItems hidden_on_mobile";
            }
            else {
                menu.className = "menuItems visible_on_mobile"; 
            }
        }
        button.addEventListener("click", menuHandler, false);
        //button.addEventListener("click", menuHandler, false);
    }
    try {
        window.addEventListener("load", menuToggle, false);
    } 
    catch(e) {
        window.onload = menuToggle;
    }
    </script>
    <!-- End script-->
    
    <!-- Begin google maps script -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfHjaHcyb_H21BLeYTrMopUq79g0rJYa0&callback=initMap" type="text/javascript">
    </script>
    <!-- End google maps script -->
    <script src="js/datetime.js"></script><!-- datetime load -->
    
    <!-- Begin floating header Script -->
    <script>
    /* ========================================== 
    scrollTop() >= 80
    Should be equal the the height of the header
    ========================================== */
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 80) {
            $('nav').addClass('fixed-header');
        }
        else {
            $('nav').removeClass('fixed-header');
        }
    });
    </script>
    <!-- End floating header Script -->
  <!-- Toggle buttons script -->
  <script>
  $(function(){
    $('.toggle-track4, .toggle-track3, .toggle-track2, .toggle-track1, .toggle-track0').on('click', function(event){
      //event.preventDefault();
      $(this).toggleClass('active_toggle');
    });
  });
  </script>
  <!-- End toggle buttons script -->
	<!-- Postings sort & flyers Script -->
	<script type="text/javascript">
	$('.carousel').carousel({
		interval: 12000
	});

  $('.bb-filter-options__posting').on('change', function() {
  $('.bb-filter-options').children('.bb-filter-options__forsale').hide();
  
  $('.bb-filter-options__' + $('option:selected', this).data("name")).css("display", "block");
	});
	</script>
	<!-- End Postings board & flyers Script -->
    
  <!-- Postings tracker script -->
  <script src="js/tracker.js"></script>
  <script>
  
  /*
  $(document).ready(function(){
    var display0 =  $("#tab_0").css("display");
    var display1 =  $("#tab_1").css("display");
    var display2 =  $("#tab_2").css("display");
    var display3 =  $("#tab_3").css("display");
    var displayAll =  $("#tab_all").css("display");

    if(display1 !="none") {
        $("#tab_1").attr("style", "display:none");
    }
    if(display2 !="none") {
        $("#tab_2").attr("style", "display:none");
    }
    if(display3 !="none") {
        $("#tab_3").attr("style", "display:none");
    }
    if(displayAll !="none") {
        $("#tab_all").attr("style", "display:none");
    }
  });
  */
  </script>
    

</body>
</html>

<style type="text/css">
/*
.carousel_container iframe {
  -ms-zoom: 0.75;
  -moz-transform: scale(0.75);
  -moz-transform-origin: 0 0;
  -o-transform: scale(0.75);
  -o-transform-origin: 0 0;
  -webkit-transform: scale(0.75);
  -webkit-transform-origin: 0 0;
}

.carousel_container .video-container {
  height: 700px;
}

[style*="--aspect-ratio"] > :first-child {
  width: 100%;
}
[style*="--aspect-ratio"] > img {  
  height: auto;
} 
@supports (--custom:property) {
  [style*="--aspect-ratio"] {
    position: relative;
  }
  [style*="--aspect-ratio"]::before {
    content: "";
    display: block;
    padding-bottom: calc(100% / (var(--aspect-ratio)));
  }  
  [style*="--aspect-ratio"] > :first-child {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
  }  
}
*/

img {
  height: 100% !important;
}

.jobs_page_header {
  margin-top: -15px;
  margin-bottom: -25px;
}

@media screen and (min-width: 1280px) {
  .jobs_page_header {
    margin-left:25%;
    position: absolute;
  }
}

#frame2, #frame1, #frame5, #frame6 {
	/*margin-left: 65px;*/
}

.upload_btn:hover {
  background: rgba(104, 59, 114, 0.9);
}

.upload_btn:active {
  background: rgba(104, 59, 114, 0.9);
  -webkit-box-shadow: 0px 0x 0px rgba(0, 0, 0, 0.5);
  box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
  transform: translateY(4px);
}

.upload_btn {
  background: rgba(104, 59, 114, 1);
  color: #fff;
  border: none;
  border-radius: 0px;
  font-size: 16px;
  padding: 15px 30px;
  text-decoration: none;
  -webkit-box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
  box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5); 
}

.post_form_sub {
  font-weight: 400;
  font-size: 13px;
}

.post_form_header {
  margin-top: 20px;
  font-weight: 600;
  margin-left: 10px;
}
div#log {
    overflow-x: scroll;
}

.hiring_header::after {
  position: absolute;
  z-index: -1;
  content: "";
  right: -10px;
  top: 0px;
  height: 45px;
  width: 20px;
  background-color: inherit;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

.hiring_header {
  color: #fff;
  text-shadow: 0.5px 0.5px 2px rgba(0, 0, 0, 0.33);
  background: rgba(104, 59, 114, 1);
  width: 352px;
  padding-left: 15px;
  margin-left: 10px;
  position: relative;
  ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: drop-shadow(0px 4px 7px rgba(0,0,0,0.33));
}

.resume_header::after {
  position: absolute;
  z-index: -1;
  content: "";
  right: -10px;
  top: 0px;
  height: 45px;
  width: 20px;
  background-color: inherit;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

.resume_header {
  color: #fff;
  text-shadow: 0.5px 0.5px 2px rgba(0, 0, 0, 0.33);
  background: rgba(104, 59, 114, 1);
  width: 185px;
  padding-left: 20px;
  position: relative;
  margin-top: 50px;
  margin-left: 10px;
  ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: drop-shadow(0px 4px 7px rgba(0,0,0,0.33));
}

.location_header::after {
  position: absolute;
  z-index: -1;
  content: "";
  right: -10px;
  top: 0px;
  height: 45px;
  width: 20px;
  background-color: inherit;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

.location_header {
  color: #fff;
  background: rgba(104, 59, 114, 1);
  width: 185px;
  padding-left: 20px;
  position: relative;
  margin-top: 50px;
  margin-left: 10px;
  ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: drop-shadow(0px 4px 7px rgba(0,0,0,0.33));
}

.flyers_header::after, .openings_header::after {
  position: absolute;
  z-index: -1;
  content: "";
  right: -10px;
  top: 0px;
  height: 52px;
  width: 20px;
  background-color: inherit;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

.flyers_header, .openings_header {
  color: #fff;
  text-shadow: 0.5px 0.5px 2px rgba(0, 0, 0, 0.33);
  background: rgba(104, 59, 114, 1);
  width: 243px;
  padding-left: 20px;
  margin-left: 10px;
  position: relative;
  ms-filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: "progid:DXImageTransform.Microsoft.Dropshadow(OffX=0, OffY=4, Color='#000')";
    filter: drop-shadow(0px 4px 7px rgba(0,0,0,0.33));
}

img.resume {
  box-shadow: 0px 3px 7px 0.5px rgba(0, 0, 0, 0.33);
  margin-top: 10px;
}

hr.divider {
  border: 0;
  margin-top: 30px;
  height: 1px;
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
}

hr.divider3 {
  border: 0;
  margin-top: 30px;
  height: 1px;
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
}

#contact_form #form textarea {
  border-radius: 5px;
}

#contact_form #form input {
  border-radius: 5px;
}

#contact_form {
  padding-bottom: 10px;
}

.active_toggle {
  transform: translateY(5px) !important;
  box-shadow: 0px 0px 0px #ccc !important;
  background: #efefef !important;
  border: 2px solid #ddd !important;
}

center.pagination_text {
  padding-top: 3px;
}

span.page_text {
  padding-top: 8px;
  margin-left: -10px;
}

.button_container {
  position: relative;
  margin-bottom: 40px;
  padding-bottom: 20px;
  width: 375px;
}

/*
.divTableHead {
  font-weight: 600;
}

*/
.phone_col {
  width: 7.5rem;
  padding: 5px;
}

.loc_col {
  width: 7.5rem;
  padding: 5px;
}

.type_col {
  width: 5rem;
  padding: 5px;
}

.pay_col {
  width: 4rem;
  padding: 5px;
}

.date_col {
  width: 10rem;
  padding: 5px;
}

.desc_col {
  width: 14rem;
  padding: 5px;
}
/* ----- Button 0 -----*/ 
.toggle-switch0 {
  width: 50px;
  margin: 0px;
  position: absolute;
  left: 50px;
}

#switch-0:checked ~ #table_0 { /* #switch0 maybe referencing the hidded checkbox as this is adjacent #table_0 */
  display: none;
  transition: opacity 1s ease-out;
  opacity: 0;
}

input#switch-0 {
  display: none;
}
/*
.toggle-switch1 input[type=checkbox] {
  display:none;
}
*/

.toggle-switch0 label {
  cursor: pointer;
}

.toggle-switch0 input[type="checkbox"]:checked + label .toggle-track0:before {
  background:green !important;
  right:25px !important;
}

.toggle-switch0 label .toggle-track0 {
  display:inline;
  height:25px; /*15*/
  width:54px; /*40*/
  margin-top: 5px;
  margin-left: 0px;
  border-radius:5px; /*20*/
  position:relative;
  margin-bottom:15px;
  border: 1px solid #d0d0d0;
  background: #efefef;
  border-radius: 5px;
  box-shadow: 0 5px 7px rgba(0, 0, 0, 0.33);
  transition-duration: 0.01s;
}
/* ----- End Button 0 ----- */

/* ----- Button 1 -----*/ 
.toggle-switch1 {
  width: 50px;
  margin: 0px;
  position: absolute;
  left: 110px;
}

#switch-1:checked ~ #table_1 { /* #switch0 maybe referencing the hidded checkbox as this is adjacent #table_0 */
  display: none;
  transition: opacity 1s ease-out;
  opacity: 0;
}

input#switch-1 {
  display: none;
}
/*
.toggle-switch1 input[type=checkbox] {
  display:none;
}
*/

.toggle-switch1 label {
  cursor: pointer;
}

.toggle-switch1 input[type="checkbox"]:checked + label .toggle-track1:before {
  background:green !important;
  right:25px !important;
}

.toggle-switch1 label .toggle-track1 {
  display:inline;
  height:25px; /*15*/
  width:54px; /*40*/
  margin-top: 5px;
  margin-left: 0px;
  border-radius:5px; /*20*/
  position:relative;
  margin-bottom:15px;
  border: 1px solid #d0d0d0;
  background: #efefef;
  border-radius: 5px;
  box-shadow: 0 5px 7px rgba(0, 0, 0, 0.33);
  transition-duration: 0.01s;
}
/* ----- End Button 1 ----- */


/* ----- Button 2 -----*/ 
.toggle-switch2 {
  width: 50px;
  margin: 0px;
  position: absolute;
  left: 170px;
}

#switch-2:checked ~ #table_2 { /* #switch0 maybe referencing the hidded checkbox as this is adjacent #table_0 */
  display: none;
  transition: opacity 1s ease-out;
  opacity: 0;
}

input#switch-2 {
  display: none;
}
/*
.toggle-switch1 input[type=checkbox] {
  display:none;
}
*/

.toggle-switch2 label {
  cursor: pointer;
}

.toggle-switch2 input[type="checkbox"]:checked + label .toggle-track2:before {
  background:green !important;
  right:25px !important;
}

.toggle-switch2 label .toggle-track2 {
  display:inline;
  height:25px; /*15*/
  width:54px; /*40*/
  margin-top: 5px;
  margin-left: 0px;
  border-radius:5px; /*20*/
  position:relative;
  margin-bottom:15px;
  border: 1px solid #d0d0d0;
  background: #efefef;
  border-radius: 5px;
  box-shadow: 0 5px 7px rgba(0, 0, 0, 0.33);
  transition-duration: 0.01s;
}
/* ----- End Button 2 ----- */


/* ----- Button 3 -----*/ 
.toggle-switch3 {
  width: 50px;
  margin: 0px;
  position: absolute;
  left: 230px;
}

#switch-3:checked ~ #table_3 { /* #switch0 maybe referencing the hidded checkbox as this is adjacent #table_0 */
  display: none;
  transition: opacity 1s ease-out;
  opacity: 0;
}

input#switch-3 {
  display: none;
}
/*
.toggle-switch1 input[type=checkbox] {
  display:none;
}
*/

.toggle-switch3 label {
  cursor: pointer;
}

.toggle-switch3 input[type="checkbox"]:checked + label .toggle-track3:before {
  background:green !important;
  right:25px !important;
}

.toggle-switch3 label .toggle-track3 {
  display:inline;
  height:25px; /*15*/
  width:54px; /*40*/
  margin-top: 5px;
  margin-left: 0px;
  border-radius:5px; /*20*/
  position:relative;
  margin-bottom:15px;
  border: 1px solid #d0d0d0;
  background: #efefef;
  border-radius: 5px;
  box-shadow: 0 5px 7px rgba(0, 0, 0, 0.33);
  transition-duration: 0.01s;
}
/* ----- End Button 3 ----- */


/* ----- Button 4 -----*/ 
.toggle-switch4 {
  width: 50px;
  margin: 0px;
  position: absolute;
  left: 290px;
  font-size: 12px;
}

input#switch-4 {
  display: none;
}
/*
.toggle-switch1 input[type=checkbox] {
  display:none;
}
*/

.toggle-switch4 label {
  cursor: pointer;
}

.toggle-switch4 input[type="checkbox"]:checked + label .toggle-track4:before {
  background:green !important;
  right:25px !important;
}

.toggle-switch4 label .toggle-track4 {
  display:inline;
  height:25px; /*15*/
  width:54px; /*40*/
  margin-top: 5px;
  margin-left: 0px;
  padding-top: 1px;
  border-radius:5px; /*20*/
  position:relative;
  margin-bottom:15px;
  border: 1px solid #d0d0d0;
  background: #efefef;
  border-radius: 5px;
  box-shadow: 0 5px 7px rgba(0, 0, 0, 0.33);
  transition-duration: 0.01s;
}
/* ----- End Button 4 ----- */

/* ----- Div table ----- */
.divTable {
    display: table;
    text-align: center;
    width: 60%;
    margin: 10% auto 0;
    border-collapse: separate;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
  }
  
  .divTableRow {
    display: table-row;
  }
  
  .divTableHeading {
    display: table-row;
  }
  
  .divTableHead {
    display: table-cell;
    border-bottom: #ccc 1px solid;
    border-top: #ccc 1px solid;
    background: #888;
    color: #e5e5e5;
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: 700;
    text-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.33);
  }
  
  .divTableHead:first-child {
    border-left: #ccc 1px solid;
    border-top-left-radius: 5px;
  }
  
  .divTableHead:last-child {
    border-right: #ccc 1px solid;
    border-top-right-radius: 5px;
  }
  
  .table_small {
    display: table-cell;
  }
  
  .divTableRow > .table_small > .divTableCell:nth-child(odd) {
    display: none;
    background: #888; /*#bdbdbd*/
    color: #e5e5e5;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  
  .divTableRow > .table_small > .divTableCell {
    padding-top: 3px;
    padding-bottom: 3px;
    color: #5b5b5b;
    overflow-wrap: break-word;
    /*border-bottom: #ccc 1px solid;*/
  }
  
  .divTableRow > .table_small:first-child > .divTableCell {
    border-left: #ccc 1px solid;
  }
  
  .divTableRow > .table_small:last-child > .divTableCell {
    border-right: #ccc 1px solid;
  }
  
  .divTableRow:last-child > .table_small:last-child > .divTableCell:last-child {
    border-bottom-right-radius: 5px;
  }
  
  .divTableRow:last-child > .table_small:first-child > .divTableCell:last-child {
    border-bottom-left-radius: 5px;
  }
  
  .divTableRow:nth-child(2n+3) {
    background: #e9e9e9;
  }


  
  @media screen and (max-width: 771px) {
    .hiring_header {
      font-size: 24px;
      width: 352px;
    }
    .hiring_header::after {      
      height: 45px;      
    }
  }

  @media screen and (max-width: 967px) {
    .hiring_header {
      font-size: 12px;
      width: 185px;
    }
    .hiring_header::after {      
      height: 33px;      
    }
  }
  
  @media screen and (max-width: 1280px) {
    .hiring_header::after {      
      height: 36px;      
    }

    .hiring_header {
      font-size: 16px;      
      width: 250px;      
    }
  }

  @media screen and (max-width: 900px) {
    .divTable {
      width: 90%
    }
  }
  
  @media screen and (max-width: 748px) { /*650px*/

    .hiring_header {
      font-size: 12px;
      width: 185px;
    }
    .hiring_header::after {      
      height: 32px;      
    }
    .page_text {
        top: -55px;
        left: 155px;
        position: relative;
        padding-top: 30px !important;        
    }
    .button_container {
      margin-left: -112px;
      margin-top: 45px;
      margin-bottom: 25px;
    }
    .page_text {
      margin-top: 0px;
    }
    .divTable {
      display: block;
    }
    .divTableRow:nth-child(2n+3) {
      background: none;
    }
    .divTableHeading {
      display: none;
    }
    .divTableRow > .table_small > .divTableCell:nth-child(odd) {
      display: table-cell;
      width: 50%;
    }
    .divTableCell {
      display: table-cell;
      width: 50%;
    }
    .divTableRow {
      display: table;
      width: 100%;
      border-collapse: separate;
      padding-bottom: 20px;
      margin: 5% auto 0;
      text-align: center;
    }
    .table_small {
      display: table-row;
    }
    .divTableRow > .table_small:first-child > .divTableCell:last-child {
      border-left: none;
    }
    .divTableRow > .table_small > .divTableCell:first-child {
      border-left: #ccc 1px solid;
    }
    .divTableRow > .table_small:first-child > .divTableCell:first-child {
      border-top-left-radius: 5px;
      border-top: #ccc 1px solid;
    }
    .divTableRow > .table_small:first-child > .divTableCell:last-child {
      border-top-right-radius: 5px;
      border-top: #ccc 1px solid;
    }
    .divTableRow > .table_small:last-child > .divTableCell:first-child {
      border-right: none;
    }
    .divTableRow > .table_small > .divTableCell:last-child {
      border-right: #ccc 1px solid;
    }
    .divTableRow > .table_small:last-child > .divTableCell:first-child {
      border-bottom-left-radius: 5px;
    }
    .divTableRow > .table_small:last-child > .divTableCell:last-child {
      border-bottom-right-radius: 5px;
    }
  }
 
/* ----- End Div table ----- */

/*
.toggle-switch0 .toggle-track0:before {
  content:'';
  display:inline-block;
  height:17px;
  width:17px;
  background:red;
  border-radius:20px;
  position:absolute;
  top: -2px;
  right:0px;
  transition:right .2s ease-in;
}
*/

/*
.toggle-switch0 input[type=checkbox], .toggle-switch1 input[type=checkbox], .toggle-switch2 input[type=checkbox], .toggle-switch3 input[type=checkbox], .toggle-switch4 input[type=checkbox] {
  display:none;
}

.toggle-switch0 label, .toggle-switch1 label, .toggle-switch2 label, .toggle-switch3 label, .toggle-switch4 label {
  cursor:pointer;
  display: inline !important;
}

.toggle-switch0 label .toggle-track0, .toggle-switch1 label .toggle-track1, .toggle-switch2 label .toggle-track2, .toggle-switch3 label .toggle-track3, .toggle-switch4 label .toggle-track4 {
  display:inline !important;
  height:15px;
  width:40px;
  margin-top: 5px;
  margin-left: 33px;
  background:#dadada;
  border-radius:20px;
  position:relative;
  margin-bottom:15px;
  border:1px solid #ccc;
}

.toggle-switch0 .toggle-track0:before, .toggle-switch1 .toggle-track1:before, .toggle-switch2 .toggle-track2:before, .toggle-switch3 .toggle-track3:before, .toggle-switch4 .toggle-track4:before {
  content:'';
  display:inline-block;
  height:15px;
  width:15px;
  background:red;
  border-radius:20px;
  position:absolute;
  top:-1px;
  right:0px;
  transition:right .2s ease-in;
}

.toggle-switch0 input[type="checkbox"]:checked + label .toggle-track0:before, .toggle-switch1 input[type="checkbox"]:checked + label .toggle-track1:before, .toggle-switch2 input[type="checkbox"]:checked + label .toggle-track2:before, .toggle-switch3 input[type="checkbox"]:checked + label .toggle-track3:before, .toggle-switch4 input[type="checkbox"]:checked + label .toggle-track4:before {
  background:green;
  right:25px;
  display: inline-block;
}

.toggle-switch0 input[type="checkbox"]:checked + label #tab_0 { /* when the checkbox element with class "toggle-switch0" is checked ADJACENT TO a label with id "tab0" do this: 
  display:  none;
}
*/


/* ----- Button 2 -----/ 
.toggle-switch2 input[type=checkbox] {
  display: none;
} 

.toggle-switch2 label {
  cursor:pointer;
  display: inline !important;
}

.toggle-switch2 label .toggle-track2 {
  display:inline !important;
  height:15px;
  width:40px;
  margin-top: 5px;
  margin-left: -16px;
  background:#dadada;
  border-radius:20px;
  position:relative;
  margin-bottom:15px;
  border:1px solid #ccc;
}

.toggle-switch2 .toggle-track2:before {
  content:'';
  display:inline-block;
  height:17px;
  width:17px;
  background:red;
  border-radius:20px;
  position:absolute;
  top:-1px;
  right:0px;
  transition:right .2s ease-in;
}

.toggle-switch2 input[type="checkbox"]:checked + label .toggle-track2:before{
  background:green;
  right:25px;
  display: inline-block;
}



/* ----- Button 3 ----- / 
.toggle-switch3 input[type=checkbox] {
  display: none;
}

.toggle-switch3 label {
  cursor:pointer;
  display: inline !important;
}

.toggle-switch3 label .toggle-track3 {
  display:inline !important;
  height:15px;
  width:40px;
  margin-top: 5px;
  margin-left: -16px;
  background:#dadada;
  border-radius:20px;
  position:relative;
  margin-bottom:15px;
  border:1px solid #ccc;
}

.toggle-switch3 .toggle-track3:before {
  content:'';
  display:inline-block;
  height:17px;
  width:17px;
  background:red;
  border-radius:20px;
  position:absolute;
  top:-1px;
  right:0px;
  transition:right .2s ease-in;
}

.toggle-switch3 input[type="checkbox"]:checked + label .toggle-track3:before{
  background:green;
  right:25px;
  display: inline-block;
}

/* ----- Button 4 ----- / 
.toggle-switch4 input[type=checkbox] {
  display: none;
}

.toggle-switch4 label {
  cursor:pointer;
  display: inline !important;
}

.toggle-switch4 label .toggle-track4 {
  display:inline !important;
  height:15px;
  width:40px;
  margin-top: 5px;
  margin-left: -16px;
  background:#dadada;
  border-radius:20px;
  position:relative;
  margin-bottom:15px;
  border:1px solid #ccc;
}

.toggle-switch4 .toggle-track4:before {
  content:'';
  display:inline-block;
  height:17px;
  width:17px;
  background:red;
  border-radius:20px;
  position:absolute;
  top:-1px;
  right:0px;
  transition:right .2s ease-in;
}

.toggle-switch4 input[type="checkbox"]:checked + label .toggle-track4:before{
  background:green;
  right:25px;
  display: inline-block;
}

/* ----- End Buttons ----- */ 


#tab0_btn, #tab1_btn, #tab2_btn, #tab3_btn, #tabAll_btn {
  padding-left: 2px;
  padding-right: 2px;
}

.jobs_captcha {
    transform: scale(0.85) !important;
    transform: scale(75vw);
    transform-origin: 50% 0 !important;
    overflow: hidden !important;
}

.wrapperMain.clearfix {
    max-width: 1280px;
}
/*##### Postings Board #####*/
th.no-sort:after, .divTableHead.no-sort:after {
    display: none !important;
    content: "" !important;
}

.bb-wrapper {
  width: 100%;
  margin: 0 auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  overflow-x: auto;
}
.bb-wrapper * {
  box-sizing: border-box;
}
.bb-wrapper a {
  color: #06c;
  text-decoration: none;
}
.bb-wrapper .bb-filter {
  overflow: hidden;
  margin-bottom: 20px;
}
.bb-wrapper .bb-filter-options {
  float: left;
  width: 50%;
}
.bb-wrapper .bb-filter-options__label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}
.bb-wrapper .bb-filter-options__forsale {
  display: none;
  margin-top: 20px;
}
.bb-wrapper .bb-filter-options select:hover {
  cursor: pointer;
}

.bb-wrapper table.sortable, .bb-wrapper .divTable.sortable {
  border-collapse: collapse;
  margin-top: 20px;
}
.bb-wrapper table.sortable th, .bb-wrapper table.sortable td, .bb-wrapper .divTable.sortable .divTableHead, .bb-wrapper .divTable.sortable .divTableCell {
  border: 1px solid #dedede;
  padding: 10px;
  vertical-align: top;
}
.bb-wrapper table.sortable th, .bb-wrapper .divTable.sortable .divTableHead {
  text-align: left;
}
.bb-wrapper table.sortable th:hover, .bb-wrapper .divTable.sortable .divTableHead:hover {
  cursor: pointer;
}
.bb-wrapper table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after {
  content: " \25B4\25BE";
}

.bb-wrapper .divTable.sortable .divTableHead:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after {
  content: " \25B4\25BE";
}

.bb-wrapper table.sortable th:after, .bb-wrapper table.sortable th.sorttable_sorted:after, .bb-wrapper table.sortable th.sorttable_sorted_reverse:after {
  content: " ";
  width: 24px;
  height: 24px;
}

.bb-wrapper div.sortable .divTableHead:after, .bb-wrapper .divTable.sortable .divTableHead.sorttable_sorted:after, .bb-wrapper .divTable.sortable .divTableHead.sorttable_sorted_reverse:after {
  content: " ";
  width: 24px;
  height: 24px;
}

.bb-wrapper table.sortable th.sorttable_sorted:after, .bb-wrapper .divTable.sortable .divTableHead.sorttable_sorted:after {
  background: url(my-sorted-icon.png);
  background-size: contain;
}

.bb-wrapper table.sortable th.sorttable_sorted_reverse:after, .bb-wrapper .divTable.sortable .divTableHeader.sorttable_sorted_reverse:after {
  background: url(my-sorted-reversed-icon.png);
  background-size: cover;
}

.bb-wrapper table.sortable tbody tr:nth-child(2n) td, .bb-wrapper .divTable.sortable .divTableBody .divTableRow:nth-child(2n) .divTableCell {
  background: #fff;
}

.bb-wrapper table.sortable tbody tr:nth-child(2n + 1) td, .bb-wrapper .divTable.sortable .divTableBody .divTableRow:nth-child(2n + 1) .divTableCell {
  background: #f0f0f0;
}

.bb-wrapper table.sortable tbody tr td, .bb-wrapper .divTable.sortable .divTableBody .divTableRow .divTableCell {
  vertical-align: top;
  min-width: 50px;
}

.bb-wrapper table.sortable tbody tr td:first-child, .bb-wrapper .divTable.sortable .divTableBody .divTableRow .divTableCell:first-child {
  width: 10%;
}

.bb-wrapper table.sortable tbody tr td:nth-child(2), .bb-wrapper .divTable.sortable .divTableBody .divTableRow .divTableCell:nth-child(2) {
  width: 15%;
}

.bb-wrapper table.sortable tbody tr td span .category-title, .bb-wrapper .divTable.sortable .divTableBody .divTableRow .divTableCell span .category-title {
  font-style: italic;
}

.bb-wrapper table.sortable tbody tr td span .divider, .bb-wrapper .divTable.sortable .divTableBody .divTableRow .divTableCell span .divider {
  margin: 5px;
}

.bb-wrapper .bb-pagination {
  width: 50%;
  margin: 0 auto;
  margin-top: 20px;
}
.bb-wrapper .bb-pagination span {
  float: left;
}
.bb-wrapper .bb-pagination ul {
  /*float: left;*/
  margin: 0;
  margin-left: 15px;
  padding: 0;
}
.bb-wrapper .bb-pagination ul li {
  display: inline;
  margin-left: 10px;
  padding-left: 10px;
  border-left: 1px solid #000;
}
.bb-wrapper .bb-pagination ul li:first-child {
  margin-left: 0;
  padding-left: 0;
  border: none;
}
/*#### End Postings Board #### */

/*#### Flyers Carosuel ####*/
.row-eq-height {
  
}
.no-gutter > [class*='col-'] {
    padding-right:0;
    padding-left:0;
}
.carouselCont {
  background:#fff;
}

.infoCont {
  padding:10px 20px !important;
  position:relative;
}
.infoCont h1 {
  font-size:1.5em;
}
.infoCont p {
  font-size:0.75em;
  line-height:1.2;
}
.video-container {
    position:relative;
    padding-top: 130% !important; /*56.25%*/
    /*padding-top:30px;*/
    height: 100%;
    /*overflow:hidden;*/
}

.video-container iframe, .video-container object, .video-container embed {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
}

.mb80 {
  margin: 0 0 5em 0;
}
.ctrls {
  border:solid 0px #dadada;
  position:relative;
  bottom:-10px;
  background:#ececec;
  display:block;
}
.ctrls .fa {
  color:#000;
  font-size:2em;
}
.ctrls .carousel-control.left {
  left:0px;
}
.carousel-control { 
}
/*#### End Flyers Carousel ####*/
</style>
























