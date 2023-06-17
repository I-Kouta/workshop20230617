<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    //
    public function index(){
        $books = Book::get();
        return view("books.index", compact("books"));
    }
}
