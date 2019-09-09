<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguagesController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    return response()->json(['languages' => Language::all()]);
  }

  public function show($id){
    return response()->json(['language' => Language::find($id)]);
  }

  public function create(Request $request)
  {
    $data = $request->only('name');
    $language = Language::create($data);
    return response()->json(['language' => $language], 201);
  }

  public function update($id, Request $request)
  {
    $data = $request->only('name');
    $language = Language::find($id);
    $language->fill($data);
    $language->save();
    return response()->json(['language' => $language]);
  }

  public function destroy($id)
  {
    $language = Language::find($id);
    $language->delete();
    return response(null, 204);
  }
}
