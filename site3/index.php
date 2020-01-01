<?php
  // To clear all inputs, simply alter the URL instead usinng refresh
  $err_msg = '';
  $err_msg_class = '';
  date_default_timezone_set('America/Phoenix');
  $time = date("m-d-Y h:i:s A");

  // Check for form submit using filters
  // if a POST(input) var named 'submit' exists... do something. Thus, the name
  // attribute for sommething in the form must be 'submit'
  if(filter_has_var(INPUT_POST, 'submit')){
    //echo("Contact form submitted");
    // Store the form data
    $name = htmlspecialchars($_POST['name']); // htmlspecialchars used to mitigate JS injection
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars(trim($_POST['msg']));

    //Do some validation
    if(!empty($email) && !empty($name) && strlen(trim($_POST['msg']))){ // same as setting attr required="true" in html
      // Passed
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          echo("Email validated.<br>");
          echo("Form info received!<br>");
          $err_msg = 'Thanks, '.$name. '!';
          $err_msg_class = 'alert-success';

          // Prepare email
          $toField = 'starcanyonschool@gmail.com';
          $subjField = 'Form submission by '.$name;
          $bodyField = "<h3>Form Details:</h3><br>
                        <h4>Time</h4>: <p>$time</p><br>
                        <h4>Name</h4>: <p>$name</p><br>
                        <h4>Message</h4>: <p>$msg</p><br>";

          // Email headers (analogous to envelope info)
          $mailHeader = "MIME-Version: 1.0"."\r\n";
          $mailHeader .="Content-Type:text/html;charset=UTF-8"."\r\n";

          // Variable header info
          $mailHeader .= "From: ".$name. "<".$email.">". "\r\n";

          // Send Email using mail() function
          // mail ( string $to , string $subject , string $message [, mixed $additional_headers
          // [, string $additional_parameters ]] ) : bool

          if(mail($toField, $subjField, $bodyField, $mailHeader)){
            $err_msg .= " Your messae has been sent!";
          } else {
            $err_msg_class = 'alert-danger';
            $err_msg .= " Error sending your message, please retry.";
          }

      } else { // Will not usually exec if HTML attr type="email" is used
        echo("Invalid email: ".$email."<br>");
        echo("Message: ".$msg."<br>");
      }

    } else { // This code will almost never execute as HTML5 required="true" will catch first
      // Failed
      $err_msg = 'Please complete all fields';
      $err_msg_class = 'alert-danger';
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="lux-bootstrap.min.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Something else here</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    </nav>
    <br>

    <div class="container">
    <form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>">
    <div class="form-group">
    <label>
    Name
    </label>
    <input type="text" name="name" class="form-control" value="<?php echo(isset($_POST['name']) ? $name : ""); ?>" required="true">
    </div>
    <div class="form-group">
    <label>
    Email
    </label>
    <input type="email" name="email" class="form-control" value="<?php echo(isset($_POST['email']) ? $email : ""); ?>" required="true">
    </div>
    <div class="form-group">
    <label>
    Message
    </label>
    <textarea name="msg" class="form-control" required>
    <?php echo(isset($_POST['msg']) ? trim($msg) : null); ?>
    </textarea>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if($err_msg != ''): ?>
    <div class="alert <?php echo($err_msg_class); ?>">
    <?php echo($err_msg); ?>
    </div>
    <?php endif; ?>
    </div>

  </body>
</html>
