<?php

// Union +
$first = [
    "first_name" => "Elina"
    ];
    $last = [
    "first_name" => "Nadia",
    "last_name" => "Hasna"
    ];
    $full = $first + $last;
    // var_dump($full);


// ==================================
// ==================================

$a = ['nama' => 'John'];
$b = ['nama' => 'Jane',
      'usia' => 30];

// Menggabungkan array $a dan $b menggunakan operator +
$gabung = $a + $b;
print_r($gabung); // Output: Array ( [nama] => John [usia] => 30 )

// Operator == (Equality) - True jika $a dan $b memiliki key-value yang sama
if ($a == $b) {
    echo "Array \$a sama dengan array \$b\n";
} else {
    echo "Array \$a tidak sama dengan array \$b\n";
}

// Operator === (Identity) - True jika $a dan $b memiliki key-value yang sama dan posisi yang sama
if ($a === $b) {
    echo "Array \$a identik dengan array \$b\n";
} else {
    echo "Array \$a tidak identik dengan array \$b\n";
}

// Operator != (Inequality) - True jika $a dan $b tidak sama
if ($a != $b) {
    echo "Array \$a tidak sama dengan array \$b\n";
} else {
    echo "Array \$a sama dengan array \$b\n";
}

// Operator <> (Inequality) - True jika $a dan $b tidak sama
if ($a <> $b) {
    echo "Array \$a tidak sama dengan array \$b\n";
} else {
    echo "Array \$a sama dengan array \$b\n";
}

// Operator !== (Nonidentity) - True jika $a dan $b tidak identik
if ($a !== $b) {
    echo "Array \$a tidak identik dengan array \$b\n";
} else {
    echo "Array \$a identik dengan array \$b\n";
}

?>