<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$data = [
          //  'nama' => 'Verrelian',
           // 'pekerjaan' => 'Consultant IT',
        //];
        //return view('home')->with($data);
        $nama = "yudik";
        $pekerjaan = "Student";
        return view('home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
    //
}
