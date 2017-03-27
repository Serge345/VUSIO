<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;

class documentsController extends Controller
{
    //


    public function create(Request $request){

      $remitentes= Remitente::pluck('nombre', 'id')->all();
      $tipo_documento= tipoDocumento::pluck('nombre', 'id')->all();
      $destinatarios= Destinatario::pluck('nombre', 'id')->all();
      return view('documentos.create')->with('tipo',$tipo_documento)
      ->with('remitente',$remitentes)->with('destinatario', $destinatarios);
    }

    public function store(Request $request){

       $this->validate($request, [
            'numero_radicado'   => 'required | integer',
            'nombre'            => 'required | string | max:100',
            'descripcion'       => 'required | string ',
            'tipo'              => 'required | integer',
            'remitente'         => 'required | integer',
            'destinatario'      => 'required | integer'
        ]);
        $carbon= Carbon::now();
        $fecha_entrada= $carbon->format('d-m-Y');
        $input= $request->all();
        try{
          Documento::create(
          'numero_radicado' => $input['numero_radicado'],
          'nombre'          => $input['nombre'],
          'descripcion'     => $input['descripcion'],
          'tipo'            => $input['tipo'],
          'remitente'       => $input['remitente'],
          'destinatario'    => $input['destinatario'],
          'fecha_entrada'   => $fecha_entrada
          );
          Session::flash('flash_message', 'El documento ha sido registrado en el
          sistema');
        }
        catch(QueryException $e){
          Session::flash('flash_message', 'Ocurrio un problema con el ingreso
          del archivo. verifique los datos e intente de nuevo.');
        }

    }

    public function show(Request $request, $id){

    }

    public function index(Request $request){

    }
    public function edit(Request $request, $id){

    }

    public function update(Request $request, $id){

    }

    public function delete(Request $request, $id){

    }
}
