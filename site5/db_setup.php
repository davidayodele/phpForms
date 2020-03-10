<?php

define('scsn', TRUE);
//require($_SERVER['DOCUMENT_ROOT']."/phpForms/site5/db.php");
include('db.php');

$query = "create TABLE postings3 (
    pos_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_name varchar(256) not null DEFAULT 'N/A',
    user_email varchar(256) not null DEFAULT 'N/A',
    user_phone varchar(256) not null DEFAULT 'N/A',
    pos_loc varchar(256) not null DEFAULT 'N/A',
    pos_type varchar(256) not null DEFAULT 'N/A',
    pos_time varchar(256) not null DEFAULT 'N/A',
    pos_pay varchar(256) not null DEFAULT 'N/A',
    pos_desc varchar(256) not null DEFAULT 'N/A'
);";

$query_result = mysqli_query($conn, $query);

if($query_result) {
    echo("SETUP QUERY SUCCESSFUL<br>");
} else {
    echo "SETUP QUERY Error: ".mysqli_error($conn)."<br>";
}

$query0 = "INSERT INTO postings3 (pos_id) VALUES (0);";
$query0_result = mysqli_query($conn, $query0);

if($query0_result) {
    echo("QUERY 0 SUCCESSFUL<br>");
} else {
    echo "QUERY 0 Error: ".mysqli_error($conn)."<br>";
}

?>