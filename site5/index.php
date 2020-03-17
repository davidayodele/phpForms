<?php

define('scsn', TRUE);
include 'db.php';

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

$query1 = "SELECT * FROM postings3;";
$query1_result = mysqli_query($conn, $query1);

if ($query1_result) {
    echo "QUERY #1 SUCCESSFUL<br>";
    $query1_array = mysqli_fetch_all($query1_result, MYSQLI_ASSOC);
    //echo "post_id: ".$i."<br>";
    print_r($query1_array);
    $i = mysqli_num_rows($query1_result);
    echo "<br>";
    echo "rows: ".$i."<br>";
    echo "rows: ".($i - $i)."<br>";
    echo "rows: ".($i - $i + 1)."<br>";
    echo "rows: ".($i - $i + 2)."<br>";
    echo "rows: ".($i - $i + 3)."<br>";
    echo "query1_array[0]: ".$query1_array[3]['pos_pay']."<br>";
    
    
    $pos_time[$i - $i] = $query1_array[$i - 1]['pos_time'];
    $pos_loc[$i - $i] = $query1_array[$i - 1]['pos_loc'];
    $pos_type[$i - $i] = $query1_array[$i - 1]['pos_type'];
    $pos_pay[$i - $i] = $query1_array[$i - 1]['pos_pay'];
    $pos_desc[$i - $i] = $query1_array[$i - 1]['pos_desc'];

    $pos_time[$i - $i + 1] = $query1_array[$i - 2]['pos_time'];
    $pos_loc[$i - $i + 1] = $query1_array[$i - 2]['pos_loc'];
    $pos_type[$i - $i + 1] = $query1_array[$i - 2]['pos_type'];
    $pos_pay[$i - $i + 1] = $query1_array[$i - 2]['pos_pay'];
    $pos_desc[$i - $i + 1] = $query1_array[$i - 2]['pos_desc'];

    $pos_time[$i - $i + 2] = $query1_array[$i - 3]['pos_time'];
    $pos_loc[$i - $i + 2] = $query1_array[$i - 3]['pos_loc'];
    $pos_type[$i - $i + 2] = $query1_array[$i - 3]['pos_type'];
    $pos_pay[$i - $i + 2] = $query1_array[$i - 3]['pos_pay'];
    $pos_desc[$i - $i + 2] = $query1_array[$i - 3]['pos_desc'];

    $pos_time[$i - $i + 3] = $query1_array[$i - 4]['pos_time'];
    $pos_loc[$i - $i + 3] = $query1_array[$i - 4]['pos_loc'];
    $pos_type[$i - $i + 3] = $query1_array[$i - 4]['pos_type'];
    $pos_pay[$i - $i + 3] = $query1_array[$i - 4]['pos_pay'];
    $pos_desc[$i - $i + 3] = $query1_array[$i - 4]['pos_desc'];
    /*
    $pos_time[$i - $i + 4] = $query1_array[$i - 5]['pos_time'];
    $pos_loc[$i - $i + 4] = $query1_array[$i - 5]['pos_loc'];
    $pos_type[$i - $i + 4] = $query1_array[$i - 5]['pos_type'];
    $pos_pay[$i - $i + 4] = $query1_array[$i - 5]['pos_pay'];
    $pos_desc[$i - $i + 4] = $query1_array[$i - 5]['pos_desc'];

    $pos_time[$i - $i + 5] = $query1_array[$i - 5]['pos_time'];
    $pos_loc[$i - $i + 5] = $query1_array[$i - 5]['pos_loc'];
    $pos_type[$i - $i + 5] = $query1_array[$i - 5]['pos_type'];
    $pos_pay[$i - $i + 5] = $query1_array[$i - 5]['pos_pay'];
    $pos_desc[$i - $i + 5] = $query1_array[$i - 5]['pos_desc'];

    $pos_time[$i - $i + 6] = $query1_array[$i - 6]['pos_time'];
    $pos_loc[$i - $i + 6] = $query1_array[$i - 6]['pos_loc'];
    $pos_type[$i - $i + 6] = $query1_array[$i - 6]['pos_type'];
    $pos_pay[$i - $i + 6] = $query1_array[$i - 6]['pos_pay'];
    $pos_desc[$i - $i + 6] = $query1_array[$i - 6]['pos_desc'];

    $pos_time[$i - $i + 7] = $query1_array[$i - 7]['pos_time'];
    $pos_loc[$i - $i + 7] = $query1_array[$i - 7]['pos_loc'];
    $pos_type[$i - $i + 7] = $query1_array[$i - 7]['pos_type'];
    $pos_pay[$i - $i + 7] = $query1_array[$i - 7]['pos_pay'];
    $pos_desc[$i - $i + 7] = $query1_array[$i - 7]['pos_desc'];

    $pos_time[$i - $i + 8] = $query1_array[$i - 8]['pos_time'];
    $pos_loc[$i - $i + 8] = $query1_array[$i - 8]['pos_loc'];
    $pos_type[$i - $i + 8] = $query1_array[$i - 8]['pos_type'];
    $pos_pay[$i - $i + 8] = $query1_array[$i - 8]['pos_pay'];
    $pos_desc[$i - $i + 8] = $query1_array[$i - 8]['pos_desc'];

    $pos_time[$i - $i + 9] = $query1_array[$i - 9]['pos_time'];
    $pos_loc[$i - $i + 9] = $query1_array[$i - 9]['pos_loc'];
    $pos_type[$i - $i + 9] = $query1_array[$i - 9]['pos_type'];
    $pos_pay[$i - $i + 9] = $query1_array[$i - 9]['pos_pay'];
    $pos_desc[$i - $i + 9] = $query1_array[$i - 9]['pos_desc']; */

} else {
    echo "QUERY #1 ERROR: ".mysqli_error($conn)."<br>";
}

