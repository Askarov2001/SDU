<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class ApiController extends Controller
{
    /*
        This function return that all book rows
    */
    public function index(Request $request){
        $books = Book::all();

        return response($books, 200);
    }

    /*
        Return book with book_id
    */
    public function get_book(Request $request){
        $book = Book::find($request->book_id);

        if($book == null){
            return response(['message' => 'There is no book'], 404);
        }
        return response($book, 200);
    }
}
