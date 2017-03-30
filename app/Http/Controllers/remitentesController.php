<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Remitente;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;

class remitentesController extends Controller
{
    //

    public function create(Request $request){
      return view('remitentes.create');
    }

    public function store(Request $request){

      $this->validate($request,[
            'nombre'                  => 'bail|required|string|max:100',
            'numero_identificacion'   => 'bail|required|integer',
            'ciudad'                  => 'bail|required|String',
            'departamento'            => 'bail|required|String',
            'direccion'               => 'bail|required|String',
            'correo_electronico'      => 'bail|required|email',
            'tipo'                    => 'bail|required|String|in:Persona natural,Entidad'
      ]);
      $input=$request->all();
      try{
          Remitente::create($input);
          Session::flash('flash_message', 'El remitente ha sido registrado en el
          sistema');
          return redirect('/remitentes');

      }
      catch(QueryException $e){
        Session::flash('flash_message', 'Ocurrio un problema con la creacion del remitente.
         verifique los datos e intente de nuevo.');
      }
      return redirect()->back();
    }

    public function show(Request $request, $id){

      try{
          $remitente = Remitente::findOrFail($id);
          return view('remitentes.show')->with('remitente',$remitente);
      }
      catch(ModelNotFoundException $e){
          Session::flash('flash_message', "El remitente seleccionado es invalido o no existe
          en el sistema");
      }
    }

    public function index(Request $request){
      $remitentes = Remitente::all();

      return view('remitentes.index', ['remitentes' => $remitentes]);

    }
    public function edit(Request $request, $id){
        try{
              $remitente = Remitente::findOrFail($id);
              return view('remitentes.edit')->with('remitente', $remitente);
        }
        catch(ModelNotFoundException $e){
          Session::flash('flash_message', "El remitente seleccionado es invalido o no existe
          en el sistema");
        }
    }

    public function update(Request $request, $id){
            try{
                    $remitente= Remitente::findOrFail($id);
                    $this->validate($request,[
                          'nombre'                  => 'required | string | max:100',
                          'numero_identificacion'   => 'required | integer',
                          'ciudad'                  => 'required | String',
                          'departamento'            => 'required | String',
                          'direccion'               => 'required | String',
                          'correo_electronico'      => 'required | email',
                          'tipo'                    => 'required | String | in:Persona natural,Entidad'
                    ]);
                    $input=$request->all();
                    $remitente->fill($input)->save();
                    Session::flash('flash_message', "La información del remitente se actualizado");
                    return redirect('/remitentes');
                  }
             catch(ModelNotFoundException $e){
                    Session::flash('flash_message', "Ha ocurrido un error, el remitente no existe
                    en la base de datos");
                    return redirect('/');
                  }

    }

    public function delete(Request $request, $id){
                    try{
                          $remitente = Remitente::findOrFail($id);
                          $remitente->delete();
                          Session::flash('flash_message', "El remitente ha sido eliminado");
                          return redirect('/remitentes');
                    }
                    catch(ModelNotFoundException $e){
                      Session::flash('flash_message', "Ha ocurrido un error, el remitente no existe
                      en la base de datos");
                      return redirect('/');
                    }

    }
}
