<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center gap-6">

       
        <a href="">HOME</a>
        <a href="">PRECIOS</a>
        <a href="">NOSOTROS</a>
    </div>
    </x-slot>

    
        <section class=" bg-cover" style="background-image: url({{asset('img/fondo.jpg')}})" >
            <div class=" bg-gray-900 bg-opacity-50">
                <div class="flex justify-center py-36 px-36">
                    <div class="grid grid-cols-1">
                        <h1 class=" lg:text-6xl text-4xl text-center text-white">En estos momentos, nosotros te entendemos</h1>
                        <button class=" hover:bg-gray-300 outline-none mt-2 m-auto w-44 rounded text-2xl bg-white text-black text-center ">Precios</button>
                    </div>
                    
                </div>
            </div>
        </section>
        <section >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3">
                <figure class="bg-white shadow rounded py-16 px-16">
                    <div class="grid grid-cols-2"></div>
                    <i class="far fa-eye"></i>
                    <h1 class="text-center font-bold">Mejores precios</h1>
                </figure>
                <figure class="bg-white shadow rounded py-16 px-16">
                    <h1 class="text-center font-bold">Contacto</h1>
                </figure>
                <figure class="bg-white shadow rounded py-16 px-16">
                    <h1 class="text-center font-bold">Ubicación</h1>
                </figure>
            </div>

        </section>
        <section class="">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="text-center">
                    <h1 class="text-4xl">Servicios de la funeraria</h1>
                    <p>Nuestros servicios se adaptan a tus necesidades</p>
                </div>
                <hr class="mt-4 bg-red-600">
                
            </div>
        </section>
        <section>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
               
                @foreach ($houses as $house)
                
                <article class="bg-white shadow-lg "> 
                    <img class=" w-full h-60 object-cover object-center" src="{{Storage::url($house->image->url)}}" alt="">
                    <div class=" px-6 py-6">
                        
                        <h1 class="text-center">{{$house->title}}</h1>
                        <p class=" text-center ">Precio: {{$house->price->name}}</p>
                        <button class="mt-2 bg-red-500 text-white font-bold px-2 py-2 rounded ">Mas información</button>
                    </div>
                    
                </article>
                @endforeach
                
            </div>
            
        </section>

        <section>
            <div class=" mx-auto  py-36">
                <div class="bg-red-500 w-full grid grid-cols-1 lg:grid-cols-2 ">
                    <div class="bg-gray-900  ">
                        <img class=" opacity-75 object-center object-cover" src="{{asset('img/pajaro.jpg')}}" alt="">
                    </div>
                    <div>

                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 py-36 gap-6 ">
                <div>
                    <img class=" object-center object-cover" src="{{asset('img/manos.jpg')}}" alt="">
                </div>
                <div >
                    <form action="">
                        <h1 class="text-red-600 font-bold text-4xl text-center">Contactanos</h1>
                        <div class="">
                        <input class=" mb-4 w-full h-full" type="text">
                        <input class=" mb-4 w-full h-full" type="text">
                        <input class=" mb-4 w-full h-full" type="text">
                        <input class=" mb-4 w-full h-full" type="text">
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>

        <section>
            <div class=" mx-auto ">
                <div class="bg-red-500 w-full h-96 grid grid-cols-1 lg:grid-cols-2 ">
                    

                </div>
            </div>
        </section>
    
</x-app-layout>
