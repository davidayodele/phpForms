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
    $db_length = sizeof($db_array);
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
?>

<link rel="stylesheet" href="../css/jobs_board.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" media="all">
<input id="switch-0" type="checkbox" name="table-check" class="switch0-input">
<input id="switch-1" type="checkbox" name="table-check" class="switch1-input" checked="false">
<input id="switch-2" type="checkbox" name="table-check" class="switch2-input" checked="false">
<input id="switch-3" type="checkbox" name="table-check" class="switch3-input" checked="false">
<input id="switch-4" type="checkbox" name="table-check" class="switch4-input" checked="false">

<?php
$count = 0;
if (is_array($db_array)) {
    foreach($db_array as $item) {
        $count++;
        if ($count < 41) {          
            ?>
            <div class="divTableRow table_<?php echo(floor($count/11)); ?>" name="table_<?php echo(floor($count/11)); ?>" id="table_<?php echo(floor($count/11)); ?>">
                <div class="divTableCell phone_col"><?php echo($item['phone']); ?></div>
                <div class="divTableCell loc_col"><?php echo($item['pos_loc']); ?></div>
                <div class="divTableCell type_col"><?php echo($item['pos_type']); ?></div>
                <div class="divTableCell pay_col"><?php echo($item['pos_pay']); ?></div>
                <div class="divTableCell date_col"><?php echo(date_disp($item['pos_date'])); ?></div>
                <div class="divTableCell desc_col"><?php echo($item['pos_desc']); ?></div>
            </div>                
            <?php 
        } elseif ($count >= 41 && $count < 101) {
            ?>
            <div class="divTableRow table_all" name="table_all" id="table_all">
                <div class="divTableCell phone_col"><?php echo($item['phone']); ?></div>
                <div class="divTableCell loc_col"><?php echo($item['pos_loc']); ?></div>
                <div class="divTableCell type_col"><?php echo($item['pos_type']); ?></div>
                <div class="divTableCell pay_col"><?php echo($item['pos_pay']); ?></div>
                <div class="divTableCell date_col"><?php echo(date_disp($item['pos_date'])); ?></div>
                <div class="divTableCell desc_col"><?php echo($item['pos_desc']); ?></div>
            </div>         
            <?php 
        }          
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