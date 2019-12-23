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
echo('I am mixed text after a dbl break: $str1 $str2'); // Does not work w/ single quotes!!!
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

//======= Loops ===============
print("<br>");
echo('============ Loops ==============<br>');
/*=====For Loops=====
- Cases: Definite, iteration length is known
- Params: explicit initializer, explicit condition, explicit increment
- Flow: Initialization -> Condition check -> Event execution -> Iteration
*/
print('<br>');
for($i = 0; $i < 10; $i++){
  if($i % 2 == 0){
      echo $i;
  }
}
print('<br>');

/*=====While Loops=====
- Cases: Indefinite, iteration length is unknown
- Params: implicit initializer, explicit condition, implicit increment
- Flow: Condition check -> Event execution (typically forces iteration)
*/
print('<br>');
$counts = [0, 3, 8];
while($counts[0] < $counts[2]){
  if($counts[0] % 2 == 0){
      print_r($counts);
      print('<br>');
  }
  ++$counts[0]; //prefix iteration (execution first)
}
print('<br>');

/*=====Do While Loops=====
- Cases: Indefinite, iteration length is unknown
- Params: implicit initializer, explicit condition, implicit increment
- Flow: Event execution (typically forces iteration) -> Condition check
*/
print('<br>');
$counts2 = [1, 5, 9];
do {
  if($counts2[2] % 2 != 0){
      print_r($counts2);
      print('<br>');
  }
  $counts2[2]--; //postfix iteration (execution last)
} while ($counts2[2] >= $counts2[0]);

print('<br>');

/*=====For Each Loops=====
- Cases: Definite, iteration length is unknown
- Params: Implicit initializer, implicit condition, explicit increment
- Flow: Iteration -> Event execution
*/
print('<br>');
$months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul'];
$month_nums = ['01', '02', '03', '04', '05', '06', '07'];
$months_ext = array_map(null, $months, $month_nums);
//print_r($months_ext);
foreach ($months_ext as $month_index => $month) {
  echo($month[0]. ' - ' .$month[1]);
  echo('<br>');
}
print('<br>');
echo('<br>============ End Loops ============');

//======= Functions ===============
print("<br>");
echo('============ Functions ==============<br>');
/*===== void type =====
*/

print('<br>');
function primesTo100(){
  $i=1;
  L1:
  while ($i<=100) {
    for ($j=2; $j<$i; $j++){
      if ($i % $j == 0){
        $i++; // if i is composite, iterate over i & exit j loop
        goto L1;
      }
    }
    echo($i . ', '); // otherwise, spit out i (should be prime) and iterate i
    $i++;
  }
}
echo('Primes to 100:<br>');
primesTo100();
print('<br>');

/*===== Pass by ref =====
*/
print('<br>');

$num = 1;
$primeSize = 100;

function add3r(&$n) {
    $n += 3;
}

function add3($n) {
    $n += 3;
}
add3($num);
echo("Add 3, pass by val:<br> $num"); // num is unmodified in pass by val (val of variable)
print('<br>');
add3r($num);
echo("Add 3, pass by ref:<br> $num"); // num is modified in pass by ref (ref to var)
print('<br><br>');

$max = 1500;
function primesToMax($Max){
  $i=2;
  L1:
  while ($i<=$Max) {
    for ($j=2; $j<$i; $j++){
      if ($i % $j == 0){
        $i++; // if i is composite, iterate over i & exit j loop
        goto L1;
      }
    }
    echo($i . ', '); // otherwise, spit out i (should be prime) and iterate i
    $i++;
  }
}
echo("Primes to $max:<br>");
echo("start time: ");
//echo(date('Y-m-d H:i:s.') . gettimeofday()['usec'] . "<br>");
echo(date('H:i:s.') . gettimeofday()['usec'] . "<br>");
primesToMax($max);
echo("<br>stop time: ");
echo(date('H:i:s.') . gettimeofday()['usec'] . "<br>");
print('<br>');

/*===== Sieve of Eratosthenes =====
*/

function Sieve($n) {
    // Create a boolean array of primes "prime[0..n]" & init all items as True
    // A value in prime[i] will become False if i is not prime
    $prime = array_fill(0, $n+1, true);

    for ($p = 2; $p*$p <= $n; $p++) {
        // If prime[p] is not changed,
        // then it is a prime
        if ($prime[$p] == true) {

            // Update all multiples of p
            for ($i = $p*$p; $i <= $n; $i += $p)
                $prime[$i] = false;
        }
    }

    // Print all prime numbers
    for ($p = 2; $p <= $n; $p++)
        if ($prime[$p])
            echo($p.", ");
}

$sieveMax = 30;
echo("Sieve max =  ".$sieveMax."<br>");
echo("Primes:<br>");
Sieve($sieveMax);

echo('<br>============ End Functions ============');
?>
