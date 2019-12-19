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
#Associative
$driver = ['Alice' => 'Acura', 'Bob' => 'BMW', 'Charlie' => 'Chevy'];
echo($driver['Charlie']);
print("<br>");
print_r($driver);
echo('<br>============ End Arrays ============');

//======= Loops ===============
print("<br>");
echo('============ Loops ==============<br>');
/*=====For Loops=====
- Cases: Definite, iteration length is known
- Params: initializer, condition, increment
- Flow: Initialization -> Condition check -> Event execution -> Interation
*/
print('<br>')
for($i = 0; i < 10; $i++){
  if($i % 2 ==0 ){
      echo($i);
  }
}
print('<br>')
echo('<br>============ End Loops ============');

?>
