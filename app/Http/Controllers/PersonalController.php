<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

       
        $personal = DB::table('personals')->get();
        return view('personal.index', compact('personal'));

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
        //
        $personal = new Personal();
        $personal::create([
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'cargo' => $request->input('cargo'),
        ]);

        return redirect('Personal');
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
