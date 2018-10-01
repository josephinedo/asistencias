<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportePdf()
    {
      dd('llegué al método repotePdf');
    }
  
    public function index()
    {
      $materias = Materia::all();
      return view('materias.indexMaterias', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('materias.formMateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $materia = new Materia();
      $materia->materia = $request->input('materia');
      $materia->seccion = $request->input('seccion');
      $materia->crn = $request->input('crn');
      $materia->salon = $request->input('salon');
      $materia->save();
      
      return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // EL signo de interrogacion en id es para tener la opcion de no escribir nada en la ruta
      // Buscar materia con el id
      return view('materias.showMateria', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Consultar materia con id
      return view('materias.formEditMateria', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
      //validacion
      //$materia = $_POST['materia'];
      //actualizar base de datos
      //redireccionar /show/materia/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
