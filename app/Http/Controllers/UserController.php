<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $apiUrl = config("api.api_url");
        $endpoint = $apiUrl."/api/product-new/get";
        $response = Http::get($endpoint);
        $productLatest = $response->object()->data;

        $endpoint = $apiUrl."/api/product/get";
        $response = Http::get($endpoint);
        $products = $response->object()->data;

        return view('homepage', \compact("products", "productLatest"));
    }
}
