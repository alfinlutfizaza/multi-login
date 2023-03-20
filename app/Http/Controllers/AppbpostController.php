<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appbpost;

class AppbpostController extends Controller
{
    public function index()
    {
        return view('app_page',[
            "title" => "tesftss",
            "app_page" => Appbpost::all()
        ]);
    }
}
