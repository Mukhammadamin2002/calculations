<?php 
echo "1 Answer". "<br>";
echo "<pre>";
$a = array(0, 1, 2, 3, 4);
echo $a[3];
echo "<br>";

// 2
echo "2 Answer". "<br>";
echo "<pre>";
$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo $a["three"];
echo "<br>";
// 3
echo "3 Answer";
$a = array(
    array(
        0,
        4,
        array(
       10,
       18,
       array(
       4,
       )
     )   
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo "<pre>";
print_r ($a [1][1][0]);
echo "<br>";
echo "<br>";
//4 Question
echo "4 Answer";
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b" => array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo "<pre>";
print_r ($a["b"]["o"]["b"]);
echo "<pre>";
echo "<br>";
// 5
echo "5 Answer";
echo "<pre>";
$a = "a,b,c,d,e,f";
print_r(explode(",", $a));
echo "<pre>"; 
echo "<br>";                           

//6
echo "6 Answer";
$key = ["a", "b", "c", "d", "e"];
$value = ["a", "b", "c", "d", "e"];
$whole = array_combine($key, $value);
echo "<pre>";
print_r($whole);
echo "</pre>";
echo "<br>";
//7
echo "7 Answer";
echo "<br>";
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

echo "<pre>";
print_r($keysWithValues = array_combine(array_keys($keys), array_values($values)));
echo "</pre>";
echo "<br>";

#8 
echo "8 Anwer";
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);
$transactions = array_map( function( $transaction ) {
    $transaction ["amount"] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
    return $transaction;
}, $transactions );
echo "<pre>";
print_r($transactions);
echo "</pre>";
//9
echo "9 Answer";
$a = array( 0, 1, 2, 3, 4, 5, 6 );
echo array_reduce($a, fn($ww, $item) => $ww + $item );

?>