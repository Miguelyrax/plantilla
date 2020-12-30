<x-app-layout>

    {{--Portada--}}
<section class="bg-cover" style="background-image: url({{asset('img/home/bird-3158784_1920.jpg')}})">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-56">
        <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-bold text-4xl">Bienvenido a la aventura de isla gaviota</h1>
            <p class="text-white text-lg mt-2 mb-4">En isla gaviota encotraras distintas especies de animales y flora unica en el pais.</p>
            <!-- component -->
<!-- This is an example component -->
     @livewire('search')
        </div>
        
    </div>

</section>
<section class="mt-24">
    <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gap-y-8">
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/dolphin-1019615_640.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Delfin</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ipsam blanditiis magnam eveniet aut fuga.</p>

        </article>

        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/humpback-whale-1209297_640.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Ballena</h1>
        </header>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ipsam blanditiis magnam eveniet aut fuga.</p>
        
        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/orca-2434070_640.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Orca</h1>
        </header>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ipsam blanditiis magnam eveniet aut fuga.</p>
        
        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/seagull-3491310_640.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Gaviota</h1>
        </header>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ipsam blanditiis magnam eveniet aut fuga.</p>
        
        </article>
        
    </div>

</section>
<section class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-white text-3xl">¿No sabes como llegar?</h1>
    <p class="text-center text-white">Aqui te mostraremos</p>
    <div class="flex justify-center mt-4">
    <a href="{{route('blogs.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Ubicación
        </a>
    </div>


</section>

<section class="my-24">
    <h1 class="text-center text-3xl text-gray-600">ULTIMOS BLOG</h1>
    <P class="text-center text-gray-500 text-sm mb-6">Blogs de la comunidad de isla gaviota</P>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gap-y-8 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
        <x-course-card :course="$course">
            
        </x-course-card>
            </article>
        @endforeach
    </div>

</section>

</x-app-layout>

