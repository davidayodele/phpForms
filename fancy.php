<?php
// Nested ternary
$height = 72;
$weight = 150;
$usr_login = true;

$bmi = ($height > 72 ? /*True #1*/ ($weight > 250 ? /*True #2*/ 'High if height is < 84' : /*False #2*/ 'Low') : /*False #1*/ ($weight > 250 ? 'High' : 'Low'));

echo("<br>".$bmi."<br>");
?>

<div>
<?php if($usr_login == true) { ?>

    <h1>Welcome User</h1>

<?php } else { ?>

    <h1>Welcome Guest</h1>

<?php } ?>

</div>

<?php $usr_login = false; ?>

<div>
<?php if($usr_login): // we can ommit curly braces when using endif / endfor ?>

    <h1>Welcome User</h1>

<?php else: ?>

    <h1>Welcome Guest</h1>

<?php endif; ?>

</div>

<div>
<?php for($i = 0; $i <= 10; $i++): ?>
  <li>
  <?php echo(null);
    if($i % 2 != 0){
      echo($i);
    }
  ?>
  </li>
<?php endfor; ?>
</div>
