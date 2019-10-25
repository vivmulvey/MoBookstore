<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      //$this->middleware('role:user'); //make sure the user has admin role
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::all(); //->paginate(10) only show 10 with a next button

      return view('user.books.index')->with([
        'books' => $books
      ]);

    }


    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('user.books.show')->with([
          'book' => $book
        ]);

    }



}
