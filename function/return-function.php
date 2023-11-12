<?php
function sum(int $first, int $second): int
{
$total = $first + $second;
return $total;
}


$result = sum(10, 10);
var_dump($result);
$result = sum(100, 100);
var_dump($result)
?>