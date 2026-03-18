<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $name = 'zuhair';
        // $email = 'ahmadzuher004@gmail.com';
        $data = [
            'title' => 'Prodi SI UNJA',
            'name' => 'zuhair',
            'email' => 'ahmadzuher004@gmail.com'
        ];
        return view('home', compact('data'));
    }
}
