<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appcpost;

class AppcpostController extends Controller
{
    public function index()
    {
        return view('app_page',[
            "title" => "tesftss",
            "app_page" => Appcpost::all()
        ]);
    }
}
