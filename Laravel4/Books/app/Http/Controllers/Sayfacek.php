<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Sayfacek extends Controller
{
    public function listele(){

        $products=Product::all();
        return view("welcome",compact('products'));
     
     
        }
}
