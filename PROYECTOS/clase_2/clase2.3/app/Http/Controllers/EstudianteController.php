<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $estudiantes;

    // DESARROLLANDO EL CONSTRUCTOR ELOQUENT

    public function __construct(Estudiante $estudiantes)
    {
        $this->estudiante = $estudiantes;
    }

    public function index()
    {
        $estudiantes =  $this->estudiantes->obtenerEstudiantes();
        return view('estudiantes.lista', ['estudiantes' => $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiantes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $estudiante = new Estudiante($request->all());
        $estudiante->save();
        return redirect()->action([EstudianteController::class, 'index']);
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
        $estudiante = $this->estudiantes->obternerEstudiantePorId($id);
        return view('estudiantes.ver', ['estudiante' => $estudiante]);
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
        $estudiante = $this->estudiantes->obternerEstudiantePorId($id);
        return view('estudiantes.editar', ['estudiante' => $estudiante]);
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
        //
        $estudiante = Estudiante::find($id);

        $estudiante->fill($request->all());
        $estudiante->save();
        return redirect()->action([EstudianteController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->action([Estudiante::class, 'index']);
    }
}
