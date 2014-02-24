<?php
include("common.php");
logo();
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
	
	<form action="signup-submit.php" method="post">
		<fieldset class="column">
			<legend> New User Signup: </legend>
		
			<label class="heading" for="name"> 	Name: </label>
			<input type="text" name="name" size="9"/>	</label><br/>
			Gender:
			<label for="male">Male</label>
			<input type="radio" id="male" name="gender" value="M">
			<label for="female">Female</label>
			<input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender =="F")?> value="F"> 
			<br/>
			<label class="heading" for="age"> Age: </label>
			<input type="text" name="age" size="5" /><br/>
			
			
			<label class="heading" for="personality"> Personality type: </label>
			<input type="text" name="personality" size="5" /><a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a><br/>
			Favorite OS:
			<label><select name="os">
					<option name="os" value="Linux">Linux </option>
					<option name="os" <?php if(isset($os) && $os=="Windows") ?> value="Windows">Windows </option>
					<option name="os" <?php if(isset($os) && $os=="Mac OS") ?>value="Mac OS">Apple OS </option>
				</select>
			</label><br/>
			Seeking age:
			<label ><input type="text" name="age1" <!--value="age1" --> to <input type="text" name="age2" <!--value="age2" --></label><br/>
			<input type="submit" value="Sign Up" />
			
		</fieldset>
	</form>
		
		<?php
		footer();
		?>
		</body>
		
</html>
			
			
			
			
			
			
			
			
			
			
			