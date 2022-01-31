<?php
	$string=readline(); // Reading input from STDIN
	  $j=0;         			//Starting With 0 to 9
	 while($j<10) 
	 { 
	    $count=0;                   
          for($i=0;$i<strlen($string);$i++)  //Check for Every Element
	  
         { $d=(int)($string[$i]);
             if($j==$d)
               {
				   $count++;             //Increamnet Counter If Same Number Is present
			   }   

		 }
		echo $j." ".$count;// Ouput Of Particular Number Frequency
		echo "\n";    
		$j++;
	 }		   
?>