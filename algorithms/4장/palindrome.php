<?php
require("/home/ubuntu/workspace/data_structures/Stack.php");

function isPalindrome($word){
    $stack = new Stack();
    
    for ($i=0; $i < strlen($word); $i++) {
        $stack->push($word[$i]);
    }
    $rword = "";
    while ($stack->length() > 0) { //이거를 생각보다 많이 씀..
        $rword .= $stack->pop();
    }
    if($word == $rword){
        return true;
    }else{
        return false;
    }
}

var_dump(isPalindrome("hello"));

var_dump(isPalindrome("racecar"));

?>