if ($i > 0) {
    echo "post_id: ".$i."<br><br>";
} else {
    $i = 0;
}

$_SESSION['i_g'] = $i;

if(isset($_POST['submit_btn'])) {
  
    $i++;

    $_SESSION['name_g'] = htmlentities($_POST['entry.1201581312']); // creates global server-side var 
    $_SESSION['email_g'] = htmlentities($_POST['email']);
    $_SESSION['phone_g'] = htmlentities($_POST['phone']);
    $_SESSION['msg_g'] = htmlentities($_POST['msg']);

    $_SESSION['pos_loc_g'] = htmlentities($_POST['pos_loc']); // creates global server-side var 
    $_SESSION['pos_type_g'] = htmlentities($_POST['pos_type']);
    $_SESSION['pos_pay_g'] = htmlentities($_POST['pos_pay']);
    $_SESSION['pos_desc_g'] = htmlentities($_POST['pos_desc']);
    $_SESSION['pos_time_g'] = time();

    $name = $_SESSION['name_g'];
    $email = $_SESSION['email_g'];
    $phone = $_SESSION['phone_g'];
    $msg = $_SESSION['msg_g'];

    $pos_loc[$i] = $_SESSION['pos_loc_g'];
    $pos_type[$i] = $_SESSION['pos_type_g'];
    $pos_pay[$i] = $_SESSION['pos_pay_g'];
    $pos_desc[$i] = $_SESSION['pos_desc_g'];
    $pos_time[$i] = $_SESSION['pos_time_g'];

    //$_SESSION['i_g'] = $_SESSION['i_g'] + 1;
    echo "name: ".$name.", email: ".$email.", phone: ".$phone."<br>";
    echo "pos_loc[$i]: ".$pos_loc[$i].", pos_type[$i]: ".$pos_type[$i].", pos_time[$i]: ".$pos_time[$i].", pos_pay[$i]: ".$pos_pay[$i].", pos_desc[$i]: ".$pos_desc[$i]."<br><br>";

    //query values must be in single quotes, all fields must be set!
    $query2 = "INSERT INTO postings3 (pos_id, user_name, user_email, user_phone, pos_loc, pos_type, pos_time, pos_pay, pos_desc) VALUES (0, '$name', '$email', '$phone', '$pos_loc[$i]', '$pos_type[$i]', '$pos_time[$i]', '$pos_pay[$i]', '$pos_desc[$i]');";
    
    $query2_result = mysqli_query($conn, $query2);

    if($query2_result){
        echo "QUERY #2 SUCCESSFUL<br>";
        /* $query2_array = mysqli_fetch_array($query2_result, MYSQLI_ASSOC);
        echo "pos_id: ".$i."<br>";
        print_r($query2_array);
        echo "<br>"; */
    } else {
        echo "QUERY #2 ERROR: ".mysqli_error($conn)."<br>";
    }

    /*
    if ($_SESSION['i_g'] < 11) {
        $pos_loc[$_SESSION['i_g']] = $_SESSION['pos_loc_g'];
        $pos_type[$_SESSION['i_g']] = $_SESSION['pos_type_g'];
        $pos_pay[$_SESSION['i_g']] = $_SESSION['pos_pay_g'];
        $pos_desc[$_SESSION['i_g']] = $_SESSION['pos_desc_g'];
        $pos_time[$_SESSION['i_g']] = $_SESSION['pos_time_g'];

        $_SESSION['i_g'] = $_SESSION['i_g'] + 1;

        $query2 = "INSERT INTO postings (user_name, user_email, user_phone, post_loc, post_type, post_time, post_pay, post_desc) VALUES ($name, $email, $phone, $post_loc[$i], $post_type[$i], $post_time[$i], $post_pay[$i], $post_desc[$i]);";
        
        mysqli_query($conn, $query2);

    } else {
        $_SESSION['i_g'] = 0;
    }
    
    /* header('Location: pg2.php'); //directs http header to new loc */

    //mysqli_free_result($query1_result);
    //mysqli_free_result($query2_result);

    mysqli_close($conn); //memory freed on connection close.
} 

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Links -->
    <script type="text/javascript" src="js/sorttable.js"></script> <!-- Thanks Stuart! -->
    <!-- End Links -->

    <title>Postings Main</title>
