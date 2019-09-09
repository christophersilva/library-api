<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgrammingLanguage;

class ProgrammingLanguagesController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    return response()->json(['programming_languages' => ProgrammingLanguage::all()]);
  }

  public function show($id){
    return response()->json(['programming_language' => ProgrammingLanguage::find($id)]);
  }

  public function create(Request $request)
  {
    $data = $request->only('name');
    $programming_language = ProgrammingLanguage::create($data);
    return response()->json(['programming_language' => $programming_language], 201);
  }

  public function update($id, Request $request)
  {
    $data = $request->only('name');
    $programming_language = ProgrammingLanguage::find($id);
    $programming_language->fill($data);
    $programming_language->save();
    return response()->json(['programming_language' => $programming_language]);
  }

  public function destroy($id)
  {
    $programming_language = ProgrammingLanguage::find($id);
    $programming_language->delete();
    return response(null, 204);
  }
}
