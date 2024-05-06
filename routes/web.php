<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        [
            "id" => "1",
            "lokasi" => "Sungai Ciliwung",
            "slug" => "sungai-ciliwung",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid",
            
        ],

        [
            "id" => "2",
            "lokasi" => "Sungai Citarum",
            "slug" => "sungai-citarum",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid",
           
        ],
        [
            "id" => "3",
            "lokasi" => "Sungai Cisadane",
            "slug" => "sungai-cisadane",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid",
           
        ],
       
    ];
   
    return view('index', [
        "posts" => $data,
    ]);
});


Route::get('/detail/sungai-ciliwung', function() {
    $data = [
        
            "lokasi" => "Sungai Ciliwung",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid",
            "deskripsi" => "Sungai dengan kondisi ketinggain AMAN",
            "air" => "12 Meter",
            "tanggal" => "12 mei 2024",
        
    ];

    return view('detail', [
        "posts" => $data,
    ]);
});


Route::get('/detail/sungai-citarum', function() {
    $data = [

      
            "lokasi" => "Sungai Citarum",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid",
            "deskripsi" => "Sungai dengan kondisi ketinggain AMAN",
            "air" => "10 Meter",
            "tanggal" => "12 mei 2024",
        
  
       
    ];

    return view('detail', [
        "posts" => $data,
    ]);
});


Route::get('/detail/sungai-cisadane', function() {
    $data = [
        
            "lokasi" => "Sungai Cisadane",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid",
            "deskripsi" => "Sungai dengan kondisi ketinggain AMAN",
            "air" => "8 Meter",
            "tanggal" => "12 mei 2024",
        
       
    ];

    return view('detail', [
        "posts" => $data,
    ]);
});



Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);


Route::get('/login', [LoginController::class, 'index']);

Route::get('/bacaair', [SensorController::class, 'bacaair']);

Route::get('/bacaberat', [SensorController::class, 'bacaberat']);

// route untuk menyimpan nilai sensor ke tb_sensor
Route::get('/simpan/{nilaiair}/{nilaiberat}', [SensorController::class, 'simpansensor']);
