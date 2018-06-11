<?php
require 'vars.php';

$con = mysqli_connect ($host, $name, $passwd);

if(mysqli_connect_errno()) {
	    echo "Failed to connect to MySQL : ".mysqli_connect_error();
}

mysqli_set_charset($con, "utf8");

if (!mysqli_select_db ($con, "kbstar01_db")) {
	   echo "Something wrong with database selection".mysqli_error();
} else {
	   echo "Database selected successfully <BR><BR>";
}

$sql = "SELECT * FROM Book";

echo ("<table width = 800 border = 1 cellpadding = 10>");

if ($result = mysqli_query($con, $sql)) {
	$a = mysqli_num_fields ($result);
	echo ("<tr>");
	
	while ($fieldinfo = mysqli_fetch_field($result)) {
		echo("<th>$fieldinfo->name</th>");	
	}

	echo ("</tr>");

	while ($row = mysqli_fetch_row($result)) {
		echo("<tr>");
		
		for ($i = 0 ; $i < $a ; $i++) {
			echo ("<td>$row[$i]</td>");	
		}
		echo "</tr>";		
	}
}

mysqli_free_result ($result);
mysqli_close ($con);
?>
