<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('book.index')->with(['books' => $books]);
    }

    public function store(Request $request){
        Book::create([
            'name'=>$request->name,
            'author'=>$request->author,
            'year'=>$request->year
        ]);

        return back();
    }
}
