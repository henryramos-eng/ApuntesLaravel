<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerosanModelo;

class Persona extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $personas;

    public function __construct(PerosanModelo $persona)
    {
        $this->persona = $personas;
    }

    public function index()
    {
        $personas = $this->personas->obtenerPersonas();
        return view('personas.lista', ['personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Store recibe informacion y los guarda
    public function store(Request $request)
    {
        //
        $persona = new PerosanModelo($request->all());
        $persona->save();
        return redirect()->action([Persona::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $persona = $this->personas->obtenerPersonaPorId($id);
        return view('alumnos.ver', ['persona' => $persona]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona = $this->persona->obtenerPersonaPorId($id);
        return view('personas.editar', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // busca
        $persona = PerosanModelo::find($id);
        // elimina 
        $persona->fill($request->all());
        // guarda el cambio
        $persona->save();
        // redirecciona a la pantalla principal
        return redirect()->action([Persona::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $persona = PerosanModelo::find($id);
        $persona->delete();
        return redirect()->action([Persona::class, 'index']);
    }
}
