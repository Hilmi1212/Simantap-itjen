<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditorpost;
use App\Models\Footer;
use App\Models\Hauditorpost;

class AuditorpostController extends Controller
{
    public function index()
    {
        return view('auditor_page', [
            "title" => "tesft",
            "auditor_page" => Auditorpost::all(),
            "hauditor" => Hauditorpost::all(),
            "footers" => Footer::all()

        ]);
    }
}
