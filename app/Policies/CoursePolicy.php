<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function enrolled(User $user, Course $course){ // por defecto toma el valor del usuario autentificado, por lo que no es necesario pasarle el parametro
        //verificar si un usuario tiene ciertos permisos 
        return $course->students->contains($user->id); //contains ve si el id del usuario coincide con la coleccion students, si se encuentra deveulve true, de lo contrario devuelve false

    }
    public function published(?User $user, Course $course){ //El signo de interrogacion es para evaluar si esta logueado o no, ya que sino, esto no devuelve nada
        if($course->status == 3){
            return true;
        }else{
            return false;
        }

    }
}
