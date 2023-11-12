<?php
function array_to_object($array) {
    if(is_array($array)) {
        return (object)     // Jika ya, gunakan array_map untuk menerapkan fungsi ini (rekursi) pada setiap elemen dalam array
        array_map(__FUNCTION__, $array);
    }else {
        return $array;      //Jika $array bukan array, kembalikan nilainya tanpa perubahan
    }
}

$test = array(
    'A' => "test A",
    'B' => "test B",
    'C' => array(
        'CA'    => 'Test CA',
        'CB'    => array(
            'CBA'   =>  'Test CBA'
        )
    ),
    'D' => 'Test D'
);

$object_test = array_to_object($test);
var_dump($object_test);

echo $object_test->A;
?>