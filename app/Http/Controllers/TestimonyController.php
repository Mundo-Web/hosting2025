<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use App\Http\Requests\StoreTestimonyRequest;
use App\Http\Requests\UpdateTestimonyRequest;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimony = Testimony::where("status", "=", true)->get();

        return view('pages.testimonies.index', compact('testimony'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.testimonies.create');
    }

    public function saveImg($file, $route, $nombreImagen){
		$manager = new ImageManager(new Driver());
		$img =  $manager->read($file);        
        // $img->coverDown(198, 72, 'center'); 
		if (!file_exists($route)) {
			mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
	}
		$img->save($route . $nombreImagen);
	}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
        ]);
        
        $testimony = new Testimony(); 

        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/testimonios/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $this->saveImg($file, $routeImg, $nombreImagen);

            $testimony->ocupation = $routeImg . $nombreImagen;
         
        }

        $testimony->name = $request->name;
        $url = $request->video;
        $testimony->email = $request->cargo;
        $testimony->testimonie = $request->testimonie;
        $testimony->status = 1;
        $testimony->visible = 1;

        $testimony->save();
       
        return redirect()->route('testimonios.index')->with('success', 'Testimonio creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimony $testimony, $id)
    {
        $testimony = Testimony::findOrfail($id);

        return view('pages.testimonies.edit', compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'name' => 'required',
        ]);
        
        $testimony = Testimony::findOrfail($id); 

        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/testimonios/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            File::delete($testimony->ocupation);

            $this->saveImg($file, $routeImg, $nombreImagen);

            $testimony->ocupation = $routeImg . $nombreImagen;
        }


        $url = $request->video;
        
        if ($testimony->email == $url) {
        $testimony->email == $url;
        }else{
        $testimony->email = $this->getYTVideoId($url);
        }

        // $testimony->name = $request->name;
         $testimony->email = $request->cargo;
        // $testimony->ocupation = $request->ocupation;
        // $testimony->testimonie = $request->testimonie;
        // $testimony->ocupation = $request->ocupation;
        // $testimony->status = $request->status;

        $testimony->update($request->all());

        $testimony->save();

        return redirect()->route('testimonios.index')->with('success', 'Testimonio modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimony $testimony)
    {
        //
    }

    public function deleteTestimony(Request $request)
    {
        $id = $request->id;
        //Busco el servicio con id como parametro
        $testimony = Testimony::findOrfail($id); 
        //Modifico el status a false
        $testimony->status = false;
        //Guardo 
        $testimony->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Testimonio eliminado.']);
    }


    private function getYTVideoId($url)
  {
      $patterns = [
        '/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', // URL estándar
        '/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+)/', // URL corta
        '/(?:https?:\/\/)?(?:www\.)?youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', // URL embebida
        '/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)(?:&.*)?/', // URL estándar con parámetros adicionales
      ];
      foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
          return $matches[1];
        }
      }
      return null;
  }

    
    public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
        //return response()->json(['mensaje' => 'Solicitud AJAX manejada con éxito']);
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $testimony = Testimony::findOrFail($id);
        
        $testimony->$field = $status;

        $testimony->save();

         return response()->json(['message' => 'Estado modificado.']);
    
    }
}
