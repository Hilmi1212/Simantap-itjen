<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tupost;
use App\Models\Htupost;
use App\Models\Footer;
class TupostController extends Controller
{
    public function index()
    {
        return view('tu_page', [
            "tupage" => Tupost::all(),
            "htupage" => Htupost::all(),
            "footers" => Footer::all()
        ]);
    }
}

