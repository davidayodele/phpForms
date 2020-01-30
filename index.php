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

$max = 3000;
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
$starttime = gettimeofday()['usec'];
echo(date('H:i:s.'). $starttime . "<br>");
primesToMax($max);
echo("<br>stop time: ");
$endtime = gettimeofday()['usec'];
echo(date('H:i:s.'). $endtime . "<br>");
$speed = $endtime - $starttime > 0 ? $endtime - $starttime : "> 1ms"; // ternary operator
echo("execution speed: ". $speed. " microsec");
print('<br>');

/*===== Sieve of Eratosthenes =====
*/
echo('<br>===== Sieve of Eratosthenes =====<br>');

function Sieve($range) {
// Creates a boolean array to store prime checks "primeChecks[0..n]" & inits
// all n's as True. An n in primeChecks[n] will become False iff n is composite
  $primeChecks = array_fill(0, $range+1, true); // array_fill(starting index, fill range, fill val)
  // range+1 used to ensure last value is checked
  for ($n = 2; $n*$n <= $range; $n++) {
  // Starting with the 1st prime, upto the square of the last, increment by 1
    if ($primeChecks[$n] == true) {
    // skip the inner loop if n is false (non-prime), otherwise continue
      for ($i = $n*$n; $i <= $range; $i += $n) { // inc by n, not by 1
        $primeChecks[$i] = false; // sets val to false if a factor exists
        // $i += $n is the 1st crux of the algorithm as this makes the loop
        // an iteration through multiples of n. $i = $n*$n is the 2nd crux as
        // this means we only enter the loop at perfect squares, starting with 4,
        // and inc by 2. $prime[$i] = false is the 3rd crux as this essentially
        // stores "primality data" in the array.
      }
    }
  }
  // after loop completion, our array will contain true vals where no mult of
  // n was encountered in the inner loop. We now, print the "true" indices
  for ($n = 2; $n <= $range; $n++){
    if ($primeChecks[$n]){
      echo($n.", ");
    }
  }
}

$sieveMax = 3000;
$starttime2 = gettimeofday()['usec'];
echo("<br>start time: ". date('H:i:s.'). $starttime2 . "<br>");

echo("Sieve max =  ".$sieveMax."<br>");
echo("Primes:<br>");

Sieve($sieveMax);

$endtime2 = gettimeofday()['usec'];
echo("<br>stop time: ".date('H:i:s.'). $endtime2 . "<br>");
$speed2 = $endtime2 - $starttime2 > 0 ? $endtime2 - $starttime2 : "> 1ms";
echo("execution speed: ". $speed2. " microsec");
print('<br>');
echo('<br>============ End Functions ============');

//======= Conditionals ===============
print("<br>");
echo('============ Conditionals ==============<br>');
/*===== Equivalence types =====
Exactly (un)equal (type and value): ===, !==
*/
echo('<br>==== Equivalence types ====<br>');
$int1 = 100;
$dbl1 = 100.0;

echo("<br>integer1 = ". $int1);
echo("<br>double1 = ". $dbl1);

if ($int1 == $dbl1) {
  echo("<br>". $int1 ." equals (==) ". $dbl1);
} else {
  echo("<br>". $int1 ." does not equal (==) ". $dbl1);
}

if ($int1 === $dbl1) {
  echo("<br>". $int1 ." equals (===)". $dbl1);
} else {
  echo("<br>". $int1 ." does not equal (===)". $dbl1);
}

/*===== Logical operators =====
Logical And: &&, AND
Logical Or: ||, OR
Logical Xor: XOR
*/
echo('<br><br>==== Logical operators ====<br>');

$int2 = 101;
$dbl2 = 109.5;

echo("<br>integer2 = ". $int2);
echo("<br>double2 = ". $dbl2);

if ($int2 > $int1) {
  echo("<br>integer2 > integer1");
}
if ($int2 > $int1 OR $int2 == $dbl1) {
  echo("<br>integer2 < integer1 OR integer2 == double1");
}
if ($int1 === $dbl1 || $int1 !== $dbl1) {
  echo("<br>integer1 === integer1 || integer1 !== double1");
}
if ($int2 > $int1 AND $dbl2 > $dbl1) {
  echo("<br>integer2 > integer1 AND double2 > double1");
}
if ($int2 < $int1 XOR $dbl2 > $dbl1) {
  echo("<br>integer2 < integer1 XOR double2 > double1");
}
echo('<br><br>==== Switch statements ====<br>');
$myGrade = 62.3;

function grader($grade){
    switch($grade) {
      case $grade >= 90 && $grade < 100: echo("<br>Your grade is A");
      break;
      case $grade >= 80 && $grade < 90: echo("<br>Your grade is B");
      break;
      case $grade >= 70 && $grade < 80: echo("<br>Your grade is C");
      break;
      case $grade >= 60 && $grade < 70: echo("<br>Your grade is D");
      break;
      case $grade < 60: echo("<br>Your grade is F");
      break;
      default: echo("<br>Your grade is outside normal range");
    }
}

grader($myGrade);
//======= End Conditionals ===============
echo('<br>============ End Conditionals ==============<br>');


?>
<script type="text/javascript" id="main_script" src="prac.js" async="">
</script>

<div role="button" class="retro-btn">
<a class="btn">
<span class="btn-inner">
<span class="content-wrapper">
<span class="btn-content">
<span class="btn-content-inner" label="Retro Button">
</span>
</span>
</span>
</span>
</a>
</div>

<style type="text/css">
.retro-btn .btn .btn-inner .content-wrapper .btn-content {
    background-image: initial;
    background-color: #26a69a;
    color: #ebf1f8;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 3px;
    text-indent: 0;
    z-index: 3;
    overflow: hidden;
    padding: 0 16px;
    -webkit-transition: border .185s ease-out,background .185s ease-out,color .185s ease-out,-webkit-transform .185s ease-out;
    transition: border .185s ease-out,background .185s ease-out,color .185s ease-out,-webkit-transform .185s ease-out;
    transition: border .185s ease-out,transform .185s ease-out,background .185s ease-out,color .185s ease-out;
    transition: border .185s ease-out,transform .185s ease-out,background .185s ease-out,color .185s ease-out,-webkit-transform .185s ease-out;
}

.retro-btn .btn .btn-inner .content-wrapper {
    position: relative;
    font-family: inherit;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
    height: calc(100% - 3px);
    margin-top: -3px;
}
.retro-btn .btn .btn-inner {
    display: block;
    height: 100%;
}

.retro-btn .btn, .retro-btn .btn:focus {
    outline-color: 0;
    outline-style: none;
    outline-width: 0;
}

.retro-btn .btn {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: inline-block;
    vertical-align: middle;
    padding-top: 3px;
    position: relative;
    cursor: pointer;
    font-weight: 600;
    font-family: inherit;
    font-style: normal;
    letter-spacing: 0;
    text-rendering: auto;
    text-decoration: none;
    text-align: center;
    -webkit-transition: opacity .1s ease-out;
    transition: opacity .1s ease-out;
    z-index: 5;
    -webkit-font-smoothing: antialiased;
    width: 240px;
    height: 46px;
    font-size: 12px;
    line-height: 24px;
    background-color: transparent;
    text-decoration-color: initial;
    border-color: initial;
    -webkit-tap-highlight-color: transparent;
}

</style>