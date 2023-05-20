<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $Products=Product::all();
        return view('home.index',compact('Products'));
    }
}
