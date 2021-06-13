<?php  
//$num = 23456;  
$org = 232;
$num = $org;
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;
$num = ($num / 10);   
}  
echo "Reverse number of $org is: $revnum <br>"; 
if($org==$revnum)
    echo"Its a palindrome number<br>";
else
    echo"Its not a palindrome number";

?>