<?php
date_default_timezone_set('America/Phoenix');
$usrname = "";

if(isset($_GET['usrname'])){
  $usrname = $_GET['usrname'];
  echo(htmlentities("Username is: ". $_GET['usrname'])."<br>"); //htmlentities mitigates XSS/JS injection
  //print_r($_GET);
}

if(isset($_POST['usrname'])){
  //echo(htmlentities("Username is: ". $_POST['usrname'])."<br>"); //htmlentities mitigates XSS/JS injection
  //print_r($_GET);
}

if(isset($_REQUEST['usrname'])){
  echo(htmlentities("Username is: ". $_REQUEST['usrname'])."<br>"); //htmlentities mitigates XSS/JS injection
  //print_r($_REQUEST);
}

echo($_SERVER['QUERY_STRING']. "<br>"); // Not working! May need to modify htaccess?
echo("Request time: ". date('m/d/Y h:i:s A', $_SERVER['REQUEST_TIME_FLOAT']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET & POST Prac</title>
  </head>
  <body>
    <form method="POST" action="get-post.php">
    <!--GET uses Universal Resource Locator to carry requests, POST uses the
    HTTP signal header (or https if on 443)
    -->
    <div>
    <label>Username</label><br>
    <input type="text" name="usrname">
    </div>
    <div>
    <label>Email</label><br>
    <input type="text" name="email">
    </div>
    <input type="submit" value="Send">
    </form>
    <ul>
    <li>
    <a href="get-post.php?usrname=David">David</a>
    </li>
    <li>
    <a href="get-post.php?usrname=Dayodele">Dayodele</a>
    </li>
    </ul>
    <?php echo("{$usrname}'s info <br>"); ?>
  </body>
</html>