</head>
<body>


<!-- Jobs form -->
<form class="contact-form" id="contactForm" action="" method="POST" onsubmit="return validateFormOnSubmit(this); event.preventDefault();">
<!--
<div class="contact-form-success alert alert-success d-none">
  <strong>Success!</strong> Your message has been sent to us.
</div>
<div class="contact-form-error alert alert-danger d-none">
  <strong>Error!</strong> There was an error sending your message.
  <span class="mail-error-message d-block"></span>
</div>
-->
<div class="form-row">
  <div class="form-group col-md-6">
    <input type="text" value="" data-msg-required="Please enter your first name." maxlength="200" class="form-control" name="entry.773136042" id="name1" placeholder="First Name" required="true">
  </div>
  <div class="form-group col-md-6">
    <input type="text" value="" data-msg-required="Please enter your last name." maxlength="200" class="form-control" name="entry.70725064" id="name2" placeholder="Last Name" required="true">
  </div>
  <div class="form-group col-md-6">
    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="200" class="form-control" name="entry.1603947973" id="email" placeholder="E-mail" required="true">
  </div><div class="form-group col-md-6">
    <input type="tel" value="" data-msg-required="Please enter your phone number." maxlength="15" class="form-control" name="entry.36247717" id="phone" placeholder="Phone" required="true">
  </div>												
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <input type="text" value="" data-msg-required="Please enter your street address (e.g. 8900 N Central)" maxlength="500" class="form-control" name="entry.947737773" id="addr" placeholder="Street Address (e.g. 848 E Libra Dr)" required="addr">
  </div>
  <div class="form-group col-md-6">
    <input type="text" value="" data-msg-required="Please enter your city." maxlength="100" class="form-control" name="entry.403997107" id="city" placeholder="City" required="true">
  </div>
  <div class="form-group col-md-6">
    <input type="text" value="" data-msg-required="Please enter your zip code." maxlength="10" class="form-control" name="entry.817721318" id="zip" placeholder="Zip" required="true">
  </div><div class="form-group col-md-6">
    <input type="text" value="" data-msg-required="Please enter your age." maxlength="3" class="form-control" name="entry.109205054" id="age" placeholder="Age" required="true">
  </div>												
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label class="code_yrs" for="entry_1201581312">Years of Programming Experience:</label>
    <select name="entry.1201581312" id="code_yrs" class="" placeholder="Years of Programming Experience" required="true">
    <option value=""></option>
    <option value="0-1">0-1</option> 
    <option value="1-5">1-5</option> 
    <option value="5+">5+</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label class="diploma" for="entry_1724034531">High School Diploma or Equivalent?</label>
    <select name="entry.1724034531" id="diploma" class="" placeholder="High School Diploma or Equivalent?" required="true">	
    <option value=""></option>
    <option value="Yes">Yes</option> 
    <option value="No">No</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label class="diploma" for="entry_647945894">Years of College or Post-Secondary Schooling:</label>
    <select name="entry.647945894" id="college_yrs" class="" placeholder="Years of College (or Post-Secondary Schooling)" required="true">
    <option value=""></option>
    <option value="0-1">0-1</option> 
    <option value="1-4">1-4</option> 
    <option value="4+">4+</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label class="diploma" for="entry_2036387017">SAT Math (800 scale) Scores (if taken):</label>
    <select name="entry.2036387017" id="sat_rng" class="" placeholder="SAT Math (800 scale) Scores (if taken)" required="false">
    <option value=""></option>
    <option value="<400"><400</option> 
    <option value="400-600">400-600</option> 
    <option value=">600">>600</option>
    </select>
  </div>												
