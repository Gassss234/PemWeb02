<?php
// membuat array assosiatif
$profileArray = [
    "nama" => "Arbitio Bagas Utomo", 
    "kelas" => "SI14"
];

// print_r ($profileArray);

$profileMultiArray = [
    [
        'nama' => 'Siti',
        'kelas' => 'XTKJ2'
    ], [
         'nama' => 'Sri',
         'kelas' => 'XITKJR3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPL3'
    ]
];


foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
}
