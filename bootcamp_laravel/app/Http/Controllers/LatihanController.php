<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function showMyName()
    {
        $myname = [
            "name" => "Фикри Ильяса",
            "age" => "20",
            "address" => "Klaten, Indonesia",
            "hobi" => "Mematikan Mic"
        ];

        return view('latihan.myname', ['data' => $myname]);
    }
}