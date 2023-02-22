<?php
$arrayBuah = ["Mangga","Jeruk","Melon","Apel","Sirsak"];

// mengurutkan value dari array (dari a-z)
sort($arrayBuah);

// menghapus value array paling akhir
array_pop($arrayBuah);
 
// menghapus spesifik value dari array
unset($arrayBuah[3]);

// menambahkan value array paling belakang/akhir
array_push($arrayBuah, "Durian");

// menghapus value yang paling depan
array_shift($arrayBuah);

// menambahkan value array paling depan
array_unshift($arrayBuah, "Buah Naga");

// mengubah value array tertentu
$arrayBuah[2] = "Pisang";

// fungsi as buat lebih spesifik
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}