<?php
if(isset($_POST['submit_btn'])) {
    echo("submit field is set <br>");

    session_start();
    $_SESSION['name_g'] = htmlentities($_POST['name']); // creates global server-side var 
    $_SESSION['email_g'] = htmlentities($_POST['email']);
    $_SESSION['phone_g'] = htmlentities($_POST['phone']);

    header('Location: pg2.php'); //directs http header to new loc
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
<form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>">
<input type="text" name="name" placeholder="Enter Name">
<br>
<input type="email" name="email" placeholder="Enter Email">
<br>
<input type="tel" name="phone" placeholder="Enter Phone">
<br>
<textarea name="msg" placeholder="Enter your msg">
</textarea>
<br>
<input type="submit" name="submit_btn" value="Submit">
</form>

<br>
<br>
<hr>
<br>
<br>

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
                <th>Locations</th>
                <th>Posting Type</th>
                <th>Date</th>
                <th>Price</th>
                <th></th>
            </hr>
        </thead>
        <tbody>
            <tr>
                <td>Kansas City, MO</td>
                <td>For Sale</td>
                <td>02/25/2016</td>
                <td>$300</td>
                <td>
                    <div class="item">
                        <span class="category">Real Estate</span>
                        <a class="title" href="">Item title viverra tortor nec condimentum nunc sem eget arcu</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Institute, WV</td>
                <td>Announcement</td>
                <td>02/23/2016</td>
                <td></td>
                <td>
                    <div class="item">
                        <span class="category"></span>
                        <a class="title" href="">Item title viverra tortor nec condimentum nunc sem eget arcu</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Kansas City, MO</td>
                <td>For Sale</td>
                <td>02/16/2016</td>
                <td>$100</td>
                <td>
                    <div class="item">
                        <span class="category">Home Goods</span>
                        <a class="title" href="">Ex enim finibus turpis, sed elementum purus mi vei nisl</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Kansas City, MO</td>
                <td>For Sale</td>
                <td>02/25/2016</td>
                <td>$300</td>
                <td>Real Estate | <a href="">Item title viverra tortor nec condimentum nunc sem eget arcu</a></td>
            </tr>
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

