<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appcpost;
use App\Models\Happcpost;
use App\Models\Footer;
class AppcpostController extends Controller
{
    public function index()
    {
        return view('appc_page', [
            "title" => "tesftss",
            "app_page" => Appcpost::all(),
            "appcpage" => Happcpost::all(),
            "footers" => Footer::all()
        ]);
    }
}
