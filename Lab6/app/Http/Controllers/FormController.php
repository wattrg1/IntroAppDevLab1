<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function showForm()
    {
        return view('election');
    }
    public function process()
    {
        return request()->all();
    }
}
