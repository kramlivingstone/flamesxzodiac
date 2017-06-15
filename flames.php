<?php 
if (isset($_POST['submit'])) {

	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	
 		if (ctype_alpha(str_replace(' ', '',$name1)) && ctype_alpha(str_replace(' ','',$name2))) {
 			echo ucfirst($name1) . ' & ' . ucfirst($name2) . " = " . ' ';
 			require_once 'get_match.php';

		 	if (function_exists('get_match'))
		 	{
			 	$final_count = get_match($name1,$name2) + get_match($name2,$name1);
				$flames = str_split(strtolower("flames"));

				if($final_count % 6 - 1 >= 0)
			 	{
			 		$flame = $flames[($final_count % 6) - 1];
			 		if ( $flame == 'f')
			 			echo "<strong>Friends</strong>";
			 		elseif ($flame == 'l') 
			 			echo "<strong>Love</strong>";
			 		elseif ($flame == 'a') 
			 			echo "<strong>Anger</strong>";
			 		elseif ($flame == 'm') 
			 			echo "<strong>Married</strong>";
			 		elseif ($flame == 'e') 
			 			echo "<strong>Engaged</strong>";
			 		elseif ($flame == 's') 
			 			echo "<strong>Soulmate</strong>";
			 	} else {
			 		echo "<strong>Forever Alone</strong>";
			 	}
		 	}

 		} else {
 			echo ucfirst($name1) . " or " . ucfirst($name2) . " does not consists of all letters, Please try again.";
 		}

}
?>