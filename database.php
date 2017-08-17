<?php
// create connection to db

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'myquizzer';

//create mysql object
$mysqli = new mysqli ($db_host,  $db_user, $db_pass, $db_name);

//handling error
if($mysqli->connect_error){
    printf("connection failed %s/n", $mysqli->connect_error);
    exit();
}