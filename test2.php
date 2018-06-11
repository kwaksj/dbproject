<?php

$con = mysqli_connect('localhost', 'kbstar01', 'kwak1234');
if(!$con) {
	die('could not connect:'.mysqli_error($con));
}

mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");

mysqli_select_db($con, "kbstar01_db");

$orderid = $_GET['orderid'];
$custid = $_GET['custid'];
$bookid = $_GET['bookid'];
$saleprice = $_GET['saleprice'];
$orderdate = $_GET['orderdate'];

echo "<pre>"; print_r($_GET); echo "</pre>";

$sql = "select * from Orders";
echo "$sql";

$result = mysqli_query($con, $sql);

echo "<table border=\"3\">";
echo "<tr><td><H2>Orderid</H2></td>
<td><H2>Custid</H2></td>
<td><H2>Bookid</H2></td>
<td><H2>Saleprice</H2></td>
<td><H2>Orderdate</H2></td></tr>";

while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td><H3> ".$row["orderid"]."</H3></td>
		<td><H3>".$row["custid"]."</H3></td>
		<td><H3>".$row["bookid"]."</H3></td>
		<td><H3>".$row["saleprice"]."</H3></td>
		<td><H3>".$row["orderdate"]."</H3></td>
		</tr>";
}

echo "</table>";

mysqli_close($con);

?>
