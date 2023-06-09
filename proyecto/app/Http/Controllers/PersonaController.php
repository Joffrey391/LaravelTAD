<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['personas']=Persona::paginate(5);
        return view('persona.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosPersona = request()->all();
        $datosPersona = request()->except('_token');
        Persona::insert($datosPersona);
        return response()->json($datosPersona);

    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $persona=Persona::findOrFail($id);
        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosPersona = request()->except(['_token', _method]);
        Persona::where('id', '=', $id)->update($datosPersona);

        $persona=Persona::findOrFail($id);
        return view('persona.edit', compact('persona'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('persona');
    }
}
