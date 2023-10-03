<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticulosController extends Controller
{
    public function __construct()
    {
      
    }

    public function index()
    {
        $data = DB::table('articulos')->get();
        $categorias  = DB::table('categorias')->get();
        $financiamientos = DB::table('financiamientos')->get();
        $dependencias = DB::table('dependencias')->get();
        return view('articulos.index', compact('data', 'categorias', 'financiamientos', 'dependencias'));
    


       /*  $articulos = DB::table('articulos')
        ->join('dependencias', 'dependencias.id', '=', 'articulos.dependencias_id')
        ->join('categorias', 'categorias.id', '=', 'articulos.categorias_id')
        ->join('financiamientos', 'financiamientos.id', '=', 'articulos.financiamiento_id')
        ->select('articulos.*', 'financiamientos.nombre as nombre_financiamiento', 'categorias.nombre as nombre_categoria',
        'dependencias.nombre as nombre_dependencia'
        )
        ->get();
        dd($articulos); */

    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos::create([
            'nombre' => $request->input('nombre'),
            'serial' => $request->input('serial'),
            'modelo' => $request->input('modelo'),
            'especificaciones' => $request->input('especificaciones'),
            'color' => $request->input('color'),
            
            'dependencias_id' => $request->input('dependencia'),
            'categorias_id' => $request->input('categorias'),
            'financiamiento_id' => $request->input('financiamiento_id'),
            'estado_bien' => $request->input('estado_bien'),
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
