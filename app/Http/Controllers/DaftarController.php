<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
 
class DaftarController extends Controller
{
    public function index() {
        return view('login.register', [
            "title" => "Halaman Pendaftaran",
        ]);
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'lokasi' => 'required|max:128',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
    
        return redirect('/login')->with('success', 'Pendaftaran Berhasil, mohon Login');


    }
}