</div>

<div class="form-row">
  <div class="form-group col">
    <textarea maxlength="10000" data-msg-required="Please enter a link or text only" rows="5" class="form-control" name="entry.927317673" id="resume" placeholder="Résumé/CV/LinkedIn (Text or link only)" required></textarea>
  </div>
</div>
<center>
<div class="form-row mt-2">
  <div class="form-group col">
    <div class="g-recaptcha" data-sitekey="6LeXdbQUAAAAANwLun1KOX4gHXmKBFXtjf3YBNXE" data-callback="notRobot"></div>
  </div>
</div>												
<div class="form-row mt-2">
  <div class="form-group col">
    <input type="submit" name="submit" value="SEND MESSAGE" id="ss-submit" class="btn-rounded btn-4 font-weight-semibold text-0">
  </div>
</div>
</center>
<strong>
<span id="status_msg" name="status_msg">
</span>
</strong>
</form>
<!-- End Jobs form -->


<form method="POST" class="contact-form" id="contactForm" action="" onsubmit="return validateFormOnSubmit(this); event.preventDefault();"> <!-- action="<?php echo($_SERVER['PHP_SELF']); /*Post to this page*/ ?>" --> 
<input type="text" name="entry.31466821" placeholder="Enter Name">
<br>
<input type="text" name="entry.1201581312" placeholder="Enter Email">
<br>
<input type="text" name="entry.111373112" placeholder="Enter Phone">
<br>
<textarea maxlength="1000" name="entry.776343649" placeholder="Enter your msg">
</textarea>
<br>
<br>
<input type="text" name="entry.1526193799" placeholder="Enter position location">
<br>
<input type="text" name="entry.523789742" placeholder="Enter position type">
<br>
<input type="text" name="entry.1553113902" placeholder="Enter position pay">
<br>
<textarea maxlength="10000" rows="5" name="entry.1922788147" placeholder="Enter position description">
</textarea>
<br>
<br>
<center>
<div class="g-recaptcha" data-sitekey="6LeXdbQUAAAAANwLun1KOX4gHXmKBFXtjf3YBNXE" data-callback="notRobot"></div>
<input type="submit" name="submit_btn" value="SEND MESSAGE" id="ss-submit" class="btn-rounded btn-4 font-weight-semibold text-0">
</div>
</center>
<strong>
<span id="status_msg" name="status_msg">
</span>
</strong>
</form>

