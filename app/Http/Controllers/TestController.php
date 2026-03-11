<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $num = 19;
        $str = 'Hello';
        $mas = [5, 4, -9, 6];
        return view('second', compact('num','str', 'mas'));
    }
}
