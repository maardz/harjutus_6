<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h2>Tingimuslaused</h2>
	<?php 
		$a = 4;
		$b = 5;
		if($a < $b){
			echo $a." "." on väiksem kui". " ".$b;
		}
		 echo "<br>";

		$a = 6;
		$b = 5;
		if($a < $b){
			echo $a." "." on väiksem kui". " ".$b;
		}

		 echo "<br>";

		$a = 7;
		$b = 5;
		if ($a < $b ) {
        echo $a." "." on väiksem kui". " ".$b;
    	} 	
    	elseif ($a == $b) {
        echo $a." "."on". " ".$b;
    	} 	
    	elseif ($a> $b) {
        echo $a." "." on suurem kui". " ".$b; 
    	}
    	echo "<br>";

    	$a = 7;
		$b = 7;
		if ($a < $b ) {
        echo $a." "." on väiksem kui". " ".$b;
    	} 	
    	elseif ($a == $b) {
        echo $a." "."on". " ".$b;
    	} 	
    	elseif ($a> $b) {
        echo $a." "." on suurem kui". " ".$b; 
    	}
    	echo "<br>";
    	$a = 8;
		$b = 7;
		if ($a < $b ) {
        echo $a." "." on väiksem kui". " ".$b;
    	} 	
    	elseif ($a == $b) {
        echo $a." "."on". " ".$b;
    	} 	
    	elseif ($a> $b) {
        echo $a." "." on suurem kui". " ".$b; 
    	}
    	echo "<br>";

    	$age = 23;
    	$age_limit = 18;
    	if($age >= $age_limit){
    		echo "Olete piisavalt vana. Tulge edasi!";
    	}

    	else{
    		echo "Kahjuks olete liiga noor. Te peate olema vähemal". " ". $age_limit. " ". "aastat vana. Tulge". " ". $age -$age_limit. " ". "aasta pärast tagas";

    	}

    	echo "<br>";

    	$age = 18;
    	$age_limit = 18;
    	if($age >= $age_limit){
    		echo "Olete piisavalt vana. Tulge edasi!";
    	}

    	else{
    		echo "Kahjuks olete liiga noor. Te peate olema vähemal". " ". $age_limit. " ". "aastat vana. Tulge". " ". $age -$age_limit. " ". "aasta pärast tagas";

    	}

    	echo "<br>";

    	$age = 16;
    	$age_limit = 18;
    	if($age >= $age_limit){
    		echo "Olete piisavalt vana. Tulge edasi!";
    	}

    	else{
    		echo "Kahjuks olete liiga noor. Te peate olema vähemal". " ". $age_limit. " ". "aastat vana. Tulge". " ". ($age_limit - $age) . " ". "aasta pärast tagasi.";

    	}

    	echo "<br>";

    	$var1 = 3;
    	$var2 = 3;
    	$var3 = 4;
    	$var4 = 5;
    	if(($var1 == $var2) && ($var3 > $var4)){
    		echo "esimene ja teine muutuja on võrdsed JA  kolmas muutuja on suurem kui neljas";
    	} # kolmas muutuja ei ole suurem kui nelja seega ei kuvatta seda stringi.

    	elseif(($var1 == $var2) || ($var3 > $var4)){
    		echo "esimene ja teine muutuja on võrdsed või on  kolmas muutuja on suurem kui neljas";
    	}

    	echo "<br>";

    	$nothing;
    	if (isset($nothing)) {
    		echo "nohting on deklareeritud";
    	}

    	elseif (!isset($nothing) == true){
    		echo "nothing ei ole deklareeritud";
    	}

	?>

	<h3>Switch</h3>

	<?php 
		$current_language = "lt";
		switch($current_language){
			case 'et':
			echo "Tere! Kuidas sul läheb?";
			break;
			case 'fi':
			echo "Hei! Miten menee?";
			break;
			case 'ru':
			echo "Здравствуйте! Как вы делаете?";
			break;
			default:
			echo "Hi! How are you doing?";
			break;
		}
	?>

</body>
</html>