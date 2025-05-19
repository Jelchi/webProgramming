<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'about',
        [
            "img" => "WIN_20250430_11_26_32_Pro.jpg",

            "name01" => "Arjuna Ardio",
            "nim01" => "2702364452",
            "email01" => "arjuna@gmail.com",

            "name02" => "Cecilia Oktaviana Simadi",
            "nim02" => "2702364162",
            "email02" => "cecila@gmail.com",

            "name03" => "Irene Setievi",
            "nim03" => "2702363696",
            "email03" => "irene@gmail.com",

            "name04" => "Jelvis Anggono",
            "nim04" => "2702365190",
            "email04" => "jelvisanggono@gmail.com",

            "name05" => "mathew",
            "nim05" => "2702365190",
            "email05" => "jelvisanggono@gmail.com",
        ]
    );
});
