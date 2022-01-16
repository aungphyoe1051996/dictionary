<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestedWordController extends Controller
{
    public function create()
    {
        return view('frontend.suggest_word.create');
    }

    public function store (Request $request)
    {
        dd("hello from store");
    }
    
}
