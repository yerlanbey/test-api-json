<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CitiesController extends Controller
{
    function cities()
    {
        $cities =  Http::get("https://namaztimes.kz/ru/api/states?id=99")->body();
        $cities = json_decode($cities);
        return view('cities',compact('cities'));
    }
}
