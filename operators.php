<?php  
    #1Sum of digits
    $num = 23;
    $sum = 0; $rem = 0;
      for ($i = 0; $i <= strlen($num); $i++) {
      	$rem = $num%10;
      	$sum = $sum + $rem;
      	$num = $num/10;
      }
       echo "1) a] ";
       echo "Sum of 23 digits is $sum <br>";
    


    $num = 624;
    $sum = 0; $rem = 0;
      for ($i = 0; $i <= strlen($num); $i++) {
      	$rem = $num%10;
      	$sum = $sum + $rem;
      	$num = $num/10;
      }
       echo "1) b] ";
       echo "Sum of 614 digits is $sum <br>";


       echo "<br>";

    #Even odd numbers
    $value = 43765690;
       echo "2)";
       if($value%2) {
        echo "$value is odd<br>";
       }  else {
        echo "$value is even<br>";
       }
   
       echo "<br>";
   
    #Primary and not
    echo "3) ";
    function check_prime($num) {

   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num / 2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
   }
   $num = 37;
   $sum = check_prime($num);
   if ($sum == 1)
      echo "$num is a prime number" ;
   else
      echo "$num is a non-prime number ";
   

   echo "<br>";
    #Table of number
   echo "<br>";
     echo "4)";
     for ($x = 2; $x <=20; $x +=2)  {
      echo "The number is $x <br>";
     }
      
     echo "<br>";



     for ($y = 5; $y < 51; $y += 5)  {
      echo "It is $y <br>";
     } 

     echo "<br>";



     #Factorials
     function getFactorial($value)  {
     	$result = 1;

     	for ($i = 2; $i <= $value; $i++) {
     		$result = $result * $i;
       }
  
     return $result; }
    echo "5)";
     echo "Factorial is " . getFactorial(23);
     echo "<br>";

     #Second Part of hometask 

  //Armstrong Number
$num = 407;  
$total = 0;  
$x=$num;  
while($x != 0)  
{  
$rem = $x % 10;  
$total = $total + $rem * $rem * $rem;  
$x = $x / 10;  
}  
if($num == $total)  
{  
echo "$num is Armstrong number";  
}  
else  
{  
echo "$num is Not an armstrong number";  
}  
echo "<br>";
echo "<br>";
#Palindrome 
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number / 10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input == $num) {  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
echo "<br>";
#Fibonacci

$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "Fibonacci numbers";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 10 )   
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; } 

    echo "<br>";

  //Reverse Number 
    $num = 456;
    $revnum = 0;
    while ($num > 1) {
      $rem = $num % 10;
      $revnum = ($revnum * 10) + $rem;
      $num = ($num / 10);
    }
     echo "Reverse number of $num is: $revnum";

    echo "<br>";

  $name = "Hello";
  echo strrev("$name");
 
  echo "<br>";

  $name1 = "dlrow";
  echo strrev("$name1");
 ?> 