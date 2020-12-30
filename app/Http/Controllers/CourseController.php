<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        return view('blogs.index');
    }
    public function show(Course $course){

        $this->authorize('published', $course);

        $similares = Course::where('category_id', $course->category_id)
        ->where('id', '!=', $course->id)//me devulve cursos diferentes al que se esta mostrando
        ->where('status', 3)
        ->latest('id')
        ->take(5)
        ->get();

        return view('courses.show', compact('course', 'similares'));

    }

    public function enrolled(Course $course){

        $course->students()->attach(auth()->user()->id); // para introducir un nuevo elemento en el quiebre usamos attach.... con auth()->user() obtenemos el registro del usuario autentificado
        return redirect(route('courses.status', $course));
    }

    public function status(Course $course){
        return view('courses.status', compact('course'));
    }

}
