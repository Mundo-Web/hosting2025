@extends('components.public.matrix', ['pagina' => 'index'])
@section('titulo', 'Inicio')
@section('css_importados')

    <style>
        .swiper-pagination_productos>.swiper-pagination-bullet-active {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 20px;
            height: 20px;
            opacity: 1;
            background-image: url({{ asset('images/svg/image_29.svg') }});
        }

        .swiper-pagination_productos .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 20px;
            height: 20px;
            opacity: 1;
            background-image: url({{ asset('images/svg/image_30.svg') }});
        }

        .swiper-button-next {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_43.svg') }})
        }

        .swiper-button-next:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .swiper-button-prev {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_44.svg') }})
        }

        .swiper-button-prev:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .slider-pagination {
           
            margin-bottom: 30px;
        }
        
        /* Estilo de los puntos de paginación */
        .slider-pagination .swiper-pagination-bullet {
            width: 16px; /* Ancho personalizado */
            height: 9px; /* Alto personalizado */
            border-radius: 6px; /* Bordes redondeados */
            background-color: #F07407 !important; /* Color base */
            transition: background-color 0.3s, transform 0.3s; /* Transiciones suaves */
        }
        
        /* Estilo de los puntos que no están activos */
        .slider-pagination .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: white !important; /* Color más tenue */
            opacity: 0.8; /* Opacidad constante */
        }
    </style>

@stop


