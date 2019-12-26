<?php

echo(date('d').'<br>'); // Day
echo(date('m/d/y')."<br>"); // Month Day Year(2)
echo(date('m/d/Y')."<br><br>"); // Month Day Year(4)

echo(date('h:i:s')."<br>"); // Hour Min Sec
echo(date('a')."<br>"); // AM or PM (lowercase)
echo(date('A')."<br>"); // AM or PM (Uppercase)

// Set Time Zone
date_default_timezone_set('America/Phoenix');
echo("<br>");
echo(date('h:i:s: A'). "<br>");

/*
The Unix timestamp is a long integer storing the number of seconds between
the Unix Epoch (01/01/1970 00:00;00 GMT) and a specified point.
*/
$unixTime = mktime(22, 16, 30, 12, 25, 2019); // hour, min, sec, mo, day, yr
echo($unixTime."<br><br>"); // output: 1577294190

echo(date('m/d/Y h:i:s A', $unixTime). "<br>"); // cast the timestamp into specified format

$time1 = strtotime('10:00pm December 22 2019');
$time2 = strtotime("Tomorrow");
$time3 = strtotime("next Tuesday");
$time4 = strtotime("+2 weeks");

echo(date('m/d/Y h:i:s A', $time1). "<br>");
echo(date('m/d/Y h:i:s A', $time2). "<br>");
echo(date('m/d/Y h:i:s A', $time3). "<br>");
echo(date('m/d/Y h:i:s:u A', $time4). "<br>");

?>
