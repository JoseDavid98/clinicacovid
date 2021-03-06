<?php

namespace App\Http\Controllers;

use App\Models\Consultorios;
use App\Models\Doctores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DoctoresController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }




    public function index()
    {
    
        if(auth()->user()->rol !="Administrador" && auth()->user()->rol!="Secretaria"){ 
            return redirect('modulos.Inicio');
        }else
        {
            $consultorios = Consultorios::all();
            $doctores = Doctores::all();
     return view('modulos.Doctores', compact('consultorios','doctores'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $datos = request()->validate([

        'name' => ['required'],
        'sexo' => ['required'],
        'id_consultorio' => ['required'],
        'password' => ['required','string','min:3'],
        'email' => ['required','string','email','unique:users']

    ]);
    Doctores::create([

        'name'=>$datos['name'],
        'id_consultorio'=>$datos['id_consultorio'],
        'email'=>$datos['email'],
        'sexo'=>$datos['sexo'],
        'documento'=>'',
        'telefono'=>'',
        'rol'=>'Doctor',
        'password'=>Hash::make($datos['password'])
    ]);

    return redirect('Doctores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function show(Doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctores $doctores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctores $doctores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctores $doctores)
    {
        //
    }
}
