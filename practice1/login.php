<?php
	if($_POST["username2"] == "php" && $_POST["password"] == "php") {
		session_start();
		$_SESSION["Login"] = "YES";
		echo "<h1>You logged in correctly</h1>";
		echo "<a href='index.php'>Link to secure document</a>";
	} else {
		session_start();
		$_SESSION["Login"] = "NO";
			echo "<h1>You logged no correctly</h1>";
	}

	$f = fopen("document.txt", "r");
	// echo fgets($f);
	// fclose($f);

	while(!feof($f)){
		echo fgets($f)."<br/>";
	}
	fclose($f);

	$l = fopen("links.txt", "r");
	while(!feof($l)) {
		$arrM = explode(",", fgets($l));

		echo "<li><a href='http://" . $arrM[1] . "'>" . $arrM[0] . "</a></li>";
	}

	fclose($l);
?>