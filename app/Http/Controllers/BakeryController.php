<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BakeryController extends Controller
{
    public function index(){
        return view('bakery.index');
    }

    public function bakery_request(){
        $base_url = 'https://api.gnavi.co.jp/RestSearchAPI/v3/';
        $response = Http::get($base_url, [
            'keyid' =>  config('app.key_id'),
            'pref'  =>  'PREF23',
        ]);

        return $response->json();
    }
}
