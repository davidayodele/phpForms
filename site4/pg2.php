<?php

session_start();
$name = $_SESSION['name_g'];
$email = $_SESSION['email_g'];
$phone = $_SESSION['phone_g'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2 - Sessions</title>
</head>
<body>
Hello I am page 2 text!
<br>
You entered <?php echo "name: ". $name .", email: ". $email .", phone: ". $phone ."<br>"; ?>
<br> 
The session array is: <?php echo "<pre>", print_r($_SESSION, true), "</pre>"; ?> 
</body>
</html>