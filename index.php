<?php
include_once "Stack.php";
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$stack = new Stack();
while (!empty($array)) {
    $stack->push(array_shift($array));
}

while (!$stack->isEmpty()) {
    array_push($array, $stack->pop());
}

foreach ($array as $element) {
    echo $element . " ";
}
