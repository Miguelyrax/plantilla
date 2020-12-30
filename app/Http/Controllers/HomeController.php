<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    //
    public function __invoke(){ //administra solo una ruta
        $courses = Course::where('status','3')->latest('id')->get()->take(12); //Trae los curos con status igual a 3..latest me ordena los campos en forma descendente
       
        return view('welcome', compact('courses'));
    }
}
