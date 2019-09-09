<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    return response()->json(['authors' => Author::all()]);
  }

  public function show($id){
    return response()->json(['author' => Author::find($id)]);
  }

  public function create(Request $request)
  {
    $data = $request->only('name', 'avatar', 'country_id');
    $author = Author::create($data);
    return response()->json(['author' => $author], 201);
  }

  public function update($id, Request $request)
  {
    $data = $request->only('name', 'avatar', 'country_id');
    $author = Author::find($id);
    $author->fill($data);
    $author->save();
    return response()->json(['author' => $author]);
  }

  public function destroy($id)
  {
    $author = Author::find($id);
    $author->delete();
    return response(null, 204);
  }
}
