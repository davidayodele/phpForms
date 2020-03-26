<?php
# -----------------
# Saves data to JSON
# -----------------
if (!function_exists('save')) {
  function save($data){
    $json_data = json_encode($data); // Convert data array back to json
    $file = fopen("../js/data.json", "w") or die("Unable to open file!"); // Open file
    fwrite($file, $json_data); // Save file with jsaon data
  }
}

# -----------------
# Returns a FontAwesome icon
# -----------------
if (!function_exists('icon')) {
  function icon($code){
    $icon = '<i class="fa fa-'.$code.'"></i>';
    return $icon;
  }
}

# -----------------
# Makes dates pretty
# -----------------
if (!function_exists('date_disp')) {
  function date_disp($date) {
    return date('M j Y g:i A', $date);
  }
}

# -----------------
# Makes times pretty
# -----------------
if (!function_exists('time_disp')) {
  function time_disp($seconds){
    $h = floor(($seconds/60)/60); // Hours
    $m = round(($seconds/60)) - ($h * 60); // Minutes
    
    echo '<span class="hours">'.$h.'</span> hrs : <span class="minutes">'.$m.'</span> mins'; // Display result   
  }
}
?>