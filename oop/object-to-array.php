<?php

function object_to_array($object) {
    if(is_object($object)) {
        $object = get_object_vars($object);
    }if(is_array($object)) {
        return array_map(__FUNCTION__, $object);
    }else {
        return $object;
    }
}

$test = new stdClass;
$test->A = 'Test A';
$test->B = 'SEKARAN AKU UDAH MAKAN';
$test->C = new stdClass;
$test->C->CA = "test CA";
$test->C->CB = new stdClass;
$test->C->CB->CBA = "Test CBA";
$test->D = 'Test D';


$array_test = object_to_array($test);
echo $array_test['A'];

?>