<br>
<br>
<hr>
<br>
<br>
<?php echo($_SESSION['i_g']); ?>
<!-- 
==============
Postings Board
==============	
-->
<!-- Postings board (Adapted from Cindy Lee: https://codepen.io/cindylee/pen/eZgJgw) -->
<div class="bb-wrapper">
<div class="bb-title"><h2>Postings</h2></div>
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
    <table class="sortable">
        <thead>
            <tr>
                <th>Location</th>
                <th>Position Type</th>
                <th>Post Date</th>
                <th>Pay</th>
                <th>Description</th>
            </hr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo($pos_loc[0]); ?></td>
                <td><?php echo($pos_type[0]); ?></td>
                <td><?php echo($pos_time[0]); ?></td>
                <td><?php echo($pos_pay[0]); ?></td>
                <td><?php echo($pos_desc[0]); ?></td>
            </tr>
            <tr>
                <td><?php echo($pos_loc[1]); ?></td>
                <td><?php echo($pos_type[1]); ?></td>
                <td><?php echo($pos_time[1]); ?></td>
                <td><?php echo($pos_pay[1]); ?></td>
                <td><?php echo($pos_desc[1]); ?></td>
            </tr>
            <tr>
                <td><?php echo($pos_loc[2]); ?></td>
                <td><?php echo($pos_type[2]); ?></td>
                <td><?php echo($pos_time[2]); ?></td>
                <td><?php echo($pos_pay[2]); ?></td>
                <td><?php echo($pos_desc[2]); ?></td>
            </tr>
            <tr>
                <td><?php echo($pos_loc[3]); ?></td>
                <td><?php echo($pos_type[3]); ?></td>
                <td><?php echo($pos_time[3]); ?></td>
                <td><?php echo($pos_pay[3]); ?></td>
                <td><?php echo($pos_desc[3]); ?></td>
            </tr> <!--
            <tr>
                <td>Kansas City, MO</td>
                <td>For Sale</td>
                <td>02/25/2016</td>
                <td>$300</td>
                <td>Real Estate | <a href="">Item title viverra tortor nec condimentum nunc sem eget arcu</a></td>
            </tr> -->
        </tbody>
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

</body>

<!-- Jobs form script (updated 1/19/19) adapted from: Mario Vidov https://codepen.io/mel/pen/kHCvr?page=1&q=contact+form-->
<script type="text/javascript">
var submitted = false;
var captchaPass = false;
var name = '';
var str = '';
var n = -1;

function _(id){ return document.getElementById(id); }

var notRobot = function() {
  var formdata = new FormData();
  formdata.append( "name1", _("name1").value );
  formdata.append( "name2", _("name2").value );
  formdata.append( "email", _("email").value );
  formdata.append( "phone", _("phone").value );
  formdata.append( "address", _("addr").value );
  
  for (var [key, value] of formdata.entries()) {
    console.log(key, value);
  }
  
  name = $("#name1").val();
  $.ajax({
    url: 'php/contact-form-recaptcha.php',
    type: "POST",
    data: "name=" + name + "&g-recaptcha-response=" + grecaptcha.getResponse(),
    success: function(data) {
      //str = data;
      //console.log(data);
      //n = str.indexOf("[success] => 1");
      str = grecaptcha.getResponse();
      console.log(grecaptcha.getResponse());
      //document.getElementById("status_msg").innerHTML = n;
      n = str.indexOf("03A");
      if (n >= 0 && formdata.has('name1') && formdata.has('name2') && formdata.has('email') && formdata.has('phone') && formdata.has('address')) {
        $('#contactForm').attr('action', 'https://docs.google.com/forms/d/e/1FAIpQLSet-bBBZI1AKQCF3tzlMY5fBbwp6TooZxkE2drW023vpCZ9jQ/formResponse');
          captchaPass = true;
        } else {
          document.getElementById("status_msg").innerHTML = "Error: Form or reCaptcha check NOT complete!";
        }
    }
    })
};

function validateFormOnSubmit(contactForm) { // takes contactForm var as input  onsubmit="return validateFormOnSubmit(this)"
  if (captchaPass) {
    _("status_msg").innerHTML = "Got it! Thank you, " + name + ", for your message! Someone will get back to you shortly!"
    submitted = true;
    _("ss-submit").disabled = true;
    return true;
    } else {
      _("status_msg").innerHTML = "Error: reCaptcha check failed for " + name;
      document.getElementById("status_msg").innerHTML = "Error: Form or reCaptcha check NOT complete!";
    }
}
if (submitted) {
  _("contactForm").reset();	
}

</script>
<!-- End Jobs form script -->

<!-- Postings board script -->
<script type="text/javascript">
$('.bb-filter-options__posting').on('change', function() {
    $('.bb-filter-options').children('.bb-filter-options__forsale').hide();
    
    $('.bb-filter-options__' + $('option:selected', this).data("name")).css("display", "block");
});
</script>
<!-- End Postings board script -->

<style type="text/css">
/*##### Postings Board styles #####*/
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
  min-width: 70px;
}
.bb-wrapper table.sortable tbody tr td:first-child {
  width: 25%;
}
.bb-wrapper table.sortable tbody tr td:nth-child(2) {
  width: 20%;
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
/*#### End Postings Board styles #### */
</style>
</html>

