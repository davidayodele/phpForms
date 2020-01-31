<?php
$names[] = "David";
$names[] = "Alice";
$names[] = "Bob";
$names[] = "Cindy";
$names[] = "Dan";
$names[] = "Eve";
$names[] = "Fred";
$names[] = "Grace";



// Gets query string
$q = $_REQUEST['q'];

$suggest = "";

//Gets suggestion
if($q !== "") {
    $q = strtolower($q); //to simplify parsing
    $str_len = strlen($q);
    foreach($names as $name) {
        if(stristr($q, substr($name, 0, $str_len))) { //if any substring (from 0) of name matches the query
            if($suggest == ""){
                $suggest = $name; // If no suggestion has been made, suggest one
            } else {
                $suggest .= ", $name"; // suggest multiple names
            }
        }
    }
}

echo $suggest == "" ? "No suggestion" : $suggest;

?>