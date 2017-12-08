<?php
require("/home/ubuntu/workspace/data_structures/Stack.php");

function mulBase($num, $base){
    $stack = new Stack();
    
    do {
       $stack->push($num % $base);
       $num = $num / $base;
       $num = floor($num);
    } while ($num > 0);
    $converted = "";
    $index = $stack->length() - 1;
    while ($stack->length() > 0){
        $converted += $stack->pop()*pow(10, $index--);
    }
    return $converted;
}

$num = 32;
$base = 2;
$newNum = mulBase($num, $base);
echo $num ." converted to base ". $base. " is ". $newNum;

echo "\r\n";
$num = 125;
$base = 8;
$newNum = mulBase($num, $base);
echo $num ." converted to base ". $base. " is ". $newNum;

echo "\r\n";

?>