<?php
/*
Kita bisa memanggil variabel pada string yang menggunakan double quote/heredoc.
*/
$name = "Kanaya";
echo "Hai semuanya,".$name." senang beremu kalian\n";  //Non parsing
echo "Hai, namaku $name";  //parsing
echo 'Hai namaku $name';

?>