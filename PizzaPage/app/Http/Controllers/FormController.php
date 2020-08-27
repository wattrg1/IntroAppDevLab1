<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function summary(){

        $formData = request()->all();

     
        return view('summary',compact('formData') );
    }


    public function confirmation(){

        $formData = request()->all();

        return view('confirmation',compact('formData') );
    }

}
