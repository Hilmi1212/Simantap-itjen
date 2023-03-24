<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appbpost;
use App\Models\HAppbpost;
use App\Models\Footer;
class AppbpostController extends Controller
{
    public function index()
    {
        return view('appb_page', [
            "title" => "tesftss",
            "appb_page" => Appbpost::all(),
            "appbpage" => Happbpost::all(),
            "footers" => Footer::all()
        ]);
    }
}
