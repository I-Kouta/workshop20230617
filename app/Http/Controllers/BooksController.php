<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    //
    public function index(){
        $books = Book::with("author")->get();
        return view("books.index", compact("books"));
    }

    public function createForm(){
        return view("books.createForm");
    }

    public function create(Request $request){
        dd($request);
        return redirect("/index");
    }
}
