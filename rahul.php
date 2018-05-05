<?php

  
 
   $str = "rahjul";
   $str1 = "Raj";
   
    $s1 = str_split($str);
    $s2 = str_split($str1);

	    $c1 =    count($s1);
	    $c2 =    count($s2);
		$j = 0;
		$arr = array();
		
		 for($i = 0; $i <= $c1-1; $i++ ){
			 
			  $arr[$j] = $str[$i];
			 
			 $j++;
		 }

		//  print_r($arr);

          for($k = 0; $k <= $c2-1; $k++){
			  
			    
               $arr[$j] = $str1[$k];

			     $j++;
			  
		  }
		 //   print_r($arr); 


			echo  implode("",$arr);


?>