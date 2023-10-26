<?php
$nilai = 75;

$grade = ($nilai >= 90) ? 'A' : (
    ($nilai >= 80) ? 'B' : (
        ($nilai >= 70) ? 'C' : 'D'
    )
);

echo "Nilai Anda adalah $nilai, dan Anda mendapat grade $grade.";
?>