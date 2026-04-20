<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CrudController extends Controller
{
    public function tambah(){
        return view('tambah');
    }

    public function proses_tambah(Request $request){

        // VALIDASI
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        // SIMPAN DATA
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('123456') // default password
        ]);

        return redirect('/tambah')->with('success', 'Data berhasil ditambahkan');

        
    }
    public function baca(){
        $data = User::all(); // ambil semua data
        return view('baca', compact('data'));
    }
}