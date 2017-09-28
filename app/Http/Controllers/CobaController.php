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

    public function named()
    {
      return view('named');
    }

    public function buku($gaspol)
    {
      return $gaspol;
    }

    public function rak()
    {
      return view('named');
    }
}
