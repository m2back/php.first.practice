<?php
$number = 12;
$factorial = 1;
for ($counter=$number; $counter>1; $counter--)
{
  $factorial *= $counter;
}
echo "$number ! = $factorial<br><br><br><br><br><br>";

$num=407;
$total=0;
$x=$num;
while($x!=0)
{
$rem=$x%10;
$total=$total+$rem*$rem*$rem;
$x=$x/10;
}
if($num==$total)
{
echo "$num is an Armstrong number<br><br><br><br><br><br>";
}
else
{
echo "$num is not an armstrong number<br><br><br><br><br><br>";
}

$felannumber = 8579758;
$p=$felannumber;
$revnum = 0;
while ($felannumber != 0)
{
$revnum = $revnum * 10 + $felannumber % 10;
$felannumber = (int)($felannumber / 10);
}

if($revnum==$p)
{
echo $p," is Palindrome number";
}
else
{
echo $p." is not Palindrome number";
}

?>
