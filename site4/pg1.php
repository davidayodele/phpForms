<?php
if(isset($_POST['submit_btn'])) {
    echo("submit field is set <br>");

    session_start();
    $_SESSION['name_g'] = htmlentities($_POST['name']); // creates global server-side var 
    $_SESSION['email_g'] = htmlentities($_POST['email']);
    $_SESSION['phone_g'] = htmlentities($_POST['phone']);

    header('Location: pg2.php'); //directs http header to new loc
} 

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1 - Sessions</title>
</head>
<body>
<form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>">
<input type="text" name="name" placeholder="Enter Name">
<br>
<input type="email" name="email" placeholder="Enter Email">
<br>
<input type="tel" name="phone" placeholder="Enter Phone">
<br>
<textarea name="msg" placeholder="Enter your msg">
</textarea>
<br>
<input type="submit" name="submit_btn" value="Submit">
</form>

</body>
</html>

