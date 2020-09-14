<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yard;
class YardController extends Controller
{
  public function index() {
      $yards = Yard::all();
      return view('yards')->with('yards', $yards);
  }
}
