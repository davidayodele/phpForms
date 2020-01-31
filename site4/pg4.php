<?php

$name = $_COOKIE['name_g'];
$phone = $_COOKIE['phone_g'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 4 - Cookies</title>
</head>
<body>
Hello I am page 2 text!
<br>
You entered <?php echo "name: ". $name .", phone: ". $phone ."<br>"; ?>
<br> 
The cookie array is: <?php echo "<pre>", print_r($_COOKIE, true), "</pre>"; ?> 
</body>
</html>