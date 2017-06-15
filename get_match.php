<?php 

function get_match($name1,$name2)
 	{
 		$name1_array = str_split(strtolower($name1));
 		$name2_array = str_split(strtolower($name2));
 		$count = 0;

	 	for ($i=0; $i < count($name1_array) ; $i++) {
	 		$has_match = 'false';
	 		for ($j=0; $j < count($name2_array) ; $j++) { 
	 			if ($name1_array[$i] == $name2_array[$j]) {
	 				$has_match = 'true';
	 			} 
	 		}
	 		if ($has_match == 'false') {
	 			$count++;
	 		}
	 	}
	 	return $count;
 	}

 ?>