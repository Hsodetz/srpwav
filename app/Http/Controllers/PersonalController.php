<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegistroRequest;

use App\Personal;

use Session;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personals = Personal::all();
        
        return view('personal.index', compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRequest $request)
    {
        //
        $personal = new Personal;

        $personal->nombre   = $request->nombre;
        $personal->apellido = $request->apellido;
        $personal->cedula   = $request->cedula;
        $personal->password = $request->password;
        $personal->password = md5($personal->password);

        $personal->save();

        return redirect('personal');        

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Obtenemos el registrro del id que vamos a editar
        $personal = Personal::findOrFail($id);
        
        // Retornamos a la vista edit y le pasamos la variable personal
        return view('personal.edit', compact('personal'));   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroRequest $request, $id)
    {
        // Obtenemos el registrro del id que vamos a editar
        $personal = Personal::findOrFail($id);
    
        // lUEGO RECIBIMOS TODOS LOS CAMPOS
        $personal->nombre   = $request->nombre;
        $personal->apellido = $request->apellido;
        $personal->cedula   = $request->cedula;
        $personal->password = $request->password;
        $personal->password = md5($personal->password);

        $personal->save();

        Session::flash('info-success', "El empleado {$personal->nombre} {$personal->apellido} se ha actualizado correctamente!");
        
        return redirect()->route('personal.index');
        

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
        $personal = Personal::findOrFail($id);

        $personal->delete();

        Session::flash('info-success', "El empleado {$personal->nombre} {$personal->apellido} se ha eliminado correctamente!");

        return redirect()->route('personal.index');
    }
}
