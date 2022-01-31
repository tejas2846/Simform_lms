<?php
function issafe(&$arr,$x,$y,$n)    //Check if our current State is Safe or Not ?Is there Any other queen for Attack
{
for($row=0;$row<$x;$row++){

    if($arr[$row][$y]==1){
         return false;

    }
}
$row=$x;
$col=$y;
while($row>=0 && $col>=0)
{
if($arr[$row][$col]==1)
{
    return false;
}
$row--;
$col--;
}

$row=$x;
$col=$y;
while($row>=0 && $col<$n)
{
if($arr[$row][$col]==1)
{
    return false;
}
$row--;
$col++;
}

return true;
}

function nQueen(&$arr,$x,$n) //Place Queen and check State is safe or not 
{
if($x>=$n){

return true;

}
for($col=0;$col<$n;$col++){
    if(issafe($arr,$x,$col,$n))
    {
    $arr[$x][$col]=1;
      if(nQueen($arr,$x+1,$n)){
          return true;
      }
      $arr[$x][$col]=0;
    }
    }
    return false;

}


$n=(int)readline();
$arr=[];
for($i=0;$i<$n;$i++)
{
    for($j=0;$j<$n;$j++)
    {
    $arr[$i][$j]=0;
    }
    
}
if(nQueen($arr,0,$n))
{
    echo "YES\n";  
    for($i=0;$i<$n;$i++)
  {    for($j=0;$j<$n;$j++)
   {
      echo $arr[$i][$j]." ";  //Output
   }
    echo "\n";
  }
   
}
     else
    {
        echo "NO";
    }

?>