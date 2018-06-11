<?php

$con = mysqli_connect('localhost', 'kbstar01', 'kwak1234');
if(!$con) {
	die('could not connect:'.mysqli_error($con));
}

mysqli_select_db($con, "kbstar01_db");

$sql = "CREATE TABLE HELLO (num int, name varchar(30))";

$result = mysqli_query($con, $sql);

mysqli_close($con);

?>
