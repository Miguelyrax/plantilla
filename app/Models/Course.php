<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id','status'];// status ya que cualquiera puede agregar un input con el name status y pasar el curso
    protected $witchCount = ['students', 'reviews'];
    
    use HasFactory;
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute(){

        if($this->reviews_count){
            return round($this->reviews->avg('rating'), 1); //si le ponemos los parentesis nos devuelve el tipo de coleccion, mas no la coleccion
        //retorna el promedio de todos los rating, round redondea el resultao del promedio
        }else{
            return 5; // si hay mas de un review me retorna el promedio, de lo contrario me marca un total de 5 estrellas
        }

        
    }

        //Query Scopes
        public function scopeCategory($query, $category_id){
            if($category_id){
                return $query->where('category_id', $category_id);
            }
        }
        public function scopeLevel($query, $level_id){
            if($level_id){
                return $query->where('level_id', $level_id);
            }
        }

    public function getRouteKeyName()
    {
        return "slug";
    }

    //relacion uno a muchos inversa
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id'); //la clave foranea es user_id
    }
    public function price(){
        return $this->belongsTo('App\Models\Price');
    }
    public function level(){
        return $this->belongsTo('App\Models\Level');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }


    //Relacion muchos a muchos
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }
    //Relacion uno a muchos
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    } 
    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    } 
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    } 
    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    } 
    public function sections(){
        return $this->hasMany('App\Models\Section');
    } 
    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
