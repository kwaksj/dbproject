<?php

$con = mysqli_connect('localhost', 'kbstar01', 'kwak1234');
if(!$con) {
	die('could not connect:'.mysqli_error($con));
}

mysqli_select_db($con, "kbstar01_db");

$id = $_GET['bookid'];
$price = $_GET['price'];
$name = $_GET['bookname'];
$publisher = $_GET['publisher'];

echo "<pre>"; print_r($_GET); echo "</pre>";

//$sql = "select * from Book where bookid=$id or price >= $price";
$sql = "select * from Book";
echo "$sql";

$result = mysqli_query($con, $sql);

echo "<table border=\"2\">";
echo "<tr><td><H2>Book ID</H2></td><td><H2>Book Price</H2></td></tr>";

while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td><H3> ".$row["bookid"]."</H3></td><td><H3>".$row['price']."</H3></td></tr>";
}

echo "</table>";

mysqli_close($con);

?>
