<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;
use App\Destinatario;

class destinatariosController extends Controller
{
    //
    public function create(Request $request){
      return view('destinatarios.create');
    }

    public function store(Request $request){
      $this->validate($request,[
            'nombre'                  => 'bail|required|String | max:100',
            'numero_identificacion'   => 'bail|required|integer',
            'cargo'                   => 'bail|required|String',
            'dependencia'             => 'bail|required|String',
            'direccion'               => 'bail|required|String',
            'correo_electronico'      => 'bail|required|email'
      ]);
      $input=$request->all();
      try{
          Destinatario::create($input);
          Session::flash('flash_message', 'El destinatario ha sido registrado en el
          sistema');
          return redirect('/destinatarios');

      }
      catch(QueryException $e){
        Session::flash('flash_message', 'Ocurrio un problema con la creacion del destinatario.
         verifique los datos e intente de nuevo.');
      }
      return redirect()->back();

    }

    public function show(Request $request, $id){

      try{
          $destinatario = Destinatario::findOrFail($id);
          return view('destinatarios.show')->with('destinatario',$destinatario);
      }
      catch(ModelNotFoundException $e){
          Session::flash('flash_message', "El destinatario seleccionado es invalido o no existe
          en el sistema");
      }
    }

    public function index(Request $request){

      $destinatarios = Destinatario::all();

      return view('destinatarios.index', ['destinatarios' => $destinatarios]);
    }
    public function edit(Request $request, $id){
      try{
            $destinatario = Destinatario::findOrFail($id);
            return view('destinatarios.edit')->with('destinatario', $destinatario);
      }
      catch(ModelNotFoundException $e){
        Session::flash('flash_message', "El destinatario seleccionado es invalido o no existe
        en el sistema");
      }
    }

    public function update(Request $request, $id){
          try{
            $destinatario= destinatario::findOrFail($id);
            $this->validate($request,[
                  'nombre'                  => 'required | string | max:100',
                  'numero_identificacion'   => 'required | integer',
                  'cargo'                  => 'required | String',
                  'dependencia'            => 'required | String',
                  'direccion'               => 'required | String',
                  'correo_electronico'      => 'required | email'
            ]);
            $input=$request->all();
            $destinatario->fill($input)->save();
            Session::flash('flash_message', "La información del destinatario se actualizado");
            return redirect('/destinatarios');
          }
          catch(ModelNotFoundException $e){
            Session::flash('flash_message', "Ha ocurrido un error, el destinatario no existe
            en la base de datos");
            return redirect('/');
          }
    }

    public function delete(Request $request, $id){
            try{
                  $destinatario = Destinatario::findOrFail($id);
                  $destinatario->delete();
                  Session::flash('flash_message', "El destinatario ha sido eliminado");
                  return redirect('/destinatarios');
            }
            catch(ModelNotFoundException $e){
              Session::flash('flash_message', "Ha ocurrido un error, el destinatario no existe
              en la base de datos");
              return redirect('/');
            }
    }
}
