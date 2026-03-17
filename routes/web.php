<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr/{id}', function ($id) {
    
    $url = "https://fran-asensio.github.io/el-pozo-frontend/#/producto/" . $id;
    return QrCode::size(300)->generate($url);
});