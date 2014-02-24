<?include("common.php");
logo();
$person_name= $_GET["name"];
?>

<h1> Matches for <?= $person_name?></h1>

<?php
$content = allPeople();
$input = returnPerson($content);

//returns array of potential dates

function allPeople(){
	return file("single.txt", FILE_IGNORE_NEW_LINES);	
}
 
function returnPerson($content){
	global $person_name;
	
	foreach($content as $profile){
		$profile = explode(',', $profile);
		if($person_name == $profile[0]){
			//Person Exists
			return True;
			$person_name = $profile; //why isn't this updating the variable
			echo gettype($profile);
			echo $person_name[1];
		} else{
			continue;
			
		}
	} 
}

function matching($person_name,$input){
	global $content;
	if(returnPerson($content) == True){
		echo "This person already exists";
	}else{
		for($i=0;$i < count($content); $i++){
			$score = check($input,$content[$i]);
			if($score < 2){
				continue;
			} else{
				$match = implode(' , ', explode(',', $content[$i]));
			?>
			<div>
			<h1> You have been matched with: <?= $match ?> </h1>
			</div>
			<?php
			}
		}
	}
}
	



function check($input, $content){
	global $person_name;
	$string = explode(',', $content);
	$score = 0;
	$seekM = "M";
	$seekF = "F";
	$seek = '';
	//user name
	$u_name = $person_name;
	//user age range
	$userAge = (int)$person[2];
	$userMin = (int)$person[6];
	$userMax = (int)$person[7];
	//potential match age range
	$appAge = (int)$string[2];
	$appMin = (int)$string[6];
	$appMax = (int)$string[7];
	//user os
	$u_os = $person[4];
	//potential match os
	$p_os = $string[4];
	
	
//0 name,1 gender, 2 age, 3 type, 4 os, 5 seekgender, 6 minage, 7 maxage

	if ($person[1] == "M"){
		$seek = "F";
	} else{
		$seek = "M";
	}
	
if(($seek=="M") &&($content[1]=="M") || ($seek=="F") && ($content[1]=="F")){
	return $score;
}



//test for age range	
if(($userMin >= $appMin) && ($userMax >= $appMax)){
	$score++;
}

//test for os

if($u_os == $p_os){
	$score++;
	
return $score;
}
}



//echo gettype($content[53]); "\n";
//echo(substr($content[53], 0,9));
//print_r($content);
//echo array_slice($content[53],0,1);

matching($person_name,$input);

footer();
?>