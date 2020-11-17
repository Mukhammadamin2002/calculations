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
 ?> 