<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function showCity(){
        $countries =  Country::with(['cities' => function($order){
            $order->orderBy('population', 'asc');
        }])->get();

        return view('City', ['countries' => $countries]);
    }
}
