<?php
/*
Variables: Must begin w $, have a letter or _
Types: Usual + Objects, NULL, Resource
Strings: concat w . or surround in ""
Arrays: Indexed, Associative, Multi-dimensional
*/

echo('============ Strings ==============');
echo("<br>");
$str1 = "Hello ";
$str2 = "I am stored text";
echo("<br>");
echo($str1.$str2);
echo("<br>");
print("<br>");
echo("I am mixed text after a dbl break: $str1 $str2");
echo('<br>');
echo('============ End Strings ==============<br>');

//======= Arrays ===============
print("<br>");
echo('============ Arrays ==============<br>');
#Indexed
$names = array('Alice', 'Bob', 'Charlie', 'Dan', 'Ellen');
$cars = ['Acura', 'BMW', 'Chevy', 'Dodge'];
$prices = [49567.54, 89432.65, 22437.77, 36859.19, 19840.30];
print($names[0]);
print("<br>");
echo($cars[3]);
print("<br>");
$cars[5] = 'GM';
print($cars[5]);
print("<br>");
print(count($cars));
print("<br><br>");
var_dump($cars); // throws error since cars[4] is empty
print("<br><br>");
$cars[4] = 'Ford';
var_dump($cars); // does not throw error since cars[4] is now defined
print("<br><br>");
var_dump($prices);
print("<br><br>");
#Associative
$driver = ['Alice' => 'Acura', 'Bob' => 'BMW', 'Charlie' => 'Chevy'];
echo($driver['Charlie']);
print("<br>");
print_r($driver);
print("<br><br>");

$order = array(
  'Alice' => array('Car' => 'Acura', 'Price' => 49567.54, 'MPG' => 31),
  'Bob' => array('Car' => 'BMW', 'Price' => 89432.65, 'MPG' => 27),
  'Charlie' => array('Car' => 'Chevy', 'Price' => 36859.19, 'MPG' => 33),
  'Dan' => array('Car' => 'Dodge', 'Price' => 22437.77, 'MPG' => 34),
);

$car1 = ['Car' => 'Acura', 'Price' => 49567.54, 'MPG' => 31];
$car2 = ['Car' => 'BMW', 'Price' => 89432.65, 'MPG' => 27];
$car3 = ['Car' => 'Chevy', 'Price' => 36859.19, 'MPG' => 33];
$car4 = ['Car' => 'Dodge', 'Price' => 22437.77, 'MPG' => 34];

$cars2  = array (
  ['Car' => 'Acura', 'Price' => 49567.54, 'MPG' => 31],
  ['Car' => 'BMW', 'Price' => 89432.65, 'MPG' => 27],
  ['Car' => 'Chevy', 'Price' => 36859.19, 'MPG' => 33],
  ['Car' => 'Dodge', 'Price' => 22437.77, 'MPG' => 34],
  ['Car' => 'Ford', 'Price' => 19840.30, 'MPG' => 30]
);

$order2 = array(
  $names[0] => $car1,
  $names[1] => $car2,
  $names[2] => $car3,
  $names[3] => $car4,
);

/*
$order3 = array (
  for ($i = 0; $i <= 4; $i++){
    $names[$i] => $cars2[$i];
  }
);
*/

$order3 = array();
for ($i = 0; $i <= 4; $i++){
   array_push($order3, $names[$i], $cars2[$i]);
}

//$order3 = foreach ($order3 as $names => $cars2);

$order4 = array_map(null, $names, $cars2);

echo("Order array: <br>");
print_r($order3);
print("<br><br>");
echo("Alice's MPG: <br>");
print($order['Alice']['MPG']);
print("<br><br>");
echo("Order array2: <br>");
print_r($order2);
print("<br><br>");
echo("Dan's Car: <br>");
print($order2['Dan']['Car']);
print("<br><br>");
print_r($order3);
print("<br><br>");
echo("Charlie's price: <br>");
print_r($order3[4]);
print("<br><br>");
print_r($order4);
print("<br><br>");
echo("Ellen's price: <br>");
print_r($order4[4][1]['Price']);
echo('<br>============ End Arrays ============');
?>
