<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    return response()->json(['books' => Book::all()]);
  }

  public function show($id){
    return response()->json(['book' => Book::find($id)]);
  }

  public function create(Request $request)
  {
    $data = $request->only('title', 'subtitle', 'isbn', 'language_id', 'country_id', 'programming_language_id', 'published_at');
    $book = Book::create($data);
    return response()->json(['book' => $book], 201);
  }

  public function update($id, Request $request)
  {
    $data = $request->only('title', 'subtitle', 'isbn', 'language_id', 'country_id', 'programming_language_id', 'published_at');
    $book = Book::find($id);
    $book->fill($data);
    $book->save();
    return response()->json(['book' => $book]);
  }

  public function destroy($id)
  {
    $book = Book::find($id);
    $book->delete();
    return response(null, 204);
  }
}
