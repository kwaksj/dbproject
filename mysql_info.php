<?php
require 'vars.php';

$con = mysqli_connect ($host, $name, $passwd, $db);

mysqli_set_charset($con, 'utf8');

if(mysqli_connect_errno()) {
	        echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$sql0 = "DROP TABLE IF EXISTS kb_book";
mysqli_query($con, $sql0);

$sql1 = "CREATE TABLE IF NOT EXISTS kb_book LIKE Book";
if (mysqli_query ($con, $sql1)) {
	        echo "Query-1 successfullly completed <BR>";
} else {
	        echo "What's wrong with CREATE statement <BR>";
}

echo mysqli_info($con);
echo "<BR><BR>";

$sql2 = "INSERT INTO kb_book SELECT * FROM Book";
if (mysqli_query ($con, $sql2)) {
	        echo "Query-2 successfullly completed <BR>";
} else {
	        echo "What's wrong with INSERT statement <BR>";
}

echo mysqli_info($con);

mysqli_close($con);
?>
