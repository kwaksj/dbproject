<html>
<head>
<style>
    span {color:red;font-size:20px;}
</style>
</head>
<body>

	<h2>PHP Form Validation Example</h2>
	<p><span>* required field</span></p>
	<form method = "post" action ="/~kbstar01/a.php" accept-charset="utf-8">
	Name : <input type = "text" name = "name"> <span>* </span>
	<br><br>
	E-mail : <input type = "text" name = "email"> <span>* </span>
	<br><br>
	Website : <input type = "text" name = "website"> <span> </span>
	<br><br>
	Comment: <textarea name = "comment" rows = "5" cols = "40"></textarea><br><br>
	Gender : 
	<input type = "radio" name = "gender" value="female">Female
	<input type = "radio" name = "gender" value="male">Male
	<input type = "radio" name = "gender" value="other">Other
	<span>* </span><br><br>
	<input type = "submit" name = "submit" value = "Submit">
	</form>

	<h2>Your Input:</h2><br><br><br><br>
</body>
</html>

