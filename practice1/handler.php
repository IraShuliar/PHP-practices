<?php
	//echo "<h1>Hello" . $_POST["username"] . "</h1>";
	$strUserName = $_POST["userName"];

	if($strUserName != ""){
		$strHeading = "<h1>Hello " . $_POST["userName"] . "</h1>";
	} else {
		$strHeading = "<h1>Hello stranger</h1>";
	}

	switch($_POST["favoriteColor"]) {
		case "r":
		$strBackgroundColor = "rgb(255, 0, 0)";
		break;

		case "g":
		$strBackgroundColor = "rgb(0, 255, 0)";
		break;

		case "b":
		$strBackgroundColor = "rgb(0, 0, 255)";
		break;

		default:
		$strBackgroundColor = "rgb(255, 255, 255)";
		break;
	}

	$textFile = fopen("document.txt", "a");

	fwrite($textFile, "I like learn PHP, and myself<br>");
	fclose($textFile);

	$textFile = fopen("document.txt", "r");
	while(!feof($textFile)) {
		echo fgets($textFile)."<br/>";
	}
	fclose($textFile);
?>

<html>
	<head>
		<title>Form</title>
	</head>
	<body style="background: <?php echo $strBackgroundColor; ?>;">
		<? echo $strHeading; ?>
	</body>
</html>