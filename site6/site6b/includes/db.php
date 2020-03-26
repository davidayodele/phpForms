<?php //DOUBLE CHECK TAGS!
if(!defined('scsn')) {
    exit('Access Denied!');
}

session_start(); //storing session data for vars only
date_default_timezone_set('America/Phoenix');

$db_host = "localhost";
$db_user = "root";
$db_name = "postings";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // must be in order (host, user, pass, db)
$_SESSION['conn_g'] = $conn;

if(!$conn){
    echo "Failed to connect db: ".mysqli_connect_error();
}

?>