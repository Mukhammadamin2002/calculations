<?php 
$string = "1) Coding is fun";
echo  strtoupper($string) . "<br>";

$string = "b) Coding is fun";
echo  strtolower($string) . "<br>";

$name = "c) Coding is fun";
echo ucfirst($name) . "<br>";

$name = "d) Coding is fun";
echo ucwords($name) . "<br>";

echo "2) ";
$num = '082307';
echo substr(chunk_split($num, 2, ':'), 0, -1) . "<br>";

echo "3) ";
$str1 = 'The quick brown fox jumps over the lazy dog.' . "<br>";
if (strpos( $str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }

echo "<br>";

echo "4) ";

$x = 14;

if ($x === '14') {
	echo "They are the same"."\n";
}
else
{
    echo "They are not same"."\n";
}
echo "<br>";

echo "5) ";
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"

 ?>

