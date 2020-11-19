<?php

$mahasiswa = [
    'title' => "Mahasiswa",
    [
        [
            "nama" => "Sandikha Galih",
            "nrp" => "043040023",
            "email" => "sandikagalih@unpas.ac.id",
        ],
        [
            "nama" => "Deni RUdini",
            "nrp" => "183040041",
            "email" => "Rudini.183040041@unpas.ac.id",
        ]
    ]
];

$data = json_encode($mahasiswa);
echo $data;
