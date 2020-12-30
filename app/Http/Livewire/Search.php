<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search');
    }
    // Hola mundo como estas
    //mundo
    public function getResultsProperty(){
        return Course::where('title', 'LIKE', '%' . $this->search . '%')->where('status', 3)->take(8)->get();  // signo de porcentage para indicar que puede haber texto antes o despues
    }

}
