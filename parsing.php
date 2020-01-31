<?php

$url = "https://www.youtube.com/watch?v=kVtgA_PQ5R4";
$url_arr = parse_url($url);

echo "Parsed url = <pre>", print_r($url_arr, true), "</pre><br>";

$url_query = parse_url($url, PHP_URL_QUERY); // Extracts query component

// Custom explode from https://stackoverflow.com/questions/4955433/php-multiple-delimiters-in-explode
function explode_ext ($delimiters,$string) { 
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$query_arr = explode_ext(array("=", "&"), $url_query);

echo 'Parsed url query = <pre>', print_r($query_arr, true), '</pre><br>';

echo($query_arr[0]);
if(isset($v)) {
    echo 'v = '.$v.'<br>';
}

if(isset($ob)) {
    echo 'ob = '.$ob.'<br>';
}

?>