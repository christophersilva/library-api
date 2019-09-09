<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountriesController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    return response()->json(['countries' => Country::all()]);
  }

  public function show($id){
    return response()->json(['country' => Country::find($id)]);
  }

  public function create(Request $request)
  {
    $data = $request->only('name', 'iso', 'iso3');
    $country = Country::create($data);
    return response()->json(['country' => $country], 201);
  }

  public function update($id, Request $request)
  {
    $data = $request->only('name', 'iso', 'iso3');
    $country = Country::find($id);
    $country->fill($data);
    $country->save();
    return response()->json(['country' => $country]);
  }

  public function destroy($id)
  {
    $country = Country::find($id);
    $country->delete();
    return response(null, 204);
  }
}
