<?php

$con = mysqli_connect('localhost', 'kbstar01', 'kwak1234');
if(!$con) {
	die('could not connect:'.mysqli_error($con));
}

mysqli_set_charset($con, 'utf8');
//mysqli_query($con, "set session character_set_connection=utf8;");
//mysqli_query($con, "set session character_set_results=utf8;");
//mysqli_query($con, "set session character_set_client=utf8;");

mysqli_select_db($con, "kbstar01_db");

$id = $_GET['custid'];
$name = $_GET['name'];
$address = $_GET['address'];
$phone = $_GET['phone'];

echo "<pre>"; print_r($_GET); echo "</pre>";

$sql = "select * from Customer";
echo "$sql";

$result = mysqli_query($con, $sql);

echo "<table border=\"3\">";
echo "<tr><td><H2>Customer ID</H2></td><td><H2>Name</H2></td><td><H2>Address</H2></td><td><H2>Phone</H2></td></tr>";

while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td><H3>".$row["custid"]."</H3></td><td><H3> ".$row["name"]."</H3></td><td><H3>".$row["address"]."</H3></td><td><H3>".$row["phone"]."</H3></td></tr>";
}

echo "</table>";

mysqli_close($con);

?>
