<?php
include("common.php");
logo();
?>

<form action="matches-submit2.php" method="GET">
	<fieldset class ="column"> 
	<legend> Returning User: </legend> 
	<label for="user_name"> Name </label>
	<input type="text" id="user_name" name="name" size="16"/>
	<input type="submit" value="View My Matches!">
	
	</fieldset>

<?php
footer();
?>