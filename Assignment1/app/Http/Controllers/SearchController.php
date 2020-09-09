<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Politician;
class SearchController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('home');
  }

  public function getAutocompleteData(Request $request){
         if($request->has('term')){
             return Politician::where('name','like','%'.$request->input('term').'%')->get();
         }
     }
}
