<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function show()
    {
        $MyNumber = '1234';
        return view('front.mainpage')->with('MyNumber',$MyNumber);
    }
}
