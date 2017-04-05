<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_documento;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;


class tipoDocumentosController extends Controller
{
    //

    public function create(Request $request){
      return view('tipoDocumento.create');
    }

    public function store(Request $request){
        $this->validate($request,[
          'nombre'              => 'required | String | max:150',
          'descripcion'         => 'required | String ',
          'tiempo_respuesta'    => 'required | integer'
        ]);
        $input = $request->all();
        try{
            tipo_documento::create($input);
            Session::flash('flash_message', "El tipo de documento se ha añadido al sistema");
            return redirect('/tipos');
        }
        catch(QueryException $e){
          Session::flash('flash_message',"Ocurrio un problema en la creación del tipo.
          Verifique los datos e intente de nuevo");
        }

    }

    public function show(Request $request, $id){
        try{
            $tipo_documento = tipo_documento::findOrFail($id);
            return view('tipoDocumento.show')->with('tipo_documento', $tipo_documento);
        }
        catch(ModelNotFoundException $e){
          Session::flash('flash_message', "El tipo de documento solicitado no ha seleccionado
          creado en el sistema");
          return redirect('/');
        }
    }

    public function index(Request $request){

        $tipo_documentos = tipo_documento::all();
        return view('tipoDocumento.index')->with('tipo_documentos' ,$tipo_documentos);

    }
    public function edit(Request $request, $id){
        try{
              $tipo_documento = tipo_documento::findOrFail($id);
              return view('tipoDocumento.edit')->with('tipo_documento', $tipo_documento);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El tipo de documento seleccionado no está en el sistema");
            return redirect('/');
        }
    }

    public function update(Request $request, $id){
        try{
          $this->validate($request,[
            'nombre'              => 'required | String | max:150',
            'descripcion'         => 'required | String',
            'tiempo_respuesta'    => 'required | integer'
          ]);
          $input = $request->all();
          $tipo_documento = tipo_documento::findOrFail($id);
          $tipo_documento->fill($input)->save();
          Session::flash('flash_message', "El tipo de documento se ha actualizado");
          return redirect('/tipos');
        }
        catch(ModelNotFoundException $e){
          Session::flash('flash_message', "El tipo de documento solicitado no existe en el sistema");
          return redirect('/');
        }
    }

    public function delete(Request $request, $id){
        try{
              $tipo_documento = tipo_documento::findOrFail($id);
              $tipo_documento->delete();
              Session::flash('flash_message', "El tipo de documento ha sido eliminado");
              return redirect('/tipos');
        }
        catch(ModelNotFoundException $e){
              Session::flash('flash_message', "El tipo de documento solicitado no está en la base de datos");
              return redirect('/');
        }
    }
}
