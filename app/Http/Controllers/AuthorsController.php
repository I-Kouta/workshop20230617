<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    public function authorCreate(Request $request){
        // dd($request); // ビューのフォームから送られてきた値を全て含んでいる
        $name = $request->authorName;
        Author::create(['name' => $name]);
        return back();
    }
}
