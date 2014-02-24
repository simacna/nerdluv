<?php
include("common.php");
logo();
$user_name = $_REQUEST["name"];
$sex = 	$_POST["gender"];
$age = $_POST["age"];
$p_type = $_POST["personality"];
$age1 = $_POST["age1"]; 
$age2 = $_POST["age2"];
$user_info = "single.txt";
$OS = $_POST["os"];
$new_user = array($user_name, $sex, $age, $p_type, $OS, $age1, $age2."\n");
$transition_state = explode(", ",implode(",", $new_user));
file_put_contents($user_info, $transition_state, FILE_APPEND);
?>

<!DOCTYPE html>
<html>

	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		<script src="https://webster.cs.washington.edu/js/nerdluv/provided.js" type="text/javascript"></script>
	</head>
	
	<body>
	
	<h1> Thank you! </h1>
	
	<p> Welcome to NerdLuv, <?= $user_name?>! </p>
	<p> Now <a href="matches.php"> log in to see your matches! </a>
	
	
	</body>
	
	<?php
	footer();
	?>