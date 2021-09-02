<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class Sayfacek extends Controller
{
    public function listele(){

        $books=Book::all();
        return view("welcome",compact('books'));
     
     
        }
}