@section('content')
    <main>
        

        <section class="bg-center h-svh bg-cover flex flex-col justify-center relative" style="background-image: url({{asset('images/img/bannerconex.png')}})">
            
            <img class="opacity-40 object-cover absolute top-0 h-full w-full" src="{{asset('images/img/texturaconex.png')}}" />
            <div class="flex flex-col lg:flex-row px-[5%]  py-[5%]  lg:px-[10%] pt-20 gap-5 justify-center items-start lg:items-end">
                <div class="z-20 w-full md:w-full xl:w-2/3 2xl:w-1/2 flex flex-col gap-4 2xl:gap-10 justify-center">
                    
                    <div class="flex flex-col gap-1">
                        <h3 class="font-gotham_bold text-white text-xl">Descrubre tu Plan Ideal</h3>
                        <h2 class="font-gotham_bold text-white text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-7xl">Elige el Plan de Internet que se Ajusta a Ti</h2>
                    </div>

                    <div class="flex flex-col justify-center items-start font-gotham_bold">
                        <div class="bg-[#E29720] px-5 py-3 rounded-full tracking-normal">
                            <p class="leading-none text-[#21149E]">Descubre tu Plan Ideal</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 font-gotham_bold  gap-3 lg:gap-5 max-w-2xl">
                        <div class="flex flex-col justify-center">
                            <span class="text-[#1EA7A2] text-3xl xl:text-5xl">100%</span>
                            <h2 class="text-white text-sm sm:text-base xl:text-lg">Red fibra óptica</h2>
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="text-[#1EA7A2] text-3xl xl:text-5xl">24/7</span>
                            <h2 class="text-white text-sm sm:text-base xl:text-lg">Atención permanente</h2>
                        </div>
                    </div>
                    
                </div>
                <div class="z-20 w-full lg:w-1/3 2xl:w-1/2 flex flex-col justify-end items-start lg:items-end">
                    <div class="flex flex-col items-start justify-center  gap-1 z-10 text-left md:text-right bg-black bg-opacity-50 p-5 rounded-2xl w-full sm:w-auto">
                        <p class="text-white text-base font-gotham_bold w-full leading-tight">
                            Llámanos al
                        </p>

                        <p class="text-[#F07407] text-3xl xl:text-4xl font-gotham_bold w-full">
                            +51 9458734355
                        </p>

                        <p class="text-white text-base font-gotham_bold w-full leading-tight">
                            y escoge tu plan ahora
                        </p>
                    </div>
                </div>
            </div> 
            <div class="absolute top-10 right-[8%] lg:flex hidden">
                <div class="flex flex-col justify-center items-start font-gotham_bold">
                    <div class="bg-[#E29720] px-5 py-3 rounded-full tracking-normal">
                        <p class="leading-none text-[#21149E]">Habla con nosotros</p>
                    </div>
                </div>
            </div>
        </section>



        

        {{-- @if (count($slider) > 0) 
            <section class="w-full relative">
                <div class="swiper slider h-max">
                    <div class="swiper-wrapper">
                    @foreach ($slider as $slide)                      
                        <div class="swiper-slide">
                            <div class="w-full">
                            <a href="{{$slide->link2}}">  
                                <div class="flex h-[500px] w-full relative z-10 md:flex-col items-end justify-end">
                                    <img class="block h-full w-full object-cover object-center"
                                        src="{{ asset($slide->url_image . $slide->name_image) }}" 
                                        onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"
                                        alt="">
                                </div>
                                <div class="flex flex-col md:hidden h-auto w-full md:h-auto relative z-10  items-end justify-end">
                                    <img class="block h-full w-full object-contain object-bottom"
                                        src="{{ asset($slide->link1) }}" 
                                        onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"
                                        alt="">
                                </div>
                            </a>      
                            </div>
                        </div>
                    @endforeach 
                    </div>
                    <div class="flex flex-row justify-center items-center relative">
                        <div class="slider-pagination absolute top-full bottom-0 z-10 right-full !left-1/2"></div>
                    </div>
                </div>
            </section>
        @endif --}}


        <section class="bg-cover bg-opacity-100 relative" 
          style="background-image: url('{{asset('images/img/textura2.png')}}');">
            <div class="px-[5%] md:pl-[8%] md:pr-0 py-5 flex flex-col  md:flex-row gap-5 md:gap-10">
                <div class="w-full sm:w-full md:w-1/3  xl:w-1/4 flex flex-col justify-center">
                    <h2 class="font-gotham_bold text-4xl text-white text-left">
                        ¿Eres cliente Redconex?
                    </h2>
                </div>

                <div class="w-full sm:w-3/4 md:w-2/3 xl:w-3/4">
                    <div class="swiper ofertas w-full">
                        <div class="swiper-wrapper">   
                            <div class="swiper-slide">
                                <div class="flex flex-col md:flex-row gap-3 max-w-[390px] bg-[#21149E] p-6 rounded-3xl mx-auto">
                                        <img class="w-24 h-32 object-contain mx-auto" src="{{asset('images/img/img1.png')}}" />
                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <h2 class="font-gotham_bold text-2xl text-white line-clamp-2">
                                                ¡Agrega un TV BOX a tu plan gamer!
                                            </h2>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#E29720] px-7 py-2 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Pídelo aquí</span></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex flex-col md:flex-row gap-3 max-w-[390px] bg-[#21149E] p-6 rounded-3xl mx-auto">
                                        <img class="w-24 h-32 object-contain mx-auto" src="{{asset('images/img/img2.png')}}" />
                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <h2 class="font-gotham_bold text-2xl text-white line-clamp-2">
                                                ¡Agrega un TV BOX a tu plan gamer!
                                            </h2>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#E29720] px-7 py-2 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Pídelo aquí</span></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex flex-col md:flex-row gap-3 max-w-[390px] bg-[#21149E] p-6 rounded-3xl mx-auto">
                                        <img class="w-24 h-32 object-contain mx-auto" src="{{asset('images/img/img1.png')}}" />
                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <h2 class="font-gotham_bold text-2xl text-white line-clamp-2">
                                                ¡Agrega un TV BOX a tu plan gamer!
                                            </h2>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#E29720] px-7 py-2 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Pídelo aquí</span></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex flex-col md:flex-row gap-3 max-w-[390px] bg-[#21149E] p-6 rounded-3xl mx-auto">
                                        <img class="w-24 h-32 object-contain mx-auto" src="{{asset('images/img/img1.png')}}" />
                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <h2 class="font-gotham_bold text-2xl text-white line-clamp-2">
                                                ¡Agrega un TV BOX a tu plan gamer!
                                            </h2>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#E29720] px-7 py-2 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Pídelo aquí</span></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>



        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
          <div class="px-[5%]  flex flex-col items-center justify-center gap-5">
            <div class="flex flex-col gap-1 max-w-xl text-center">
                <h3 class="font-gotham_bold text-white text-lg ">Descrubre tu Plan Ideal</h3>
                <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl">Elige el <span class="text-[#E29720]">Plan de Internet</span> que se Ajusta a Ti</h2>
            </div>

            <div class="flex flex-row gap-3 justify-center items-start font-gotham_medium">
                <div class="bg-[#E29720] px-5 py-2.5 rounded-full tracking-normal">
                    <p class="leading-none text-[#21149E] text-sm sm:text-base">Planes de internet</p>
                </div>

                <div class="bg-transparent px-5 py-2.5 rounded-full tracking-normal border border-white">
                    <p class="leading-none text-white text-sm sm:text-base">Duo Familiar</p>
                </div>
            </div>
          </div>

          <div class="px-[5%] md:pl-[8%] md:pr-0 py-5 flex md:flex-row gap-5 md:gap-10">
    
                <div class="w-full">
                    <div class="swiper planes w-full">
                        <div class="swiper-wrapper">   
                            
                            <div class="swiper-slide my-auto">

                                <div class="flex flex-col gap-3 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-2 rounded-xl text-[#21149E] text-center font-gotham_bold w-auto"><span>Plan Básico | 100% Fibra</span></a>
                                        </div>
                                        
                                        <h2 class="font-gotham_bold text-white text-4xl line-clamp-2">150Mbps</h2>

                                        <div class="flex flex-col w-full">
                                            <span class="font-gotham_book font-semibold tracking-wide text-white text-base">Desde</span>
                                            <h2 class="font-gotham_bold text-white text-3xl">S/ 50,00 <span class="font-gotham_book tracking-wide text-white text-base">/mes</span></h2>
                                        </div>

                                        <img class="w-full h-44 object-contain mx-auto my-2" src="{{asset('images/img/router.png')}}" />

                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#21149E] border border-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Me interesa</span></a>
                                            </div>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-transparent border border-white px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Saber más</span></a>
                                            </div>
                                            <span class="font-gotham_book text-xs text-white">Al seleccionar, acepta Términos y Condiciones.</span>
                                        </div>
                                </div>

                            </div>

                            <div class="swiper-slide my-auto">

                                <div class="flex flex-col gap-3 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-2 rounded-xl text-[#21149E] text-center font-gotham_bold w-auto"><span>Plan Gamer | 100% Fibra</span></a>
                                        </div>
                                        
                                        <h2 class="font-gotham_bold text-white text-4xl line-clamp-2">300Mbps +</h2>

                                        <div class="flex flex-col w-full">
                                            <span class="font-gotham_book font-semibold tracking-wide text-white text-base">Desde</span>
                                            <h2 class="font-gotham_bold text-white text-3xl">S/ 80,00 <span class="font-gotham_book tracking-wide text-white text-base">/mes</span></h2>
                                        </div>

                                        <img class="w-full h-44 object-contain mx-auto my-2" src="{{asset('images/img/router.png')}}" />

                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#21149E] border border-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Me interesa</span></a>
                                            </div>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-transparent border border-white px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Saber más</span></a>
                                            </div>
                                            <span class="font-gotham_book text-xs text-white">Al seleccionar, acepta Términos y Condiciones.</span>
                                        </div>
                                </div>

                            </div>


                            <div class="swiper-slide my-auto">

                                <div class="flex flex-col gap-3 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-2 rounded-xl text-[#21149E] text-center font-gotham_bold w-auto"><span>Plan Avanzado | 100% Fibra</span></a>
                                        </div>
                                        
                                        <h2 class="font-gotham_bold text-white text-4xl line-clamp-2">400Mbps + Repetidor</h2>

                                        <div class="flex flex-col w-full">
                                            <span class="font-gotham_book font-semibold tracking-wide text-white text-base">Desde</span>
                                            <h2 class="font-gotham_bold text-white text-3xl">S/ 100,00 <span class="font-gotham_book tracking-wide text-white text-base">/mes</span></h2>
                                        </div>

                                        <img class="w-full h-44 object-contain mx-auto my-2" src="{{asset('images/img/router2.png')}}" />

                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#21149E] border border-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Me interesa</span></a>
                                            </div>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-transparent border border-white px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Saber más</span></a>
                                            </div>
                                            <span class="font-gotham_book text-xs text-white">Al seleccionar, acepta Términos y Condiciones.</span>
                                        </div>
                                </div>

                            </div>


                            <div class="swiper-slide my-auto">

                                <div class="flex flex-col gap-3 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-2 rounded-xl text-[#21149E] text-center font-gotham_bold w-auto"><span>Plan Vip | 100% Fibra</span></a>
                                        </div>
                                        
                                        <h2 class="font-gotham_bold text-white text-4xl line-clamp-2">500Mbps + Repetidor</h2>

                                        <div class="flex flex-col w-full">
                                            <span class="font-gotham_book font-semibold tracking-wide text-white text-base">Desde</span>
                                            <h2 class="font-gotham_bold text-white text-3xl">S/ 150,00 <span class="font-gotham_book tracking-wide text-white text-base">/mes</span></h2>
                                        </div>

                                        <img class="w-full h-44 object-contain mx-auto my-2" src="{{asset('images/img/router2.png')}}" />

                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#21149E] border border-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Me interesa</span></a>
                                            </div>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-transparent border border-white px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Saber más</span></a>
                                            </div>
                                            <span class="font-gotham_book text-xs text-white">Al seleccionar, acepta Términos y Condiciones.</span>
                                        </div>
                                </div>

                            </div>

                            <div class="swiper-slide my-auto">

                                <div class="flex flex-col gap-3 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-2 rounded-xl text-[#21149E] text-center font-gotham_bold w-auto"><span>Plan Básico | 100% Fibra</span></a>
                                        </div>
                                        
                                        <h2 class="font-gotham_bold text-white text-4xl line-clamp-2">150Mbps</h2>

                                        <div class="flex flex-col w-full">
                                            <span class="font-gotham_book font-semibold tracking-wide text-white text-base">Desde</span>
                                            <h2 class="font-gotham_bold text-white text-3xl">S/ 50,00 <span class="font-gotham_book tracking-wide text-white text-base">/mes</span></h2>
                                        </div>

                                        <img class="w-full h-44 object-contain mx-auto my-2" src="{{asset('images/img/router2.png')}}" />

                                        <div class="flex flex-col gap-3 justify-center items-start">
                                            <div class="flex flex-row w-full">
                                                <a class="bg-[#21149E] border border-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Me interesa</span></a>
                                            </div>
                                            <div class="flex flex-row w-full">
                                                <a class="bg-transparent border border-white px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Saber más</span></a>
                                            </div>
                                            <span class="font-gotham_book text-xs text-white">Al seleccionar, acepta Términos y Condiciones.</span>
                                        </div>
                                </div>

                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>  
        </section>


        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" 
            style="background-image: url('{{asset('images/img/textura4.png')}}');">
          <div class="px-[5%] md:px-[8%]  flex flex-col  lg:flex-row gap-5 md:gap-10">
              <div class="w-full sm:w-full lg:w-1/3  flex flex-col justify-center">
                <div class="swiper lugares w-full mt-1 h-[350px]  md:h-[360px]">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="flex flex-row gap-3 items-center max-w-xs mx-auto p-3 bg-white group hover:bg-[#E29720] bg-opacity-10 rounded-2xl">
                                <img class="w-20 h-20 rounded-xl object-cover" src="{{asset('images/img/lugar1.png')}}" />
                                <h3 class="font-gotham_bold text-white text-lg group-hover:text-[#21149E]">Distrito de Ventanilla - Pachacutec</h3>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-row gap-3 items-center max-w-xs mx-auto p-3 bg-white group hover:bg-[#E29720] bg-opacity-10 rounded-2xl">
                                <img class="w-20 h-20 rounded-xl object-cover" src="{{asset('images/img/lugar1.png')}}" />
                                <h3 class="font-gotham_bold text-white text-lg group-hover:text-[#21149E]">Distrito de Mi Perú</h3>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-row gap-3 items-center max-w-xs mx-auto p-3 bg-white group hover:bg-[#E29720] bg-opacity-10 rounded-2xl">
                                <img class="w-20 h-20 rounded-xl object-cover" src="{{asset('images/img/lugar1.png')}}" />
                                <h3 class="font-gotham_bold text-white text-lg group-hover:text-[#21149E]">Distrito de Santa Rosa</h3>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-row gap-3 items-center max-w-xs mx-auto p-3 bg-white group hover:bg-[#E29720] bg-opacity-10 rounded-2xl">
                                <img class="w-20 h-20 rounded-xl object-cover" src="{{asset('images/img/lugar1.png')}}" />
                                <h3 class="font-gotham_bold text-white text-lg group-hover:text-[#21149E]">Distrito de Santa Rosa</h3>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="w-full sm:w-full lg:w-2/3 flex flex-col justify-center gap-5 md:gap-10">
                <div class="flex flex-col gap-1 max-w-2xl text-center mx-auto">
                    <h3 class="font-gotham_bold text-white text-lg ">Zonas de Cobertura</h3>
                    <h2 class="font-gotham_bold text-white text-4xl xl:text-5xl ">Conoce las <span class="text-[#E29720]">áreas con nuestra conexión</span>  de alta velocidad.</h2>
                </div> 
                <div>
                    <img class="rounded-2xl overflow-hidden h-52 md:h-96 w-full object-cover" src="{{asset('images/img/lugar1.png')}}" />
                </div>
              </div>
          </div>  
        </section>



        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" 
            style="background-image: url('{{asset('images/img/textura5.png')}}');">
            <div class="px-[5%] md:px-[10%] flex flex-col  lg:flex-row gap-5 md:gap-10">
                <div class="w-full sm:w-full lg:w-1/2  flex flex-col justify-center">
                    <div class="flex flex-col gap-3 max-w-2xl text-left mx-auto">
                        <h3 class="font-gotham_bold text-white text-lg ">Sobre Nosotros</h3>
                        <h2 class="font-gotham_bold text-white text-4xl xl:text-5xl">¡Conéctate al Futuro con<span class="text-[#21149E]"> Red Conex.</span> La Mejor Velocidad en Internet que Puedes Imaginar!</h2>
                        <p class="font-gotham_book text-white text-base ">¡Bienvenido a Red Conex, tu mejor aliado para una conexión de internet inigualable! Con más de [número de años en el mercado] años de experiencia, estamos aquí para transformar tu experiencia digital con planes de internet de alta velocidad que se adaptan a ti.</p>
                    </div>   
                </div>

                <div class="w-full sm:w-full lg:w-1/2 flex flex-col justify-start items-start md:items-center pb-28 md:pb-24">
                    <div class="relative max-w-md mx-auto">
                        <img class="rounded-3xl overflow-hidden h-[400px] w-72 object-cover " src="{{asset('images/img/lugar1.png')}}" />
                        <div class="bg-[#21149E] p-4 rounded-2xl max-w-[300px] md:max-w-[370px] absolute -bottom-1/4 left-5 -right-14 md:-right-1/2">
                            <p class="font-gotham_book text-white text-base">“Nunc libero purus, porttitor eget tellus eu, iaculis tincidunt dui. Cras sit amet lacinia justo, et euismod sem. Etiam a neque risus. Maecenas vehicula tortor mauris, eget condimentum urna pellentesque sed.”</p>
                            <h3 class="font-gotham_bold text-white text-base text-right mt-1">Robert Capcha</h3>
                        </div>
                    </div>
                </div>
            </div>  
        </section>


        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16 flex flex-col gap-10" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
          <div class="px-[5%] flex flex-col items-center justify-center gap-5">
            <div class="flex flex-col gap-1 max-w-3xl text-center">
                <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl">¡Los Mejores <span class="text-[#E29720]">Planes de Internet</span> para Tu Hogar Te Esperan!</h2>
            </div>  
          </div>

          <div class="px-[5%] md:px-[10%] grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-10">
              <div class="flex flex-col gap-5 w-full bg-black bg-opacity-10 p-6 rounded-3xl text-center">
                    <div class="flex flex-row justify-center">
                        <div class="bg-[#1EA7A2] p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M20 35C22.7614 35 25 32.7614 25 30C25 27.2386 22.7614 25 20 25C17.2386 25 15 27.2386 15 30C15 32.7614 17.2386 35 20 35Z" stroke="#F2F4FF" stroke-width="2.5"/>
                                <path d="M20 25.0013V16.668" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                                <path d="M36.6673 21.6667C36.6673 12.4619 29.2053 5 20.0007 5C10.7959 5 3.33398 12.4619 3.33398 21.6667" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="font-gotham_bold text-white text-3xl max-w-sm mx-auto ">Velocidades que Impresionan</h2>
                    <p class="font-gotham_book text-white text-base ">Desde 150 Mbps hasta 500 Mbps, ofrecemos conexiones rápidas y estables para que disfrutes de tus juegos online, videollamadas y streaming sin interrupciones.</p>
                    <div class="flex flex-row w-full">
                        <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Quiero más velocidad</span></a>
                    </div>
              </div>

              <div class="flex flex-col gap-5 w-full bg-black bg-opacity-10 p-6 rounded-3xl text-center">
                    <div class="flex flex-row justify-center">
                        <div class="bg-[#1EA7A2] p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M20 35C22.7614 35 25 32.7614 25 30C25 27.2386 22.7614 25 20 25C17.2386 25 15 27.2386 15 30C15 32.7614 17.2386 35 20 35Z" stroke="#F2F4FF" stroke-width="2.5"/>
                                <path d="M20 25.0013V16.668" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                                <path d="M36.6673 21.6667C36.6673 12.4619 29.2053 5 20.0007 5C10.7959 5 3.33398 12.4619 3.33398 21.6667" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="font-gotham_bold text-white text-3xl max-w-sm mx-auto ">Velocidades que Impresionan</h2>
                    <p class="font-gotham_book text-white text-base ">Desde 150 Mbps hasta 500 Mbps, ofrecemos conexiones rápidas y estables para que disfrutes de tus juegos online, videollamadas y streaming sin interrupciones.</p>
                    <div class="flex flex-row w-full">
                        <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Quiero más velocidad</span></a>
                    </div>
              </div>

              <div class="flex flex-col gap-5 w-full bg-black bg-opacity-10 p-6 rounded-3xl text-center">
                    <div class="flex flex-row justify-center">
                        <div class="bg-[#1EA7A2] p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path d="M20 35C22.7614 35 25 32.7614 25 30C25 27.2386 22.7614 25 20 25C17.2386 25 15 27.2386 15 30C15 32.7614 17.2386 35 20 35Z" stroke="#F2F4FF" stroke-width="2.5"/>
                                <path d="M20 25.0013V16.668" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                                <path d="M36.6673 21.6667C36.6673 12.4619 29.2053 5 20.0007 5C10.7959 5 3.33398 12.4619 3.33398 21.6667" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="font-gotham_bold text-white text-3xl max-w-sm mx-auto ">Velocidades que Impresionan</h2>
                    <p class="font-gotham_book text-white text-base ">Desde 150 Mbps hasta 500 Mbps, ofrecemos conexiones rápidas y estables para que disfrutes de tus juegos online, videollamadas y streaming sin interrupciones.</p>
                    <div class="flex flex-row w-full">
                        <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Quiero más velocidad</span></a>
                    </div>
             </div>

             <div class="flex flex-col gap-5 w-full bg-black bg-opacity-10 p-6 rounded-3xl text-center">
                <div class="flex flex-row justify-center">
                    <div class="bg-[#1EA7A2] p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M20 35C22.7614 35 25 32.7614 25 30C25 27.2386 22.7614 25 20 25C17.2386 25 15 27.2386 15 30C15 32.7614 17.2386 35 20 35Z" stroke="#F2F4FF" stroke-width="2.5"/>
                            <path d="M20 25.0013V16.668" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M36.6673 21.6667C36.6673 12.4619 29.2053 5 20.0007 5C10.7959 5 3.33398 12.4619 3.33398 21.6667" stroke="#F2F4FF" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
                <h2 class="font-gotham_bold text-white text-3xl max-w-sm mx-auto ">Velocidades que Impresionan</h2>
                <p class="font-gotham_book text-white text-base ">Desde 150 Mbps hasta 500 Mbps, ofrecemos conexiones rápidas y estables para que disfrutes de tus juegos online, videollamadas y streaming sin interrupciones.</p>
                <div class="flex flex-row w-full">
                    <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Quiero más velocidad</span></a>
                </div>
             </div>

          </div> 

            <div class="px-[5%] md:px-[10%]">
                <div class="bg-[#1EA7A2]  rounded-3xl overflow-hidden flex flex-col lg:flex-row lg:justify-between gap-0 md:gap-10">
                    <div class="flex flex-col gap-3 w-full lg:w-1/2 p-6 2xl:p-8 lg:max-w-xl  order-2 lg:order-1">
                        <div class="flex flex-col gap-1 text-left">
                            <h3 class="font-gotham_bold text-white text-lg ">¡Se parte de la experiencia Red Conex!</h3>
                            <h2 class="font-gotham_bold text-white text-3xl leading-none">¡Déjanos tu correo y recibe la mejor info!</h2>
                        </div> 
                        <form id="footerBlog_Catalogo">
                            @csrf
                            <div class="flex flex-col gap-2 justify-center items-center">
                    
                                <div class="flex flex-col gap-2 w-full">
                                    <div class=" py-3 rounded-xl overflow-hidden  w-full flex flex-col gap-3">
                                        <label class="font-gotham_bold text-base text-white">EMAIL</label>
                                        <input type="email" name="email" id="emailFooter2" required
                                            class="text-[#21149E]  font-gotham_bold text-base rounded-xl py-3 ring-0 border-0 focus:ring-0 focus:border-0 border-transparent ring-transparent" 
                                            placeholder="Introduce tu email"
                                        />
                                        <input type="hidden" id="nameFooter" name="full_name" value="Usuario suscrito" />
                                        
                                        <button type="submit" class="text-white bg-[#21149E] w-full px-3 py-3 rounded-3xl font-gotham_bold text-base">
                                            Regístrate
                                        </button>
                                    </div>
                                    <p class="text-white text-sm font-latoregular w-full leading-tight text-left">
                                        Al enviar mis datos, acepto los Términos y Condiciones.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="flex flex-row justify-end items-end w-full lg:w-1/2 order-1 lg:order-2">
                        <img class="w-full h-full object-right object-cover" src="{{asset('images/img/imagensus.png')}}" />
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" 
            style="background-image: url('{{asset('images/img/textura6.png')}}');">
            <div class="px-[5%] md:px-[10%] flex flex-col gap-5 md:gap-10">
                
                <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center">
                    <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl">Nuestras últimas <br><span class="text-[#21149E]"> publicaciones</span></h2>
                    <div class="flex flex-row">
                        <a href="#">
                            <div class="bg-[#E29720] text-[#110B79] rounded-3xl px-6 py-2 text-lg font-gotham_bold">
                                Ver más noticias
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="w-full">
                    <div class="swiper slider_blog h-max">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="flex flex-col w-full bg-[#21149E] overflow-hidden rounded-3xl text-left">
                                    <div class="flex flex-row justify-center">
                                       <img class="w-full h-52 object-cover" src="{{asset('images/img/imagenblog.png')}}"/>
                                    </div>
                                    <div class="p-6 flex flex-col gap-3">
                                        <h2 class="font-gotham_bold text-white text-2xl xl:text-[21px] line-clamp-3">Beneficios del Internet de Fibra Óptica para tu Hogar</h2>
                                        <p class="font-gotham_book text-white text-base text-justify line-clamp-3">Descubre cómo la fibra óptica ofrece una conexión más rápida y estable, ideal para streaming, trabajo remoto y videojuegos. Conoce por qué esta tecnología es la mejor opción para quienes buscan rendimiento.</p>
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Leer más</span></a>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col w-full bg-[#21149E] overflow-hidden rounded-3xl text-left">
                                    <div class="flex flex-row justify-center">
                                        <img class="w-full h-52 object-cover" src="{{asset('images/img/imagenblog.png')}}"/>
                                    </div>
                                    <div class="p-6 flex flex-col gap-3">
                                        <h2 class="font-gotham_bold text-white text-2xl xl:text-[21px]">Beneficios del Internet de Fibra Óptica para tu Hogar</h2>
                                        <p class="font-gotham_book text-white text-base text-justify line-clamp-3">Descubre cómo la fibra óptica ofrece una conexión más rápida y estable, ideal para streaming, trabajo remoto y videojuegos. Conoce por qué esta tecnología es la mejor opción para quienes buscan rendimiento.</p>
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Leer más</span></a>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col w-full bg-[#21149E] overflow-hidden rounded-3xl text-left">
                                    <div class="flex flex-row justify-center">
                                        <img class="w-full h-52 object-cover" src="{{asset('images/img/imagenblog.png')}}"/>
                                    </div>
                                    <div class="p-6 flex flex-col gap-3">
                                        <h2 class="font-gotham_bold text-white text-2xl xl:text-[21px]">Beneficios del Internet de Fibra Óptica para tu Hogar</h2>
                                        <p class="font-gotham_book text-white text-base text-justify line-clamp-3">Descubre cómo la fibra óptica ofrece una conexión más rápida y estable, ideal para streaming, trabajo remoto y videojuegos. Conoce por qué esta tecnología es la mejor opción para quienes buscan rendimiento.</p>
                                        <div class="flex flex-row w-full">
                                            <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Leer más</span></a>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col items-center justify-center gap-5">
                    <div class="flex flex-col gap-1 max-w-3xl text-center">
                        <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl leading-none"> Todo lo que debes saber de <span class="text-[#21149E]">nuestros planes</span></h2>
                    </div> 
                    
                    <div class="grid w-full divide-y divide-neutral-200 bg-[#21149E] px-6 py-2 rounded-2xl">
                        <div class="py-3">
                            <details class="group">
                              <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span class="font-bold text-[20px] text-white font-gotham_bold">
                                    ¿Qué poner en preguntas frecuentes?</span>
                                <span class="transition group-open:rotate-180 bg-[#E29720] rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                                        <path d="M17 10L11.9992 14.58L7 10" stroke="#21149E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                              </summary>
                              <p class="text-base mt-3 text-white font-gotham_book">
                                Suspendisse at dictum lorem. Nunc rutrum tortor eu mi lacinia auctor. Morbi aliquet dignissim felis ac elementum. Ut porttitor mauris eros, quis iaculis tellus rhoncus eget. Nulla pulvinar molestie cursus. Aliquam rutrum suscipit massa vel varius. Aliquam ut tempor nisi, quis blandit est. Aenean at ex purus. Duis eleifend et mauris id varius. Nunc vehicula aliquam massa. Phasellus congue condimentum nisl at pulvinar.
                              </p>
                            </details>
                        </div>
                        <div class="py-3">
                            <details class="group">
                              <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span class="font-bold text-[20px] text-white font-gotham_bold">
                                    ¿Qué poner en preguntas frecuentes?</span>
                                <span class="transition group-open:rotate-180 bg-[#E29720] rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                                        <path d="M17 10L11.9992 14.58L7 10" stroke="#21149E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                              </summary>
                              <p class="group-open:animate-fadeIn mt-3 text-white font-gotham_book">
                                Suspendisse at dictum lorem. Nunc rutrum tortor eu mi lacinia auctor. Morbi aliquet dignissim felis ac elementum. Ut porttitor mauris eros, quis iaculis tellus rhoncus eget. Nulla pulvinar molestie cursus. Aliquam rutrum suscipit massa vel varius. Aliquam ut tempor nisi, quis blandit est. Aenean at ex purus. Duis eleifend et mauris id varius. Nunc vehicula aliquam massa. Phasellus congue condimentum nisl at pulvinar.
                              </p>
                            </details>
                        </div>
                    </div>

                </div>

               
            </div>  
        </section>
   


        {{-- <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">

            <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center">
                <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestra Carta</h2>
                <div class="flex flex-row">
                    <a href="{{route('catalogo.all')}}"><div class="bg-[#F07407] text-white rounded-lg px-3 py-1.5 text-base font-latoregular">
                    Ver toda la carta
                    </div>
                    </a>
                </div>
            </div>

            <div class="swiper categorias w-full h-max">
                <div class="swiper-wrapper">                 
                   @foreach ($category as $categoria)
                        <div class="swiper-slide">
                            <div class="group flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden hover:bg-[#F07407]">
                                <a href="{{route('catalogo', $categoria->id )}}" class="botonopciones">
                                    <img class="w-full h-full aspect-[3/2] object-cover" src="{{asset($categoria->url_image . $categoria->name_image)}}" />
                                    
                                    <div class="text-[#54340E] font-latoregular font-semibold text-lg px-3 py-3.5 w-full flex flex-col gap-1">
                                        <div>
                                            <h2 class="line-clamp-2 group-hover:text-white leading-none">{{$categoria->name}}</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        </div>
                    @endforeach
                </div>
            </div>

        </section> --}}


        {{-- @if ($destacados->isEmpty())
        @else
            <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-white gap-12 relative">

                <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center">
                    <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestros recomendados</h2>
                    <div class="flex flex-row">
                        <a href="{{route('catalogo.all')}}">
                            <div class="bg-[#F07407] text-white rounded-lg px-3 py-1.5 text-base font-latoregular">Ver todos los recomendados</div>
                        </a>
                    </div>
                </div>

                <div class="w-full">
                    <div class="swiper slider_productos h-max">
                        <div class="swiper-wrapper">
                            @foreach ($destacados as $destacado)
                                <div class="swiper-slide">
                                    <div class="flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden group cursor-pointer">
                                        <img
                                            class="w-full h-full aspect-[3/2] object-cover"
                                            src="{{asset($destacado->imagen)}}"
                                        />
                                        
                                        <div class="text-[#54340E] font-latobold text-xl px-3 pt-2 pb-3 w-full flex flex-col gap-1">
                                            <div class="flex flex-col">
                                                <h2 class="line-clamp-1">{{$destacado->producto}}</h2>
                                                <div class="line-clamp-2 font-latoregular text-sm h-9 leading-tight flex flex-col justify-center">
                                                    {!! $destacado->extract ?? $destacado->description !!}
                                                </div>
                                                <div class="flex flex-row justify-start items-center gap-2 font-latobold mt-1">
                                                    @if ($destacado->descuento == 0)
                                                        <span class="text-lg">S/ {{$destacado->precio}}</span>   
                                                    @else
                                                        <span class="text-lg">S/ {{$destacado->descuento}}</span>
                                                        <span class="text-sm line-through">S/ {{$destacado->precio}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                
                                            <a href="{{route('producto', $destacado->id)}}" class="botonopciones">
                                                <div class="bg-[#54340E] rounded-lg pt-1 pb-2 text-center ">
                                                    <span
                                                        class="bg-[#54340E] text-white font-latoregular text-base text-center w-full"
                                                        href="{{route('producto', $destacado->id)}}"
                                                    >
                                                        Ordena aqui
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>        
                            @endforeach
                        </div>
                    </div>
                </div>

            </section>
        @endif --}}

 

      


        {{-- <section class="flex flex-col md:flex-row justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">
            
            <form id="formContactos" class="w-full md:w-1/2 flex flex-col gap-3">
                @csrf
                <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestra Carta</h2>
                <p class="text-[#54340E] text-lg font-latoregular w-full leading-tight">
                  Recetas tradicionales peruanas, frescas y deliciosas, directo a tu puerta.
                </p>
      
                <div class="flex flex-col gap-1">
                  <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Nombre completo</label>
                  <input id="name" type="text" required name="full_name" placeholder="Nombre y apellido" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
                </div>
      
                <div class="flex flex-col gap-1">
                  <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Email</label>
                  <input required name="email" id="emailContacto" type="email" placeholder="hola@mail.com" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Telefono</label>
                    <input required name="phone" id="telefonoContacto" type="text" placeholder="+51 123456789" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
                  </div>
      
                <div class="flex flex-col gap-1">
                  <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Mensaje</label>
                  <textarea name="message" id="mensaje" rows="3" type="text" placeholder="Escribe tu mensaje" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"></textarea>
                </div>

                <input required name="source" id="telefonoContacto" type="hidden" value="Inicio" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
      
                <div class="flex flex-col gap-1">  
                  <button type="submit" class="bg-[#F07407] flex flex-row items-center justify-center gap-2 text-white font-latobold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0" >Enviar
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                      <path d="M18.8327 10.4141C18.8327 10.0046 18.8283 9.1784 18.8195 8.76773C18.7651 6.21311 18.7378 4.93581 17.7953 3.98961C16.8526 3.04342 15.5408 3.01046 12.917 2.94454C11.2999 2.90391 9.69877 2.90391 8.0817 2.94453C5.45796 3.01045 4.14608 3.04341 3.20347 3.98961C2.26087 4.9358 2.23363 6.2131 2.17915 8.76773C2.16163 9.58915 2.16164 10.4056 2.17916 11.2271C2.23363 13.7817 2.26087 15.059 3.20348 16.0052C4.14608 16.9514 5.45796 16.9843 8.08171 17.0502C8.75067 17.0671 9.41693 17.0769 10.0827 17.0798" stroke="#F9F6F3" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M2.16602 5L7.92687 8.27052C10.0316 9.46542 10.9671 9.46542 13.0718 8.27052L18.8327 5" stroke="#F9F6F3" stroke-width="1.25" stroke-linejoin="round"/>
                      <path d="M18.8327 14.5833H12.166M18.8327 14.5833C18.8327 13.9998 17.1708 12.9096 16.7493 12.5M18.8327 14.5833C18.8327 15.1668 17.1708 16.2571 16.7493 16.6667" stroke="#F9F6F3" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
      
            </form>
      
            
            <div class="w-full md:w-1/2 ">
                <div class="flex flex-col justify-center items-start md:items-end gap-4">
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M1.66602 4.16797L7.42687 7.43849C9.5316 8.63339 10.4671 8.63339 12.5718 7.43849L18.3327 4.16797" stroke="#F07407" class="group-hover:stroke-white" stroke-width="1.25" stroke-linejoin="round"/>
                      <path d="M8.74935 16.2487C8.36077 16.2436 7.9717 16.2362 7.58171 16.2264C4.95796 16.1604 3.64608 16.1274 2.70348 15.1807C1.76087 14.2339 1.73363 12.9559 1.67916 10.3999C1.66164 9.57795 1.66163 8.76095 1.67915 7.93906C1.73363 5.38297 1.76087 4.10493 2.70347 3.15819C3.64608 2.21145 4.95796 2.17847 7.5817 2.11251C9.19877 2.07186 10.7999 2.07187 12.417 2.11252C15.0408 2.17848 16.3526 2.21146 17.2952 3.15821C18.2378 4.10494 18.2651 5.38298 18.3195 7.93907C18.3276 8.31746 18.3319 8.49578 18.3326 8.7487" class="group-hover:stroke-white" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M15.834 14.168C15.834 14.8583 15.2743 15.418 14.584 15.418C13.8937 15.418 13.334 14.8583 13.334 14.168C13.334 13.4776 13.8937 12.918 14.584 12.918C15.2743 12.918 15.834 13.4776 15.834 14.168ZM15.834 14.168V14.5846C15.834 15.275 16.3937 15.8346 17.084 15.8346C17.7743 15.8346 18.334 15.275 18.334 14.5846V14.168C18.334 12.0969 16.6551 10.418 14.584 10.418C12.5129 10.418 10.834 12.0969 10.834 14.168C10.834 16.2391 12.5129 17.918 14.584 17.918" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" class="group-hover:stroke-white" stroke-linejoin="round"/>
                    </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">E-mail</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            {{ $item->email ?? "Ingrese un email"}}
                        @endforeach
                    </p>
                  </div>
      
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path class="group-hover:stroke-white" d="M4.16602 7.5013C4.16602 4.75144 4.16602 3.37651 5.02029 2.52224C5.87456 1.66797 7.24949 1.66797 9.99935 1.66797C12.7492 1.66797 14.1241 1.66797 14.9784 2.52224C15.8327 3.37651 15.8327 4.75144 15.8327 7.5013V12.5013C15.8327 15.2511 15.8327 16.6261 14.9784 17.4804C14.1241 18.3346 12.7492 18.3346 9.99935 18.3346C7.24949 18.3346 5.87456 18.3346 5.02029 17.4804C4.16602 16.6261 4.16602 15.2511 4.16602 12.5013V7.5013Z" stroke="#F07407" stroke-width="1.25" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M9.16602 15.832H10.8327" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M7.5 1.66797L7.57417 2.11299C7.7349 3.07738 7.81527 3.55958 8.14599 3.853C8.491 4.15909 8.98008 4.16797 10 4.16797C11.0199 4.16797 11.509 4.15909 11.854 3.853C12.1847 3.55958 12.2651 3.07738 12.4258 2.11299L12.5 1.66797" stroke="#F07407" stroke-width="1.25" stroke-linejoin="round"/>
                  </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">Teléfono</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            @if ($item->cellphone && $item->office_phone)
                                {{ $item->cellphone ?? "Ingrese nro. celular" }} / {{ $item->office_phone ?? "Ingrese nro. telefónico" }}
                            @elseif($item->cellphone && empty($item->office_phone))
                                {{ $item->cellphone ?? "Ingrese nro. celular" }}
                            @elseif($item->office_phone && empty($item->cellphone))
                                {{ $item->office_phone ?? "Ingrese nro. telefónico" }}
                            @else
                                <p>No hay información disponible para este ítem.</p>
                            @endif
                        @endforeach
                    </p>
                  </div>
      
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path class="group-hover:stroke-white" d="M5.83203 15C4.30792 15.3431 3.33203 15.8703 3.33203 16.4614C3.33203 17.4953 6.3168 18.3333 9.9987 18.3333C13.6806 18.3333 16.6654 17.4953 16.6654 16.4614C16.6654 15.8703 15.6894 15.3431 14.1654 15" stroke="#F07407" stroke-width="1.25" stroke-linecap="round"/>
                      <path class="group-hover:stroke-white" d="M12.0827 7.4974C12.0827 8.64798 11.1499 9.58073 9.99935 9.58073C8.84877 9.58073 7.91602 8.64798 7.91602 7.4974C7.91602 6.3468 8.84877 5.41406 9.99935 5.41406C11.1499 5.41406 12.0827 6.3468 12.0827 7.4974Z" stroke="#F07407" stroke-width="1.25"/>
                      <path class="group-hover:stroke-white" d="M11.0472 14.5754C10.7661 14.8461 10.3904 14.9974 9.99952 14.9974C9.60852 14.9974 9.23285 14.8461 8.95177 14.5754C6.37793 12.0814 2.92867 9.29531 4.61077 5.2505C5.52027 3.0635 7.70347 1.66406 9.99952 1.66406C12.2955 1.66406 14.4787 3.0635 15.3882 5.2505C17.0682 9.29023 13.6273 12.09 11.0472 14.5754Z" stroke="#F07407" stroke-width="1.25"/>
                    </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">Dirección</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            {{$item->address}} - {{ $item->district }} - {{ $item->city }}
                        @endforeach
                    </p>
                  </div>
      
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path class="group-hover:stroke-white" d="M15 1.66797V3.33464M5 1.66797V3.33464" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M2.08398 10.2027C2.08398 6.57162 2.08398 4.75607 3.12742 3.62803C4.17085 2.5 5.85023 2.5 9.20898 2.5H10.7923C14.1511 2.5 15.8305 2.5 16.8739 3.62803C17.9173 4.75607 17.9173 6.57162 17.9173 10.2027V10.6307C17.9173 14.2617 17.9173 16.0773 16.8739 17.2053C15.8305 18.3333 14.1511 18.3333 10.7923 18.3333H9.20898C5.85023 18.3333 4.17085 18.3333 3.12742 17.2053C2.08398 16.0773 2.08398 14.2617 2.08398 10.6307V10.2027Z" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M2.5 6.66797H17.5" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">Horario de atendimiento</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            {!! str_replace(',', '<br>', $item->schedule) !!}
                        @endforeach
                    </p>
                  </div>
                </div>
            </div>
      
        </section> --}}

    </main>


@section('scripts_importados')
    <script>

        var swiper = new Swiper(".slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
            },
            pagination: {
                el: ".slider-pagination",
                clickable: true,
            },
        });



        var swiper = new Swiper(".ofertas", {
            slidesPerView: 2.2,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 1.2,

                  
                },
                850: {
                    slidesPerView: 1.3,

                  
                },
                920: {
                    slidesPerView: 1.4,

                  
                },
                1024: {
                    slidesPerView: 1.6,
                  
                },
                1280: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 2.4,
                    spaceBetween: 20,
                  
                },
                1600: {
                    slidesPerView: 2.9,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".planes", {
            slidesPerView: 3.5,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 1.5,

                  
                },
                850: {
                    slidesPerView: 2,

                  
                },
                920: {
                    slidesPerView: 2.5,

                  
                },
                1024: {
                    slidesPerView: 2.5,
                  
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                  
                },
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".lugares", {
            slidesPerView: 3,
            direction: 'vertical',
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
        });

        var swiper = new Swiper(".slider_blog", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2000, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                750: {
                    slidesPerView: 2,
                   
                },
                1250: {
                    slidesPerView: 3,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });

        var swiper = new Swiper(".categorias", {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            navigation: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                  
                },
                1024: {
                    slidesPerView: 3,
                  
                },
                1224: {
                    slidesPerView: 4,
                  
                },
            },
        });


        var swiper = new Swiper(".slider_productos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2000, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                600: {
                    slidesPerView: 2,
                   
                },
                950: {
                    slidesPerView: 3,
                   
                },
                1200: {
                    slidesPerView: 4,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });


        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                }
            },

        });
    </script>
    <script>
        // Obtener información del navegador y del sistema operativo
        const platform = navigator.platform;
        document.getElementById('sistema').value = platform;

        // Obtener la geolocalización del usuario (si se permite)
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitud').value = position.coords.latitude;
                document.getElementById('longitud').value = position.coords.longitude;
            });
        }

        // Obtener la página de referencia
        const referrer = document.referrer;
        document.getElementById('llegade').value = referrer;


        // Obtener la resolución de la pantalla
        const screenWidth = window.screen.width;
        const screenHeight = window.screen.height;
        document.getElementById('anchodispositivo').value = screenWidth;
        document.getElementById('largodispositivo').value = screenHeight;
    </script>
@stop

@stop
