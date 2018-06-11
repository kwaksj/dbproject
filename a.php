<html>
<head>
<style>
        span {color:red;font-size:20px;}
</style>
</head>
<body>

	<?php

	$nameErr = $emailErr = $genderErr = $websiteErr = "";	
	$name = $email = $gender = $comment = $website = "";
		
	if ($_SERVER["REQUEST_METHOD"] == "POST" ){
		if (empty ($_POST["name"])) {
		$nameErr = "Name is required";
		} else {
			$name = test_input ($_POST["name"]);			
		}
			if (empty ($_POST["email"])) {	
				$emailErr = "Email is required";
			} else {
				$email = test_input ($_POST["email"]);
			}

			if (empty ($_POST["website"])) {			
				$website = "";
			} else {
				$website = test_input ($_POST["website"]);
			}

			if (empty ($_POST["comment"])) {
				$comment = "";			
			} else {
				$comment = test_input ($_POST["comment"]);
			}
	
			if (empty ($_POST["gender"])) {			
				$genderErr = "Gender is required";
			} else {
				$gender = test_input ($_POST["gender"]);
			}
		}


function test_input($data) {
	$data = trim ($data);
	$data = stripslashes($data);	
	$data = htmlspecialchars($data);
	
	return $data;
}

?>

<?php
echo "<h2>Your Input:</h2>";

if($name == null)
	echo "<span>Name is required.</span>";
else
	echo $name;
echo "<br>";

if($email == null)
	echo "<span>Email is required.</span>";
else
	echo $email;
echo "<br>";

if($website == null)
	echo "<span>Website is required.</span>";
else
	echo $website;
echo "<br>";

echo $comment;
echo "<br>";

if($gender == null)
	echo "<span>Gender is required.</span>";
else
	echo $gender;
?>
</body>
</html>