<?php
	include("common.php");
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
	
		<?php
			logo();
		?>

		<div>
			<h1>Welcome!</h1>

			<ul>
				<li>
					<a href="signup.php">
						<!--<img src="https://webster.cs.washington.edu/images/nerdluv/signup.gif" alt="icon" /> -->
						Sign up for a new account
					</a>
				</li>

				<li>
					<a href="matches.php">
					<!--	<img src="https://webster.cs.washington.edu/images/nerdluv/heartbig.gif" alt="icon" />  -->
						Check your matches
					</a>
				</li>
			</ul>
		</div>

		<?php
		footer();
		?>
	</body>
</html>
