<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{

    public function index()
    {
        $peliculas = Pelicula::all();

        return response()->json($peliculas);
    }

    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->nombre = $request->nombre;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->imagen = $request->imagen;
        $pelicula->video = $request->video;
        $pelicula->save();
        return response()->json($pelicula);
    }

    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        return response()->json($pelicula);
    }

    public function update(Request $request, $id)
    {

        $pelicula = Pelicula::find($id);
        $pelicula->nombre = $request->nombre;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->imagen = $request->imagen;
        $pelicula->save();
        return response()->json($pelicula);
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return response()->json($pelicula);
    }
    
}
