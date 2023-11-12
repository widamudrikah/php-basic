<?php
// Non recrusife function
class Faktorial {
    public static function nonRecursive(int $number){
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
    }

// Recrusive
public static function recursive(int $n){
    if ($n == 0) {
    return 1; //faktorial dari 0 adalah satu
    }
    return $n * self::recursive($n - 1);
    }
}

echo Faktorial::nonRecursive(3);
echo PHP_EOL;
echo Faktorial::nonRecursive(3);
?>