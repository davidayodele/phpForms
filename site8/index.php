CREATE TABLE users (
    usr_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    usr_name TINYTEXT NOT NULL,
    usr_email TINYTEXT NOT NULL,
    usr_pwd LONGTEXT NOT NULL
); 

<?php
    require('header.php');
?>
<!doctype html>
<html lang='zxx'>
<head>
<meta charset="UTF-8">
<title>Hello World</title>
<style type="text/css">
</style> 
</head>

<body>

<h2>Login</h2>

<form id="form" method="post" action="post_content.php">
<input id="input1" type="text" value="" placeholder="input 1"/>
<textarea name="content" id="text_area"></textarea> <!-- leave on same line to avoid space insertion -->
<input id="submit" type="submit" value="Submit"/>
</form>

</body>
</html>