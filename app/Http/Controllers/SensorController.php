<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorController extends Controller
{
    public function bacaair()
    {
        $sensor = MSensor::select('*')->get();
        // kirim ketampilan baca suhu (bua vie bacasuhu)
        return view('sensor/bacaair', ['nilaisensor' => $sensor]);
    }

    public function bacaberat()
    {
        $sensor = MSensor::select('*')->get();
        // kirim ketampilan baca suhu (bua vie bacasuhu)
        return view('sensor/bacaberat', ['nilaisensor' => $sensor]);
    }

    public function simpanSensor(){
        $msensors = MSensor::all(); // Mendapatkan semua objek MSensor

        // Loop melalui setiap objek dan tambahkan nilai dengan urutan sesuai id
        foreach ($msensors as $key => $msensor) {
            $msensor->air += request()->nilaiair;
            $msensor->berat += request()->nilaiberat;
            $msensor->save();
        }
        
    }
}
