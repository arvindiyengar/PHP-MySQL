<html>
<head>

<title> ASSINGNMENT 02 </title>
</head>
<body>
<p> Taking Initial values as 20 and 10 , Sum=30 Diff=10 Mul=300 Div =3 <p>
<?php
$a=20;
$b=10;
function muldiv($c,$d)
{
$mul=$c*$d;
$div=$c/$d;
$arry=array($mul,$div);
return $arry;
}
function addsub($a,$b)
{
$add=$a+$b;
$sub=$a-$b;
$ar=array($add,$sub);
return $ar;


//muldiv($add,$sub);
}
$ar1=addsub($a,$b);
$ar2=muldiv($ar1[0],$ar1[1]);

echo "ADD and SUB Values"."<br />";

foreach($ar1 as $value)
echo " {$value} ";

echo "<br />"."MUL and DIV Values"."<br />";
foreach ($ar2 as $val)
echo " {$val} ";


//for


?>
</body>
</html>
 
