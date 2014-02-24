<?include("common.php");
logo();
$user_name= $_GET["name"];

?>

<h1> Matches for <?= $user_name?></h1>

<?php

$content = allPeople();

function allPeople(){
		return file("single.txt", FILE_IGNORE_NEW_LINES);
}



for($i= 0; $i < count($content); $i++){
		if (0 > count($content)){
			continue;
		} 
	 else{
		$string = implode(' , ',explode(',', $content[$i]));
		

?>
<div>
	<?= $user_name?>, you have been matched with <?= $string?>! 
</div>

<?php
}
}
?>
/*
General code for already registered users
function checkExists($name,$content){
	
for ($i=0; $i < count($content); $i++){
	$str = explode(',',$content[$i]);
		if($name == $str[0]) return true;
}
	return false;
	
}

*/


<?php
footer();
?>