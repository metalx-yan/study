<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function coba($nama, $nim="a")
    {
        //nim pertama field
        //Mahasiswa::where('nim', '=', '$nim')
        return $nama . " <br> " . $nim;
    }
    public function gaspol($gas)
    {
      return $gas;
    }
    public function named()
    {
      return view('named');
    }

  

    public function rak()
    {
      return view('named');
    }

    public function home()
    {
      return view('compt.home');
    }

    public function about()
    {
      return view('compt.about');
    }

    public function contact()
    {
      return view('compt.contact');
    }
}
