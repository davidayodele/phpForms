<?php

$url = "https://www.youtube.com/watch?v=kVtgA_PQ5R4";
$url_arr = parse_url($url);

echo('Parsed url = <br>');
print_r($url_arr);
echo('<br>');

$url_query = parse_url($url, PHP_URL_QUERY); // Extracts query component

$query_arr = parse_str($url_query);

echo('Parsed url query = ');
print_r($query_arr);
echo('<br>');
echo($query_arr[0]);
if(isset($v)) {
    echo('v = '.$v.'<br>');
}

if(isset($ob)) {
    echo('ob = '.$ob.'<br>');
}


?>