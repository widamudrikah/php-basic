<?php
function idn() {
    echo "ini function idn";
};

function jonggol() {
    echo "ini function jonggol";
};

$pemanggil_function = "idn";
$pemanggil_function(jonggol());
// harus ada tanda kurungnya
?>