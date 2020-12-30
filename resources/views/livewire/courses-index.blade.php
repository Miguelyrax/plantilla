<div>
    {{-- Barra de navegacion --}}
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-anchor text-xs mr-2"></i>
                Todos los blog</button>
                <!-- component -->

            <!-- Dropdown categorias -->
            <div class="relative mr-4" x-data="{ open: false }"> {{--Lo inicializamos en false--}}
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open= !open "> {{--on click evento de alpine--}}
                    <i class="fas fa-paw mr-2 "></i>
                    Categoría
                    <i class="fas fa-angle-down mr-2 ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl " x-show="open" x-on:click.away="open=false">   {{--x-show, es una funcin de alpine--}}
                  
                    @foreach ($categories as $category)
                <a  class=" cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('category_id', {{$category->id}})" x-on:click="open = false">{{$category->name}}</a> {{--set es un metodo para codigo simple de livewire--}}
                   @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
            <!-- Dropdown niveles -->
            <div class="relative" x-data="{ open: false }"> {{--Lo inicializamos en false--}}
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open= !open "> {{--on click evento de alpine--}}
                    <i class="fas fa-paw mr-2 "></i>
                    Niveles
                    <i class="fas fa-angle-down mr-2 ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl " x-show="open" x-on:click.away="open=false">   {{--x-show, es una funcin de alpine--}}
                   
                    @foreach ($levels as $level)
                    <a  class=" cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id', {{$level->id}})" x-on:click="open = false">{{$level->name}}</a>
                    @endforeach
                    
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
  
        </div>
    </div>

    {{--BLOGS--}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gap-y-8 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
           <x-course-card :course="$course">
            
           </x-course-card>
        @endforeach
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$courses->links()}}
    </div>
    

</div>

