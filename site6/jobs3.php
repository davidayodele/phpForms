<!DOCTYPE html>

<?php
define('scsn', TRUE);
include 'includes/db.php';
include_once("includes/functions.php"); 

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

$query1 = "SELECT * FROM postings4;";
$query1_result = mysqli_query($conn, $query1);

if ($query1_result) {
    echo "QUERY #1 SUCCESSFUL<br>";
    $query1_array = mysqli_fetch_all($query1_result, MYSQLI_ASSOC);
    //echo "post_id: ".$i."<br>";
    //print_r($query1_array);
    $i = mysqli_num_rows($query1_result);
    

} else {
    echo "QUERY #1 ERROR: ".mysqli_error($conn)."<br>";
}

if ($i > 0) {
    echo "post_id: ".$i."<br><br>";
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
    <link rel="stylesheet" href="style.css" media="all"><!--?<?php echo date('l jS \of F Y h:i:s A'); ?>-->
	<link rel="stylesheet" href="css/bootstrap.min_3_0_3.css">
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
        </ul>
        </nav>
    </div>
    <div class="wrapperMain clearfix">
        <div class="fl_fullwidth">
        <div class="banner_faq">
        <h1 class="banner_text">
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
        <h2>Flyers/Promos</h2>
		<br>
		<!-- Begin Flyers -->
		<div class="carousel_container"> <!-- Adapted from: https://codepen.io/vraajesh/pen/EZQGJO -->

		<div id="carousel-example-generic" class="carousel carousel_slide" data-ride="carousel">
		
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- Hooked Up. Homes are made by people, not places. We produced an 8 part travel series produced and hosted by influencer Kylie Flavell as she discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container">
			<iframe src="https://docs.google.com/viewer?url=https://starcanyonschoolofnursing.com/img/caregiver_flyers_urgent_homecare_1-2020.pdf&amp;embedded=true" width="100%" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
			<div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- Hooked Up. Homes are made by people, not places. We produced an 8 part travel series produced and hosted by influencer Kylie Flavell as she discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container">
			<iframe src="img/caregiver_flyers_urgent_homecare_1-2020.pdf" width="100%" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
		
			<div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- Hooked Up. Homes are made by people, not places. We produced an 8 part travel series produced and hosted by influencer Kylie Flavell as she discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container">
			<iframe src="https://player.vimeo.com/video/49309096?color=00ff66" width="100%" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
		
			<div class="item">
			<div class='carouselCont row no-gutter row-eq-height'>
			<div class='col-md-4 infoCont'>
			<!-- Hooked Up. Homes are made by people, not places. We produced an 8 part travel series produced and hosted by influencer Kylie Flavell as she discovers destinations through the folks that live there. It achieved over 3 min average view time per episode. -->
			</div>
			<div class='col-md-12'>
			<div class="video-container">
			<iframe src="https://player.vimeo.com/video/35944117" width="100%" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			</div>
			</div>
			</div>
		</div>
		
		<!-- Controls -->
		<div class='ctrls'>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<i class="fas fa-angle-left" aria-hidden="true" title="Previous"></i>
			</a>
			<a class="right carousel-control swiper-button-next" href="#carousel-example-generic" role="button" data-slide="next">
			<i class="fas fa-angle-right" aria-hidden="true" title="Next"></i>
			</a>
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
		<?php echo($_SESSION['i_g']); ?>
		<!-- 
		--------------
		Postings Board
		--------------	
		-->
		<!-- Postings board (Adapted from Cindy Lee: https://codepen.io/cindylee/pen/eZgJgw) -->
		<div class="bb-wrapper">
		<div class="bb-title"><h2>Job Openings</h2></div>
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
			<table class="sortable table table-bordered">
				<thead>
					<tr>
                        <th class="no-sort">Phone No.</th>
                        <th>Job Location</th>
						<th>Job Type</th>
						<th>Job Pay</th>
						<th>Posting Date</th>
						<th>Job Description</th>
                    </tr>					
				</thead>
				<tbody id="log"></tbody>
			</table>
			<div class="bb-pagination">
				<span>Page:</span>
				<ul>
					<li><a href="">1 - 10</a></li>
					<li><a href="">11 - 20</a></li>
					<li><a href="">More &raquo&raquo</a></li>
					<li><a href="">View All</a></li>
				</ul>
			</div>
		</div>	
	

		<!-- End Postings Board -->
		
        </article>
        </main>
        <aside class="fl_oneThird">
        <section class="aside_classes">
        <h3 style="font-family: Arial, sans-serif;">Our Location
        </h3>
        <div id="map">
        </div>
        <br>
        <p>
        &bull; We're conveniently located along city bus routes on Central Avenue &amp; Dunlap Road.
        <br>
        <br>
        </p>
        </section>
        <section id="tax_form">
		<h4>
		Résumé Building
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
		<h3>
		Hiring CNAs/LNAs/Caregivers?
		</h3>
		<h4>
		Post a job opening here!
		<br>
		<br>
		</h4>

	    <center>
	    <div class="content">
	    	<div id="form">
				<form method="POST" class="contact-form" id="contactForm"> <!-- event.preventDefault(); onsumbit="return validateFormOnSubmit(this);"    onsubmit="submitted=true;" -->
    				
                    <!-- <label class="preferred_class" for="entry_898269100">Best time:</label>
                    <select name="entry.898269100" id="entry_898269100" class="preferred_class_select">
                    <option value=""></option>
                    <option value="Day">Day</option> 
                    <option value="Eve">Eve</option>
                    </select>
                    -->
	    			<!--<input type="text" name="captcha" class="captcha" maxlength="4" size="4" placeholder="Enter captcha code" tabindex=3 required/> -->
	    			<!--<span>Message</span>-->
    				<input maxlength="1000" type="text" name="catcher" id="catcher_id" class="catcher_class" value="" />
    				<!-- <span>Name</span> -->
	    			<input maxlength="1000" type="text" name="entry.321910209" id="name" class="name" placeholder="Employer/Agent name:" tabindex=1 required/>
	    			<!--<span>Email</span>-->
	    			<input maxlength="1000" type="text" name="entry.1847339881" id="email" class="email" placeholder="Employer email:" tabindex=2 required/>
	    			<!--<span>Phone</span>-->
					<input maxlength="1000" type="text" name="entry.1710439998" id="phone" class="phone fas fa-phone" placeholder="Employer phone: use (XXX) XXX-XXXX format" tabindex=2 required/>
					<input maxlength="1000" type="text" id="msg" name="entry.1111273474" placeholder="Special notes (optional)" class="message2" tabindex=2 />
					<!--
					<textarea class="message" maxlength="1000" rows="1" id="msg" name="entry.1111273474" placeholder="A message about for us (optional)" tabindex=0 required>
					</textarea>
					-->
					<br>
					<input id="input_loc" maxlength="1000" class="city" type="text" name="entry.1734281767" placeholder="Job location" tabindex=2 required/>
					
					<input id="input_typ" maxlength="1000" class="course_date" type="text" name="entry.609998995" placeholder="Job type (e.g. CNA/LNA/Caregiver)" tabindex=2 required/>
					
					<input id="input_pay" maxlength="1000" class="payment" type="text" name="entry.842548913" placeholder="Job pay" tabindex=2 required/>
					
					<textarea tabindex=""" class="message" maxlength="10000" rows="5" id="input_desc" name="entry.1128242642" placeholder="Job description" tabindex=2 required></textarea> <!-- TEXTAREA TAGS MUST BE ON ONE LINE!! -->
                    
	    			<button type="submit" name="submit_btn" id="submit_btn" class="submit_btn" tabindex=5>Submit</button>
	    			<span style="font: bold normal 12px/80% Arial, Helvetica, sans-serif; line-height: 10px;">To submit, please click the captcha below <br>(may take a few seconds)</span>
	    			<br>
	    			<div class="g-recaptcha jobs_captcha" id="captchabox" data-sitekey="6LfWbN8UAAAAALUon3XBSFs-fMmm0GNVXGlNDq6s" data-callback="imNotARobot">
	    			</div>
	    			<span class="" id="status_msg" name="msg"></span>
					<!-- <span id="captcha">Captcha Code:</span> -->					
	    		</form>
        </div>
	</div>
    </center>
    </section>
    <!-- End contact form -->
		
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
    <!-- End google maps script --><script src="js/datetime.js"></script><!-- datetime load -->
    
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

	<!-- Postings sort & flyers Script -->
	<script type="text/javascript">
	$('.carousel').carousel({
		interval: 3000
	});

    $('.bb-filter-options__posting').on('change', function() {
		$('.bb-filter-options').children('.bb-filter-options__forsale').hide();
		
		$('.bb-filter-options__' + $('option:selected', this).data("name")).css("display", "block");
	});
	</script>
	<!-- End Postings board & flyers Script -->
    
    <!-- Postings tracker script -->
    <script src="js/tracker.js"></script>
    

</body>
</html>

<style type="text/css">
@import "//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css";

#input_pay::-webkit-input-placeholder {
    font-family: FontAwesome;
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
th.no-sort:after {
    display: none !important;
    content: "" !important;
}

.bb-wrapper {
  width: 100%;
  margin: 0 auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
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
.bb-wrapper table.sortable {
  border-collapse: collapse;
  margin-top: 20px;
}
.bb-wrapper table.sortable th, .bb-wrapper table.sortable td {
  border: 1px solid #dedede;
  padding: 10px;
  vertical-align: top;
}
.bb-wrapper table.sortable th {
  text-align: left;
}
.bb-wrapper table.sortable th:hover {
  cursor: pointer;
}
.bb-wrapper table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after {
  content: " \25B4\25BE";
}
.bb-wrapper table.sortable th:after, .bb-wrapper table.sortable th.sorttable_sorted:after, .bb-wrapper table.sortable th.sorttable_sorted_reverse:after {
  content: " ";
  width: 24px;
  height: 24px;
}
.bb-wrapper table.sortable th.sorttable_sorted:after {
  background: url(my-sorted-icon.png);
  background-size: contain;
}
.bb-wrapper table.sortable th.sorttable_sorted_reverse:after {
  background: url(my-sorted-reversed-icon.png);
  background-size: cover;
}
.bb-wrapper table.sortable tbody tr:nth-child(2n) td {
  background: #fff;
}
.bb-wrapper table.sortable tbody tr:nth-child(2n + 1) td {
  background: #f0f0f0;
}
.bb-wrapper table.sortable tbody tr td {
  vertical-align: top;
  min-width: 50px;
}
.bb-wrapper table.sortable tbody tr td:first-child {
  width: 10%;
}
.bb-wrapper table.sortable tbody tr td:nth-child(2) {
  width: 15%;
}
.bb-wrapper table.sortable tbody tr td span .category-title {
  font-style: italic;
}
.bb-wrapper table.sortable tbody tr td span .divider {
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
  float: left;
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

.divider {
    margin-top: 25px;
    border: dashed 0.5px;
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
	padding-bottom:56.25%;
	padding-top:30px;
	height: 100%;
	overflow:hidden;
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























