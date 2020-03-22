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
    
    /*
    $pos_time[$i - $i] = $query1_array[$i - 1]['pos_time'];
    $pos_loc[$i - $i] = $query1_array[$i - 1]['pos_loc'];
    $pos_type[$i - $i] = $query1_array[$i - 1]['pos_type'];
    $pos_pay[$i - $i] = $query1_array[$i - 1]['pos_pay'];
    $pos_desc[$i - $i] = $query1_array[$i - 1]['pos_desc'];
    */
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

    $_SESSION['name_g'] = htmlentities($_POST['entry_1734281767']); // creates global server-side var. PHP converts "." to "_" in var names
    $_SESSION['email_g'] = htmlentities($_POST['entry_1201581312']);
    $_SESSION['phone_g'] = htmlentities($_POST['entry_111373112']);
    $_SESSION['msg_g'] = htmlentities($_POST['entry_776343649']);

    $_SESSION['pos_loc_g'] = htmlentities($_POST['entry_1734281767']); // creates global server-side var. PHP converts "." to "_" in var names
    $_SESSION['pos_type_g'] = htmlentities($_POST["entry_609998995"]);
    $_SESSION['pos_pay_g'] = htmlentities($_POST['entry_1553113902']);
    $_SESSION['pos_desc_g'] = htmlentities($_POST['entry_1922788147']);
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
    print_r($_POST);
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
    <script src="js/jquery.min.js"></script><!-- jQuery load -->
    <!-- End Links -->

    <title>Postings Main</title>
</head>
<body>

<!-- Jobs form -->

<!-- End AJAX display script -->

<form method="POST" class="contact-form" id="contactForm" action="<?php echo($_SERVER['PHP_SELF']); /*Post to this page*/ ?>" event.preventDefault();> 
<input type="text" name="entry.1734281767" placeholder="Enter Name">
<br>
<input type="text" name="entry.1201581312" placeholder="Enter Email">
<br>
<input type="text" name="entry.111373112" placeholder="Enter Phone">
<br>
<textarea maxlength="1000" name="entry.776343649" placeholder="Enter your msg">
</textarea>
<br>
<br>
<input type="text" name="entry.1734281767" placeholder="Enter position location">
<br>
<input type="text" name="entry.609998995" placeholder="Enter position type">
<br>
<input type="text" name="entry.1553113902" placeholder="Enter position pay">
<br>
<textarea maxlength="10000" rows="5" name="entry.1922788147" placeholder="Enter position description">
</textarea>
<br>
<input type="submit" name="submit_btn" id="submit_btn" class="submit_btn" tabindex=5></input>
</form>

<!-- End Jobs form -->

<!-- AJAX display script -->
<script>
$(document).ready(function() {
  function _(id){ return document.getElementById(id); }
  console.log("document ready");
  _("submit_btn").addEventListener("click", function() {
    console.log("submit clicked");
    var name = $("name").val();
    var email = $("email").val();
    $.post("<?php echo($_SERVER['PHP_SELF']); ?>", {name: name, email: email}, function(data, status) {
      $("loc0").html("<?php echo($pos_loc[0]); ?>");
      $("type0").html("<?php echo($pos_type[0]); ?>");
      _("time0").innerHTML = "<?php echo($pos_time[0]); ?>";
      _("pay0").innerHTML = "<?php echo($pos_pay[0]); ?>";
      _("desc0").innerHTML = "<?php echo($pos_desc[0]); ?>";
    });
  });
  
  <?php 
  header("Location:index.php");
  ?>
});
</script>

<br>
<br>
<hr>
<br>
<br>
<?php echo($_SESSION['i_g']); 
?>
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
						<td id="loc0"><?php echo($pos_loc[0]); ?></td>
						<td id="type0"><?php echo($pos_type[0]); ?></td>
						<td id="time0"><?php echo($pos_time[0]); ?></td>
						<td id="pay0"><?php echo($pos_pay[0]); ?></td>
						<td id="desc0"><?php echo($pos_desc[0]); ?></td>
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

