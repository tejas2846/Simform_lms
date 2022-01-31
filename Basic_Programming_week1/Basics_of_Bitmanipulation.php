<?php
$a=[];
$t=(int)readline();           // Reading input from STDIN
for($i=0;$i<$t;$i++)
{
$a[$i]=(int)readline();           // Reading input from STDIN

}
function countb($number){
  
   $count=0;
   while($number){
       $count+=($number&1);   //Count Set bit means total 1 present in number 
       $number=$number>>1;
   }
   return $count;
   }
for($i=0;$i<$t;$i++){
echo (countb($a[$i])."\n");//print output
}
?>