<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function index1()
    {
        return view('dashboard.index');
    }
    public function index()
    {
        return view('HalamanDepan.beranda');
    }


}
