<?php

define('scsn', TRUE);
//require($_SERVER['DOCUMENT_ROOT']."/phpForms/site5/db.php");
include('db.php');

$query = "create TABLE posts2 (
    post_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_name varchar(256) not null,
    user_email varchar(256) not null,
    user_phone varchar(256) not null,
    post_loc varchar(256) not null,
    post_type varchar(256) not null,
    post_time datetime not null,
    post_pay varchar(256) not null,
    post_desc varchar(256) not null
);";

$query_output = mysqli_query($conn, $query);

if($query_output) {
    echo("QUERY SUCCESSFUL");
}

?>