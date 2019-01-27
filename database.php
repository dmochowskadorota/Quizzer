<?php

//Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_password = 'root123';

//Create mysqli object
$mysqli = new mysqli ($db_host, $db_user, $db_name, $db_password);

//Error Handler
if($mysqli->connect_error) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
