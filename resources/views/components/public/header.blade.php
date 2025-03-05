<header id="main-header" class="sticky top-0 w-full z-40 bg-white">

      <div class="left-0 right-0">
        {{-- Top bar --}}
        <div class="hidden  relative font-galano_medium text-sm">
            <div class="flex flex-row justify-end items-center py-4 h-10 w-full px-[5%] text-white text-sm">
                {{-- <div class="flex flex-col justify-center items-center font-latobold">
                    <div class="bg-[#E29720] px-3 py-2 rounded-lg">
                        <p class="leading-none text-[#21149E]">Habla con nosotros</p>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- Navbar --}}
        <div class="flex justify-between w-full px-[5%]">
            <nav class="flex h-[80px] items-center justify-between gap-10 w-full">
                
                <input
                    type="checkbox"
                    id="menu"
                    class="peer/menu menu hidden"
                />

                <label for="menu" class="transition-all flex flex-col gap-1 z-40 lg:hidden hamburguesa justify-center items-center order-3 lg:order-3">   
                  <div class="bg-[#0066FF] p-3 rounded-2xl">
                      <div class="peer-checked:flex hidden">
                        <p class="w-7 h-1 bg-[#110B79] transition-transform duration-500"></p>
                        <p class="w-7 h-1 bg-[#110B79] transition-transform duration-500"></p>
                        <p class="w-7 h-1 bg-[#110B79] transition-transform duration-500"></p>
                      </div>
                      <svg class="peer-checked:hidden flex" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M8.33464 5.0013C8.33464 3.16035 6.84225 1.66797 5.0013 1.66797C3.16035 1.66797 1.66797 3.16035 1.66797 5.0013C1.66797 6.84225 3.16035 8.33464 5.0013 8.33464C6.84225 8.33464 8.33464 6.84225 8.33464 5.0013Z" stroke="#ffffff" stroke-width="1.25"/>
                        <path d="M8.33464 15.0013C8.33464 13.1604 6.84225 11.668 5.0013 11.668C3.16035 11.668 1.66797 13.1604 1.66797 15.0013C1.66797 16.8422 3.16035 18.3346 5.0013 18.3346C6.84225 18.3346 8.33464 16.8422 8.33464 15.0013Z" stroke="#ffffff" stroke-width="1.25"/>
                        <path d="M18.3346 5.0013C18.3346 3.16035 16.8422 1.66797 15.0013 1.66797C13.1604 1.66797 11.668 3.16035 11.668 5.0013C11.668 6.84225 13.1604 8.33464 15.0013 8.33464C16.8422 8.33464 18.3346 6.84225 18.3346 5.0013Z" stroke="#ffffff" stroke-width="1.25"/>
                        <path d="M18.3346 15.0013C18.3346 13.1604 16.8422 11.668 15.0013 11.668C13.1604 11.668 11.668 13.1604 11.668 15.0013C11.668 16.8422 13.1604 18.3346 15.0013 18.3346C16.8422 18.3346 18.3346 16.8422 18.3346 15.0013Z" stroke="#ffffff" stroke-width="1.25"/>
                      </svg>
                  </div>
                </label>

                <div class="flex justify-center items-center z-40">
                    <a href="{{ url('/') }}">
                        <img
                            src="{{ asset('images/img/logohostingpapaya.png') }}"
                            alt="Telecable"
                            class="max-w-56"
                        />
                    </a>
                </div>

                <ul class="bg-white flex font-gilroy_regular font-semibold text-lg pt-32 fixed inset-0 px-[5%] flex-col lg:flex-row lg:items-center clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-5 lg:gap-10 lg:clip-circle-full lg:relative lg:flex lg:justify-items-center lg:p-0 lg:bg-transparent flex-1">
                    <div class="flex flex-col lg:flex-row order-2 lg:order-1 lg:w-full lg:justify-center gap-5 lg:gap-10 text-[#001F4F]">
                        <li class="flex flex-col">
                            <a href="{{route('index')}}" class="">Planes</a>
                        </li>
                        {{-- <li class="flex flex-col">
                            <a href="{{route('novedades')}}" class="">Planes</a>
                        </li> --}}
                        {{-- <li class="flex flex-col">
                            <a href="{{route('nosotros')}}" class="">Nosotros</a>
                        </li> --}}
                        {{-- <li class="flex flex-col">
                            <a href="{{route('blog.all')}}" class="">Blog</a>
                        </li> --}}
                        <li class="flex flex-col">
                            <a href="{{route('contacto')}}" class="">Contacto</a>
                        </li>
                        {{-- <li class="flex flex-col">
                          <a id="downloadBtn"  class="cursor-pointer">Descargar App</a>
                        </li> --}}
                    </div>
                </ul>

                <div class="hidden md:flex flex-col justify-center items-center font-gilroy_regular font-semibold">
                  <a href="{{route('contacto')}}"><div class="bg-[#0E315D] px-4 py-3 my-auto rounded-3xl">
                      <p class="leading-none text-white">Más información</p>
                  </div></a>
                </div>

            </nav>

            

        </div>

        <div class="flex md:hidden flex-col  font-latobold pb-4 px-5">
          <a href="{{route('contacto')}}">
            <div class="bg-[#0066FF] px-4 py-3 my-auto rounded-3xl w-full">
                <p class="leading-none text-white text-center font-gilroy_regular font-semibold">Lo quiero ahora</p>
            </div>
          </a>
        </div>

    </div>
  {{-- <div>
    <div class="flex justify-between w-full px-[5%] mx-auto">
      <nav class="flex h-24 items-center justify-between gap-10 w-full">
        <input type="checkbox" id="menu" class="peer/menu menu hidden" />
        <label for="menu"
          class="transition-all flex flex-col gap-1 z-40 lg:hidden hamburguesa justify-center items-center order-3 lg:order-3">
          <p class="w-7 h-1 bg-white transition-transform duration-500"></p>
          <p class="w-7 h-1 bg-white transition-transform duration-500"></p>
          <p class="w-7 h-1 bg-white transition-transform duration-500"></p>
        </label>

        <div class="flex justify-center items-center z-40">
          <a href="{{ route('index') }}">
            <img id="imagenlogo" src="{{ asset('images/svg/logocadmo.svg') }}" alt="CADMO" class="h-20">
          </a>
        </div>

        <ul
          class="bg-black font-gotham_book font-medium text-white text-lg lg:text-[19px] fixed inset-0 px-[5%] flex flex-col lg:flex-row lg:items-center pt-40 clip-circle-0  peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-5 lg:gap-10 lg:clip-circle-full lg:relative lg:flex lg:justify-items-center lg:p-0 lg:bg-transparent flex-1" 
          >
                 
          <div class="flex flex-col lg:flex-row order-2 lg:order-1 lg:w-[80%] lg:justify-center gap-5 lg:gap-10 xl:gap-14">
            <li class="flex flex-col">
              <a href="{{ route('index') }}"
                class="{{ isset($pagina) && $pagina == 'index' ? 'font-semibold' : '' }}">Inicio</a>
              @if (isset($pagina) && $pagina == 'index')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            
            <li class="flex flex-col">
              <a href="{{ route('catalogo', 0) }}"
                class="{{ isset($pagina) && $pagina == 'catalogo' ? ' font-semibold' : '' }}">Productos</a>
              @if (isset($pagina) && $pagina == 'catalogo')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('innovaciones') }}"
                class="{{ isset($pagina) && $pagina == 'innovaciones' ? ' font-semibold' : '' }}">Innovaciones</a>
              @if (isset($pagina) && $pagina == 'blog')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('nosotros') }}"
                class="{{ isset($pagina) && $pagina == 'nosotros' ? ' font-semibold' : '' }}">Nosotros</a>
              @if (isset($pagina) && $pagina == 'nosotros')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('contacto') }}"
                class="{{ isset($pagina) && $pagina == 'contacto' ? ' font-semibold' : '' }}">Contacto</a>
              @if (isset($pagina) && $pagina == 'contacto')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif

            </li>
          </div>

          <div
            class="relative w-full order-1 lg:order-2  lg:w-[20%] pb-8 lg:py-0 border-b lg:border-0 border-[#082252]">
            <input id="buscarproducto" type="text" placeholder="Buscar..."
              class="w-full pl-8 pr-10 py-2 border border-[#082252] lg:border-[#E6E4E5] rounded-lg focus:outline-none focus:ring-0 text-[#082252] placeholder:text-[#082252] lg:placeholder:text-[#E6E4E5]">
            
            <span class="absolute inset-y-0 left-0 flex items-start lg:items-center px-2 pb-2 pt-[9px] lg:p-2">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.6851 13.6011C14.3544 13.2811 13.8268 13.2898 13.5068 13.6206C13.1868 13.9514 13.1955 14.4789 13.5263 14.7989L14.6851 13.6011ZM16.4206 17.5989C16.7514 17.9189 17.2789 17.9102 17.5989 17.5794C17.9189 17.2486 17.9102 16.7211 17.5794 16.4011L16.4206 17.5989ZM15.2333 9.53333C15.2333 12.6814 12.6814 15.2333 9.53333 15.2333V16.9C13.6018 16.9 16.9 13.6018 16.9 9.53333H15.2333ZM9.53333 15.2333C6.38531 15.2333 3.83333 12.6814 3.83333 9.53333H2.16667C2.16667 13.6018 5.46484 16.9 9.53333 16.9V15.2333ZM3.83333 9.53333C3.83333 6.38531 6.38531 3.83333 9.53333 3.83333V2.16667C5.46484 2.16667 2.16667 5.46484 2.16667 9.53333H3.83333ZM9.53333 3.83333C12.6814 3.83333 15.2333 6.38531 15.2333 9.53333H16.9C16.9 5.46484 13.6018 2.16667 9.53333 2.16667V3.83333ZM13.5263 14.7989L16.4206 17.5989L17.5794 16.4011L14.6851 13.6011L13.5263 14.7989Z"
                  fill="#E6E4E5" class="fill-fillAzulPetroleo lg:fill-fillPink" />
              </svg>
            </span>

            <div class="bg-white z-60 shadow-2xl top-12 w-full absolute overflow-y-auto max-h-[200px]" id="resultados"></div>  
          </div>
          
        </ul>
      </nav>
    </div>
  </div> --}}

  <div class="flex justify-end w-full mx-auto z-[100] relative">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
      <a target="_blank" id="whatsapp-toggle" 
        href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
         >
        <img src="{{ asset('images/svg/wsp.svg') }}" alt="whatsapp" class="mr-3 w-16 h-16 md:w-[85px] md:h-[85px]">
      </a>
    </div>
  </div>

  {{-- href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp2 }}&text={{ $general[0]->mensaje_whatsapp }}"   --}}
  {{-- href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}" --}}
  {{-- whatssapp --}}
  
  {{-- <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
      <a target="_blank" id="whatsapp-toggle" 
        href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
         >
        <img src="{{ asset('images/svg/image_31.svg') }}" alt="whatsapp" class="w-16 h-16 md:w-24 md:h-24">
      </a>
    </div>
  </div>

  <div class="fixed bottom-24 right-6 lg:bottom-40 z-[99] shadow-xl hidden animate-once animate-duration-1000" id="whatsapp-chat">
    <div class="w-72 h-auto rounded-xl">
      <div class="bg-green-500 font-mediumDisplay font-normal text-white text-center py-3 rounded-t-xl"> Whatsapp Chat </div>
      <div id="asesor-1" class="bg-white shadow-xl hover:bg-slate-100 cursor-pointer"  onclick="showForm('form-1')">
          <div class="flex flex-row p-3 activa">
              <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/></div>
              <div class="px-2">
                <a>
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Productos Químicos</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold">{{$general[0]->support_one}}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
              </div>
          </div>
      </div>
      <div id="asesor-2" class="bg-white shadow-xl rounded-b-xl hover:bg-slate-100 cursor-pointer"  onclick="showForm('form-2')">
        <div class="flex flex-row p-3">
            <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/>
            </div>
            <div class="px-2">
                <a >
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Tratamiento de Agua</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold ">{{$general[0]->support_two }}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
            </div>
        </div>
      </div>

      <div id="form-1" class="bg-white p-4 hidden">
        
        <form class="space-y-2" id="dataWhatsapp">
          @csrf
          <input type="text" name="full_name" placeholder="Nombre Completo" 
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="email" name="email" 
              placeholder="Correo Electrónico"
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                  text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="text" name="phone" placeholder="Teléfono"
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                    text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">
          <input type="hidden" name="client_width" id="anchodispositivo">
          <input type="hidden" name="client_height" id="largodispositivo">
          <input type="hidden" name="client_latitude" id="latitud">
          <input type="hidden" name="client_longitude" id="longitud">
          <input type="hidden" name="client_system" id="sistema">
          <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Productos Químicos" />
             

          <button type="submit"
              class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
              <span>Enviar</span>
          </button>
      </form>
        <button onclick="hideForm('form-1')" class="mt-2 text-red-500 font-regularDisplay font-semibold">Cerrar</button>
    </div>

    <!-- Formulario Asesor 2 -->
    <div id="form-2" class="bg-white p-4 hidden">
        
      <form class="space-y-2" id="dataWhatsapp2">
        @csrf
        <input type="text" name="full_name" placeholder="Nombre Completo" required
            class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
              text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

        <input type="email" name="email" id="email_wsp"
            placeholder="Correo Electrónico" required
            class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

        <input type="text" name="phone" id="telefono_wsp" placeholder="Teléfono"
            required
            class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                  text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">
          <input type="hidden" name="client_width" id="anchodispositivo">
          <input type="hidden" name="client_height" id="largodispositivo">
          <input type="hidden" name="client_latitude" id="latitud">
          <input type="hidden" name="client_longitude" id="longitud">
          <input type="hidden" name="client_system" id="sistema">
          <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Tratamiento de Agua" />

          <button type="submit"
            class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
            <span>Enviar</span>
        </button>
    </form>
        <button onclick="hideForm('form-2')" class="mt-2 text-red-500 font-regularDisplay font-semibold">Cerrar</button>
    </div>

    </div>
  </div> --}}

</header>

<div id="loadingScreen" class="contenedor z-50" style="display: none;">
  <div class="flex flex-col justify-center items-center"><img class="w-40 rounded-full" src="{{asset('images/img/apptc.png')}}" /></div>
  <div class="loader hidden"></div>
  <p class="loading-text font-gilroy_regular">Descargado</p>
  <div class="progress-bar">
      <div class="progress"></div>
  </div>
</div>

<script> 
  document.getElementById('downloadBtn').addEventListener('click', function() {
      document.getElementById('loadingScreen').style.display = 'flex';
      
      const loadingText = document.querySelector('.loading-text');
      const progress = document.querySelector('.progress');
      let dots = '', progressWidth = 0;
  
      const textInterval = setInterval(() => {
          loadingText.textContent = 'Descargando' + (dots = dots.length < 3 ? dots + '.' : '');
      }, 500);
  
      const progressInterval = setInterval(() => {
          progress.style.width = (progressWidth += 2) + '%';
          if (progressWidth >= 100) {
              clearInterval(textInterval);
              clearInterval(progressInterval);
              loadingText.textContent = '¡Descarga completada!';
              document.querySelector('.loader').style.display = 'none';
              
              setTimeout(() => {
                  const link = document.createElement('a');
                  link.href = 'apk/TcPlay(3.0.2).apk'; // Cambia por la ruta real del archivo
                  link.download = 'TcPlay(3.0.2).apk';
                  document.body.appendChild(link);
                  link.click();
                  document.body.removeChild(link);
                  document.getElementById('loadingScreen').style.display = 'none';
              }, 300);
          }
      }, 100);
  });
</script>
<script>
  function showForm(formId) {
    // Oculta todos los formularios
    document.getElementById('form-1').classList.add('hidden');
    document.getElementById('form-2').classList.add('hidden');
    document.getElementById('asesor-1').classList.add('hidden');
    document.getElementById('asesor-2').classList.add('hidden');
    // Muestra el formulario correspondiente
    document.getElementById(formId).classList.remove('hidden');
    }

    function hideForm(formId) {
        document.getElementById(formId).classList.add('hidden');
        document.getElementById('asesor-1').classList.remove('hidden');
    document.getElementById('asesor-2').classList.remove('hidden');
    }

  const menu = document.querySelector(".menu");
  const body = document.body;
  menu.addEventListener("click", (e) => {
    body.classList.toggle("overflow-hidden");
  });
</script>

<script>
  document.getElementById('whatsapp-toggle').addEventListener('click', function() {
      var chatBox = document.getElementById('whatsapp-chat');
      if (chatBox.classList.contains('hidden')) {
          chatBox.classList.remove('hidden');
          chatBox.classList.add('animate-fade-up');
      } else {
          chatBox.classList.add('hidden');
          chatBox.classList.remove('animate-fade-up');
      }
  });
</script>

<script>
  
  $(document).ready(function() {
    $('#buscarproducto').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados').html(resultsHtml);
          }
        });
      } else {
        $('#resultados').empty();
      }
    });
  });


  $(document).ready(function() {
    $('#buscarproducto2').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados2').html(resultsHtml);
          }
        });
      } else {
        $('#resultados2').empty();
      }
    });
  });
</script>

<script>
    document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');

      if (input && resultados) { // Verificar que ambos elementos existen
          var isClickInsideInput = input.contains(event.target);
          var isClickInsideResultados = resultados.contains(event.target);

          if (!isClickInsideInput && !isClickInsideResultados) {
              input.value = '';
              $('#resultados2').empty();
          }
      }
  });

  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');

      // Verificar que los elementos existen
      if (input && resultados) {
          var isClickInsideInput = input.contains(event.target);
          var isClickInsideResultados = resultados.contains(event.target);

          if (!isClickInsideInput && !isClickInsideResultados) {
              input.value = '';
              $('#resultados2').empty();
          }
      }
  });
</script>
{{-- <script>
       function applyScrollStyles() {
            const header = document.getElementById('main-header');
            const logo = document.getElementById('imagenlogo');
        
            if (window.scrollY > 50) {
              header.classList.add('bg-[#21149E]'); 
              header.classList.remove('bg-transparent');      
            } else {
              header.classList.add('bg-transparent');
              header.classList.remove('bg-[#21149E]');
            }
        }
        window.addEventListener('DOMContentLoaded', applyScrollStyles);
        window.addEventListener('scroll', applyScrollStyles);
</script> --}}