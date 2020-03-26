<?php
include_once('functions.php');

//echo($_POST['form_input']);

//echo("<script>console.log('log.php entered successfully, getting JSON data');</script>");
$db_data = file_get_contents('../js/data.json');
$db_array = json_decode($db_data, 1); // 1 for ASSOC = TRUE
//echo("<script>console.log('JSON data set!');</script>");
//echo("<script>$('#contactForm').attr('action', 'https://docs.google.com/forms/d/e/1FAIpQLSet-bBBZI1AKQCF3tzlMY5fBbwp6TooZxkE2drW023vpCZ9jQ/formResponse')</script>");

if (is_array($db_array)) { // error handling if no data
	krsort($db_array); // reverse key sort lib function
} else {
    echo("<script>console.log('db_array is NOT set');</script>");
}
//echo(isset($_POST['entry_1734281767']));

if (isset($_POST['entry_1734281767'])) {
    //echo("<script>console.log('post var (location) is set');</script>");
    $time = time();
    $db_array[$time]['name'] = $_POST['entry_321910209']; // PHP requires "." in $_POST to be "_"
    $db_array[$time]['email'] = $_POST['entry_1847339881'];
    $db_array[$time]['phone'] = $_POST['entry_1710439998'];
    $db_array[$time]['pos_id'] = $time;
    $db_array[$time]['pos_loc'] = $_POST['entry_1734281767'];
	$db_array[$time]['pos_type'] = $_POST['entry_609998995'];
	$db_array[$time]['pos_pay'] = $_POST['entry_842548913'];
    $db_array[$time]['pos_date'] = $time;
    $db_array[$time]['pos_desc'] = $_POST['entry_1128242642'];
    save($db_array);
} else {
    //echo("<script>console.log('POST var (location) is NOT set');</script>");
}

if (is_array($db_array)) {
	foreach($db_array as $item) { ?>
		<tr>
		<td><?php echo($item['phone']); ?></td>
        <td><?php echo($item['pos_loc']); ?></td>
		<td><?php echo($item['pos_type']); ?></td>
        <td><?php echo($item['pos_pay']); ?></td>
		<td><?php echo(date_disp($item['pos_date'])); ?></td>
		<td><?php echo($item['pos_desc']); ?></td>
		</tr>
	<?php 
	} 
} else {
    //echo("<script>console.log('$db_array is NOT set');</script>");
}

?>

<!--
<pre>
<?php //print_r($db_array); ?>
</pre>
-->