<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apppost;
use App\Models\Happpost;
use App\Models\Footer;
class ApppostController extends Controller
{
    public function index()
    {
        return view('app_page', [
            "app_page" => Apppost::all(),
            "apppage" => Happpost::all(),
            "footers" => Footer::all()

        ]);
    }
}
