<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apppost;

class ApppostController extends Controller
{
    public function index()
    {
        return view('app_page',[
            "title" => "tesftss",
            "app_page" => Apppost::all()
        ]);
    }
}
