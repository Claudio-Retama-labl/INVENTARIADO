<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Dependencia;
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
        $personal = DB::table('personals')->get();
        return view('articulos.index', compact('data', 'categorias', 'financiamientos', 'dependencias','personal'));



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
            'color' => $request->input('color'),
            'especificaciones' => $request->input('especificaciones'),

           'numero_caja' =>  $request->input('numero_caja'),
            'categorias_id' => $request->input('categorias'),
            'dependencias_id' => $request->input('dependencia'),
            'financiamiento_id' => $request->input('financiamiento'),

            'personal_id' => $request->input('personal'),

            'estado_bien' => $request->input('estado_bien'),
        ]);

        
        return redirect('articulos');
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

        $articulos = Articulo::findOrFail($id);
        $dependencias = Dependencia::pluck('nombre', 'id'); // Obtén todas las categorías
    
        return view('articulos.edit', compact('articulos', 'dependencias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $articulo = Articulo::find($id);
        $articulo->name = $request->input('name');
        $articulo->update();
        return redirect('');
    }

    public function update_status($id)
    {
        $articulos = DB::table('articulos')
            ->select('estado')
            ->where('id', '=', $id)
            ->first();


        if ($articulos->estado == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        $values = array('estado' => $status);
        DB::table('articulos')->where('id', $id)->update($values);
        session()->flash('msg', 'categories status has been updated sucesfully');
        return redirect('articulos');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
