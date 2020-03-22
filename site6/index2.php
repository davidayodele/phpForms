<?php 
include_once("functions.php"); 
//include("log.php");
?>

<!DOCTYPE html>
<html lang="en">
	
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tracker</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">

<!-- Font Awesome 4.4.0 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
    *:disabled {
        background-color:#cccccc !important;
        border:none !important;
    }
    .btn-cell{width:61px;}

    input#task {border: solid 1px rgba(0, 0, 0, 0.13); }
</style>

</head>

<body>

<div class="container-fluid">
    
    <header class="row">
    <div class="col-md-6">
        <a id="btn-swap" href="#" class="">Enter <span>Restore</span> Mode</a>
    </div><!-- END col --> 
    <div class="col-md-4 text-right">
            <strong>Total Hours:</strong> <span id="tally"></span>
    </div>

    <div class="col-md-6 text-right">
    Total Time:
    </div>
    </header>
    
    <div class="row">
    <form id="form-new" method="post">
        <div class="form-group">
        <div class="col-md-12">
            <input id="task" class="form-control" name="form_input" placeholder="Enter new task name..."> 
        </div>
        <!-- END col -->   
        <br>
        <br>
        <div class="col-md-12">
            <button type="submit" id="submit_btn" name="submit" class="btn btn-block btn-success">Submit</button> 
        </div><!-- END col -->
        </div><!-- END form-group -->
    </form>     
    </div><!-- END row -->
    
    <hr>
    
    <table class="table table-bordered">
    
    <thead>
        <tr>
        <th>Task</th>
        <th>Start</th>
        <th>End</th>
        <th>Time</th>
        <th colspan="2">Controls</th>
        </tr>   
    </thead>
    
    <tbody id="log"></tbody>
    
    </table>
    
</div><!-- END container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- App JS -->
<script src="tracker.js"></script>
    
</body>
</html>