<?php
  // The filter_has_var function checks for posted data (inputs only)
  /*
  (PHP 5 >= 5.2.0, PHP 7)
  filter_has_var — Checks if variable of specified type exists
  type - One of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.
  */

  $input_arr = [
    "usrname" => $_POST['usrname'],
    "height" => $_POST['height'],
    "email" => $_POST['email']
  ];

  $filters = [
    "usrname" => [
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ],
    
    "height" => [
      "filter" => FILTER_VALIDATE_INT,
      "options" => [
        "min_range" => 20,
        "max_range" => 170
      ]
    ],
    "email" => FILTER_VALIDATE_EMAIL
  ];

  if(filter_has_var(INPUT_POST, 'usrname')) {
    echo("the POST signal header contains the following data: ". $_POST['usrname']. "<br>");
    echo("<br>The filtered input array is: ");
    print_r(filter_var_array($input_arr, $filters));
    echo("<br>");

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      echo("the POST signal header contains a valid email: ". $_POST['email']. "<br>");
    } else {
      echo("the POST signal header contains an invalid email: ". $_POST['email']. "<br>");
    }

    echo("the sanitized email is: ". filter_var($_POST['email'], FILTER_SANITIZE_EMAIL). "<br>");

  } else {
    echo("the POST signal header contains no data<br>");
  }


  if(filter_has_var(INPUT_GET, 'phone') && filter_has_var(INPUT_GET, 'url')) {
    echo("the GET modified URL contains the following data: ". $_GET['phone']. "<br>");
    if(filter_var($_GET['url'], FILTER_VALIDATE_URL)){
      echo("the GET modified URL contains a valid url: ". $_GET['url']. "<br>");
    } else {
      echo("the GET modified URL contains an invalid url: ". $_GET['url']. "<br>");
    }

    echo("the sanitized url is: ". filter_var($_GET['url'], FILTER_SANITIZE_URL). "<br>");

  } else {
    echo("the GET modified URL contains insufficient data<br>");
  }

  echo("<br>Special chars:<br>");
  $chars = '<script>alert("hello")</script>';
  echo(filter_var($chars, FILTER_SANITIZE_SPECIAL_CHARS)."<br>");


  /* Filter Params
  FILTER_VALIDATE_IP, FILTER_VALIDATE_REGEXP, FILTER_VALIDATE_URL,
  FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_BOOLEAN, FILTER_VALIDATE_FLOAT,
  FILTER_VALIDATE_INT

  FILTER_SANITIZE_EMAIL, FILTER_SANITIZE_ENCODED, FILTER_SANITIZE_NUMBER_FLOAT,
  FILTER_SANITIZE_NUMBER_INT, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_STRING,
  FILTER_SANITIZE_URL
  */

?>
<h2>Form 1</h2>
<h5>method="POST"</h5>
<hr>
<form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>"> <!-- $_SERVER['PHP_SELF'] will be filters.php -->
<div>
<label>Username</label><br>
<input type="text" name="usrname">
</div>
<div>
<label>Email</label><br>
<input type="text" name="email">
</div>
<div>
<label>Height</label><br>
<input type="number" name="height">
</div>
<input type="submit" value="Send">
</form>

<br>
<br>
<h2>Form 2</h2>
<h5>method="GET"</h5>
<hr>
<form method="GET" action="<?php echo($_SERVER['PHP_SELF']); ?>"> <!-- $_SERVER['PHP_SELF'] will be filters.php -->
<div>
<label>Phone</label><br>
<input type="tel" name="phone">
</div>
<div>
<label>Image url</label><br>
<input type="text" name="url">
</div>
<input type="submit" value="Send">
</form>
