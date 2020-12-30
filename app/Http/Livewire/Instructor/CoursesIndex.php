<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Course;

class CoursesIndex extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $courses = Course::where('title', 'LIKE', '%' . $this->search . '%')
        ->where('user_id', auth()->user()->id)
        ->latest('id')
        ->paginate(8);
        return view('livewire.instructor.index', compact('courses'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}