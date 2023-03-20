<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditorpost;

class AuditorpostController extends Controller
{
    public function index()
    {
        return view('auditor_page',[
            "title" => "tesft",
            "auditor_page" => Auditorpost::all()
        ]);
    }
}
