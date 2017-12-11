<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Marcaje;

use App\Personal;

use Session;

class MarcajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personals = Personal:: join('marcajes', 'personals.id', '=', 'marcajes.personal_id')
                                ->select('personals.*')
                                ->get();
        $marcajes = Marcaje::all();
        return view('marcaje.index', compact('marcajes','personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personals = Personal::all();

        return view('marcaje.create', compact('personals'));
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
        

        $marcaje = new Marcaje;

        //$marcaje->nombre        = $request->nombre;
        $marcaje->personal_id   = $request->nombre;
        $passwords              = $request->password;
        $passwords              = md5($passwords);

      


        $passwordVerif = Personal::where('id', '=', $marcaje->personal_id)->get();
        foreach ($passwordVerif as $password) {
            $passwordVerif  = $password->password;
            $nombrePersonal = $password->nombre;
        }
        

        if ($passwords ==  $passwordVerif) {
            $marcaje->save();
            Session::flash('info-success', "Enhorabuena {$nombrePersonal} has marcado tu asistencia Satisfactoriamente! ");
            return redirect()->route('asistencia.create', compact('passwordVerif'));
        }else{
            Session::flash('info-warning', "{$nombrePersonal} has ingresado contraseña invalida. Intenta Nuevamente");
            return redirect()->route('asistencia.create');
        }

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
        //
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
    }
}
