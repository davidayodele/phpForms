<?php

define('scsn', TRUE);
//require($_SERVER['DOCUMENT_ROOT']."/phpForms/site5/db.php");
include('db.php');

$query = "create TABLE postings1 (
    pos_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_name varchar(256) not null,
    user_email varchar(256) not null,
    user_phone varchar(256) not null,
    pos_loc varchar(256) not null,
    pos_type varchar(256) not null,
    pos_time varchar(256) not null,
    pos_pay varchar(256) not null,
    pos_desc varchar(256) not null
);";

$query_output = mysqli_query($conn, $query);

if($query_output) {
    echo("QUERY SUCCESSFUL");
}

?>