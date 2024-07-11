<?php

$num = 8;

function is_prime($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

if (is_prime($num)) {
    echo "$num is prime";
} else {
    echo "$num is not prime";
}
/////////////////////////////////////////////////
echo "<hr>";
function reverseString($str) {
    return strrev($str);
}

echo reverseString("nsreen naeem");

//////////////////////////////////////////////////
echo "<hr>";


$string = "orange Academy";

if ($string === strtolower($string)) {
    echo "Your String is Ok";
} else {
    echo "Your String isnt ok";
}

//////////////////////////////////////////////////////
echo "<hr>";

$x = 12;
$y = 10;
list($x, $y) = array($y, $x);
print_r([$x, $y]);

/////////////////////////////////////////////////////

// $array=array(1,2,2,5,6,6,7,4);

// if ($array === ($chick) ){
//     array_unique($chick);
//     else{
//         print_r($chick)
//     }

// }
echo "<hr>"; 

$array = array(1, 2, 2, 5, 6, 6, 7, 4);

if (count($array) !== count(array_unique($array))) {
   
    $array = array_unique($array);
} 

print_r($array);

/////////////////////////////////////////////     task 6/7    x 

?>








































