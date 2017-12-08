<?php
require("/home/ubuntu/workspace/data_structures/Stack.php");

$stack = new Stack();
$stack->push("hello");
$stack->push("wow");
$stack->push("great");

echo "length:".$stack->length();
echo "\r\n";
echo $stack->peek();
echo "\r\n";

$popped = $stack->pop();
echo "The popped element is: ".$popped;
echo "\r\n";
echo $stack->peek();
echo "\r\n";

$stack->push("awesome");
echo $stack->peek();
echo "\r\n";

$stack->clear();
echo "length:".$stack->length();
echo "\r\n";

echo $stack->peek();
echo "\r\n";
$stack->push("awesome");
echo $stack->peek();
echo "\r\n";
?>