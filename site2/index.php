<?php
/*
Super globals:
$argc - Contains the number of arguments passed to the current script when running from the command line.
$argv - Array of arguments passed to script.
$GLOBALS - An associative array containing references to all variables which are currently defined in the global scope of the script. The variable names are the keys of the array.
$_SERVER - An array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these; servers
           may omit some, or provide others not listed here.
$_GET - An associative array of variables passed to the current script via the URL parameters (aka. query string). Note that the array is not only populated for GET requests, but rather for all requests with a query string.
$_POST - An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.
$_FILES - An associative array of items uploaded to the current script via the HTTP POST method. The structure of this array is outlined in the POST method uploads section.
$_COOKIE - An associative array of variables passed to the current script via HTTP Cookies.
$_SESSION - An associative array containing session variables available to the current script.
$_REQUEST - An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
$_ENV - An associative array of variables passed to the current script via the environment method. These variables are imported into PHP's global namespace from the environment under which the PHP parser is running. Many are
        provided by the shell under which PHP is running and different systems are likely running different kinds of shells, a definitive list is impossible.
*/

include('server_info.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>System Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
    <h1>Server & File Info: </h1>
    <?php if($serv1): ?>
      <ul class="list-group">
      <?php foreach($serv1 as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo($key); ?></strong>
          <?php echo($value); ?>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <br>
    <br>
    <h1>Client Info: </h1>
    <?php if($client1): ?>
      <ul class="list-group">
      <?php foreach($client1 as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo($key); ?></strong>
          <?php echo($value); ?>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <br>
  <br>
  </body>
</html>
