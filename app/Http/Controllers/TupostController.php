<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tupost;

class TupostController extends Controller
{
    public function index()
    {
        return view('tu_page', [
            "title" => "test",
            "tu_page" => Tupost::all()
        ]); 
    }
}
