	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form</title>
</head>
<body>
	<form method="post" action="handler.php">

		<p>What is your name?</p>
		<input type="text" name="userName">

		<p>Your favorite color?
			<input type="radio" name="favoriteColor" value="r"/> Red
			<input type="radio" name="favoriteColor" value="g"/> Green
			<input type="radio" name="favoriteColor" value="b"/> Blue 
		</p>
		<input type="submit" value="Submit" />
	</form>

	<form method="post" action="login.php">
		<p>Username: <input type="text" name="username2"></p>
		<p>Password: <input type="text" name="password"></p>
		<p><input type="submit" value="Let me in"></p>
	</form>
	<?php

	echo "<h1>file: index.php</h1>";
	echo "<p>Last time edited: ".date("r", filemtime("index.php"))."</p>";
	echo "<p>Last time was open". date("r", fileatime("index.php"))."</p>";
	echo "<p>File size:".filesize("index.php")." bite</p>";
	?>
</body>
</html>