@extends('components.public.matrix', ['pagina' => 'Inicio'])
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

        #imagen-zona {
            transition: opacity 0.3s ease-in-out;
        }
        .blocker{
            z-index: 50!important;
        }
    </style>

@stop


@section('content')
    <main>
        
       
        <section class="bg-center  lg:h-svh bg-cover bg-no-repeat flex flex-col justify-center relative px-[5%] bg-[#f8f8f8]">
           
            <div class="flex flex-col lg:flex-row py-0 h-full justify-center items-start lg:items-end rounded-3xl overflow-hidden">
                
                <div class="z-20 w-full min-h-[300px] px-[5%] h-full lg:w-1/2 flex flex-col justify-center">
                    
                    <div class="flex flex-col gap-1">
                            <h3 class="font-gilroy_regular text-[#0E315D] text-xl line-clamp-1 flex flex-row gap-3 items-center">
                                {{$textoshome->title1section ?? 'Ingrese texto'}}
                            </h3>
                            <h2 class="font-gilroy_bold text-[#0B2A51] text-4xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl line-clamp-5">{{$textoshome->description1section ?? 'Ingrese texto'}}</h2>
                            <div class="hidden md:flex flex-col justify-start items-start font-gilroy_regular font-semibold">
                                <a href="{{route('contacto')}}"><div class="bg-[#0E315D] px-4 xl:px-8 py-3 my-auto rounded-3xl">
                                    <p class="leading-none text-white">Ver planes</p>
                                </div></a>
                            </div>
                    </div>

                </div>

                <div class="z-20 w-full h-full lg:w-1/2 flex flex-col justify-center items-start lg:items-end">
                    <img class="h-full object-left object-contain size-full w-full max-h-[500px] xl:max-h-none" src="{{asset('images/img/bannerhost.png')}}" />
                </div>

            </div> 
            
        </section>
        
        <section class="flex flex-col justify-center relative px-[5%] pt-10 xl:pt-16">
           <div class="max-w-3xl mx-auto text-center">
                <h2 class="font-gilroy_bold text-[#0B2A51] text-4xl md:text-4xl lg:text-5xl 2xl:text-7xl line-clamp-5">Elige el Plan Perfecto para tu Proyecto</h2>
                <h3 class="font-gilroy_regular text-[#0B2A51] text-xl line-clamp-1 flex flex-row gap-3 items-center">
                    Desde sitios personales hasta negocios en crecimiento, tenemos el hosting ideal para ti. Todos incluyen dominio GRATIS y certificado SSL.
                </h3>
           </div>
        </section>


    <div
        x-data="{
            selected: 1,
            categories: {{ json_encode($category) }},
            products: {{ json_encode($productos) }},
            general: {{ json_encode($general[0]) }},
            get filteredProducts() {
                const selectedCategory = this.categories[this.selected];
                return this.products.filter(product => product.categoria_id === selectedCategory.id);
            }
        }"
    >
        <section class="w-full relative flex justify-center items-center">
            <div class="flex flex-wrap justify-center items-center max-w-3xl mx-auto gap-x-10 font-gotham_bold w-auto overflow-hidden rounded-full bg-[#F4F4F4] mt-5">
                <template x-for="(cat, index) in categories" :key="index">
                    <div class="flex flex-row gap-5 md:gap-0 md:flex-col items-center justify-start md:justify-center md:items-center px-3 py-3 cursor-pointer">
                        <div class="flex flex-col px-5 py-2 rounded-3xl"
                            @click="selected = index" 
                            :class="selected === index 
                                ? 'bg-[#0E315D] text-white' 
                                : 'text-[#0B2A51]' " 
                            >
                            <h2 class="text-lg xl:text-xl font-gilroy_semibold" x-text="cat.name"></h2>
                        </div>
                    </div>
                </template>
            </div>
        </section>

        <section  class="bg-cover bg-opacity-100 relative py-10 lg:py-16 flex flex-col gap-10">
                
                <div class="px-[5%] md:px-[8%]  py-5 flex md:flex-row gap-5 md:gap-10 lg:-mt-10">
                    <div class="w-full">
                        <div class="swiper planes w-full">
                            <div class="swiper-wrapper">   
                                <template x-for="producto in filteredProducts" :key="producto.id">
                                    <div class="swiper-slide">
                                        <div class="flex flex-col gap-4 max-w-[390px] bg-[#FAFAFA] p-6 rounded-3xl mx-auto">
                                            
                                            <!-- Título y precio -->
                                            <div class="flex flex-col gap-4 justify-start items-start w-full">
                                                <div class="bg-[#068FFF] px-5 py-1 rounded-3xl overflow-hidden">
                                                    <h2 class="text-white text-lg font-gilroy_medium text-left w-auto line-clamp-1">
                                                        <span x-text="producto.producto"></span>
                                                    </h2>
                                                </div>
                                                <h3 class="font-gilroy_bold text-[#0B2A51] text-4xl line-clamp-2">
                                                    S/ <span x-text="producto.precio"></span>
                                                    <span class="font-gilroy_regular font-semibold tracking-wide text-[#0B2A51] text-base">/anual</span>
                                                </h3>
                                            </div>
                                            
                                            <!-- Extracto y descripción -->
                                            <div class="flex flex-col">
                                                <div class="flex flex-row gap-2 items-center">
                                                    <h2 class="font-gilroy_regular text-[#0B2A51] text-base line-clamp-3" x-text="producto.extract"></h2>
                                                </div>
                                            </div>

                                            @php
                                                    $caracteristicas = [];
                                                    if (!empty($producto->description)) {
                                                        preg_match_all('/<p>(.*?)<\/p>/s', $producto->peso, $matches);
                                                        $caracteristicas = array_filter(array_map(fn($text) => trim(strip_tags($text)), $matches[1]), fn($text) => !empty($text));
                                                    }
                                            @endphp

                                            <!-- Información adicional -->

                                            <div class="flex flex-col justify-center items-start font-gilroy_semibold group">

                                                <h3 class="font-gilroy_bold text-[#0B2A51] text-2xl">
                                                    Características
                                                </h3>
                                                
                                                    <div class="flex flex-col">
                                                        <template x-for="caracteristica in producto.caracteristicas" :key="caracteristica">
                                                            <ul class="flex flex-row gap-2 list-disc list-inside">
                                                                <li class="text-[#0B2A51] text-base font-gilroy_regular w-full" x-text="caracteristica"></li>
                                                            </ul>
                                                        </template>
                                                    </div>
                                                
                                            </div>   

                                            <!-- Botón de WhatsApp -->
                                            <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                                                <a class="w-full" target="_blank"
                                                    :href="`https://api.whatsapp.com/send?phone=${general?.whatsapp || ''}&text=${encodeURIComponent('Me interesa el servicio: ' + (producto.producto || '') + ' - ' + (producto.extract || '') + ' - S/ ' + (producto.precio || ''))}`">
                                                    <div class="bg-[#0E315D] w-full px-3 text-center py-3 rounded-3xl tracking-normal">
                                                        <p class="leading-none text-white text-lg">Comprar plan</p>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                        </div>
                                </template> 
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="px-[5%] md:px-[10%] font-gilroy_regular text-base text-center text-[#0E315D]">Nuestros planes de hosting cuentan con todo lo necesario para publicar su web y administrar sus  cuentas de correo.
                    No es necesario que Ud. Tenga  instalado Linux, a través de nuestro panel de control  podrá realizar todas las tareas
                    de administración en su  cuenta de hosting a través de cualquier explorador web.</div>
            
        </section>
    </div> 
    
        
        <section class="relative pb-10 lg:pb-16 w-full px-[5%] md:px-[8%]">
           
            <div class="flex flex-col lg:flex-row gap-10 p-5 md:p-10" style="background: linear-gradient(193deg, #FFF 5.05%, #FAFAFA 35.82%);">

                <div class="flex flex-col w-full lg:w-2/5">
                    <img class="h-full object-center  object-contain size-full w-full max-h-[500px] xl:max-h-none" src="{{asset('images/img/banner2hosting.png')}}" />
                </div>


                <div class="flex flex-col lg:justify-center gap-5  w-full lg:w-3/5">
                    
                    <div class="flex flex-col gap-2">
                        <h2 class="font-gilroy_bold text-[#0B2A51] text-4xl md:text-4xl 2xl:text-7xl line-clamp-5">Hosting que Potencia tu Éxito Online</h2>
                        <h3 class="font-gilroy_regular text-[#0B2A51] text-xl line-clamp-1 flex flex-row gap-3 items-center">
                            No es solo un hosting, es la base de tu crecimiento digital. Disfruta de velocidad ultrarrápida, seguridad avanzada y un soporte 24/7 que realmente responde.
                        </h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-5">
                        <div class="flex flex-col gap-2 max-w-xs bg-white bg-opacity-50 rounded-2xl p-5">
                            <img class="h-14 w-14 overflow-hidden rounded-full object-contain" src="{{asset('images/img/iconocohete.png')}}" />
                            <h2 class="font-gilroy_bold text-[#0E315D] text-2xl line-clamp-2 leading-none">Velocidad Optimizada</h2>
                            <p class="font-gilroy_regular text-[#0E315D] text-base line-clamp-5">Servidores con SSD y Cloudflare CDN.</p>
                        </div>

                        <div class="flex flex-col gap-2 max-w-xs bg-white bg-opacity-50 rounded-2xl p-5">
                            <img class="h-14 w-14 overflow-hidden rounded-full object-contain" src="{{asset('images/img/iconocohete.png')}}" />
                            <h2 class="font-gilroy_bold text-[#0E315D] text-2xl line-clamp-2 leading-none">Seguridad Avanzada</h2>
                            <p class="font-gilroy_regular text-[#0E315D] text-base line-clamp-5">Protección DDoS y certificados SSL gratis.</p>
                        </div>

                        <div class="flex flex-col gap-2 max-w-xs bg-white bg-opacity-50 rounded-2xl p-5">
                            <img class="h-14 w-14 overflow-hidden rounded-full object-contain" src="{{asset('images/img/iconocohete.png')}}" />
                            <h2 class="font-gilroy_bold text-[#0E315D] text-2xl line-clamp-2 leading-none">Soporte 24/7</h2>
                            <p class="font-gilroy_regular text-[#0E315D] text-base line-clamp-5">Asistencia experta en cualquier momento.</p>
                        </div>

                        <div class="flex flex-col gap-2 max-w-xs bg-white bg-opacity-50 rounded-2xl p-5">
                            <img class="h-14 w-14 overflow-hidden rounded-full object-contain" src="{{asset('images/img/iconocohete.png')}}" />
                            <h2 class="font-gilroy_bold text-[#0E315D] text-2xl line-clamp-2 leading-none">Escalabilidad</h2>
                            <p class="font-gilroy_regular text-[#0E315D] text-base line-clamp-5">Desde blogs hasta e-commerce de alto tráfico.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </main>

    @foreach ($productos as $producto)
        
        <!-- Modal Detalle -->
        <div id="modaldetalleplan-{{$producto->id}}" class="modal !bg-white !p-0 !z-50" style="display: none; max-width: 750px !important; width: 100% !important;">
            <div class="w-full flex flex-col rounded-2xl overflow-hidden">
                <div class="bg-[#EEF9E6] py-4 px-6">
                    <img
                        src="{{ asset('images/img/tc_logotelecable.svg') }}"
                        alt="Telecable"
                        class="max-w-56"
                    />

                </div>
                <div class="bg-white py-4 px-6 gap-5 flex flex-col">
                    <div class="flex flex-col">
                        <div class="flex flex-row gap-2 items-center">
                            <h2 class="font-gilroy_extrabold text-[#001637] text-4xl line-clamp-3">{{$producto->extract}}</h2>
                        </div>
                        <h2 class="-mt-2 font-gilroy_regular text-[#001637] text-sm line-clamp-2">{{$producto->name_fichatecnica}}</h2>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-7 gap-2">
                        @foreach ($producto->canals as $canal)
                            <div class="flex flex-col gap-2 justify-start items-center">
                                <img class="h-12 w-12 rounded-full" src="{{asset($canal->imagen)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                <h2 class="font-gilroy_regular text-[#001637] text-xs line-clamp-2 uppercase text-center">{{$canal->name}}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@section('scripts_importados')
    
    <script>   
        $('#modalformcotizar').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarTelefono($('#phone').val())) {
                return;
            };

            Swal.fire({

                title: 'Procesando información',
                html: `Enviando...
                    <p class=" text-text12">Revise su correo de Span</p>
                            <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                                <div role="status">
                                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                    
                                </div>
                                
                            </div>

            `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

           
            $.ajax({
                url: '{{ route('cotizar') }}',
                method: 'POST',
                data: formDataArray,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').val() // Incluye el token CSRF
                },
                success: function(response) {
                
                    Swal.close();

                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                    $('#modalformcotizar')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: "Ha ocurrido un error",
                                icon: "warning",
                            });
                            flag = true; 
                        }
                    });
                }
            });
        })
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-cotizar', function () {
                const id = $(this).data('id');

                $.ajax({
                    url: '{{ route('obtenerdata') }}',
                    method: 'POST',
                    data: {
                        id: id, 
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        $('#nombreplan').text(response.producto.producto);
                        $('#caracteristicas').text(response.producto.extract);
                        $('#name').val(response.producto.producto);
                        $('#extract').val(response.producto.extract);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });


                $(`#modalcotizar`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });

            $(document).on('click', '.botoncanales', function () {
                const id = $(this).data('id');
                $(`#modaldetalleplan-${id}`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.swiper-slide .flex');
            const mainImage = document.getElementById('imagen-zona');

            items.forEach(item => {
                item.addEventListener('click', function () {
                    const newImageSrc = this.getAttribute('data-image');
                    
                    // Aplicar efecto fade-out
                    mainImage.style.opacity = 0;

                    // Cambiar la imagen después del fade-out
                    setTimeout(() => {
                        mainImage.src = newImageSrc;

                        // Aplicar efecto fade-in
                        mainImage.style.opacity = 1;
                    }, 300); // Coincide con la duración de la transición CSS
                });
            });
        });

        var swiper = new Swiper(".slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 5000,
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
                delay: 2500,
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
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
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
                    slidesPerView: 2,
                    spaceBetween: 20,
                  
                },
                1024: {
                    slidesPerView: 3,
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
                delay: 2500,
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
                delay: 2500, 
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
                delay: 2500,
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
            spaceBetween: 15,
            loop: true,
            centeredSlides: false,
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
