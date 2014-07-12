<html>
<title> ASSIGNMENT 03 </title>
<?php

$ar1=array("Raja","80","80","80");
 $ar2= array("Rani","70","70","70");
 $sum=0;
 
 $sum1=0;
 foreach($ar1 as $val)
 $sum+=$val;
  foreach($ar2 as $val1)
 $sum1+=$val1;
 
 $a = urlencode($sum);
 $b = urlencode($sum1);
		$base_url = rawurlencode("2.php");
 echo "<a href=\"{$base_url}?name1={$a}&name2={$b}\">Click Here</a>";
 
 
?>


</html>
