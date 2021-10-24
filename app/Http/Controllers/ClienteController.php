<?php

namespace App\Http\Controllers;
use  App\Models\Cliente;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClienteController extends Controller
{

    public function lista(){
        $data['Setdata']=Cliente::paginate(5);
        return view('cliente.lista',$data);
    }




       public function clienteform(){
           return view('cliente.clienteform');
       }


       //guardar
       public function save(Request $request){
           $validator= $this->validate($request,[
               'nombre'=>'required|string|max:255',
               'email'=>'required|string|max:255|email|unique:clientes'
           ]);

           $userdata= request()->except('_token');
          Cliente::insert($userdata);
        return back()->with('usuarioGuardado', 'Usuario Guardado');
    }

    //eliminar cliente
    public function delete($id){
        Cliente::destroy($id);
        return back()->with('usuarioEliminado', 'Usuario Eliminado');
    }

   
    //editar cliente
    public function editform($id){
        $cliente=Cliente::findOrfail($id);
        return view('cliente.editform',compact('cliente'));
       
    }
    public function edit(Request $request,$id){
        $datoscliente= request()->except((['_token','_method']));
        cliente::where ('id','=',$id)->update($datoscliente);
        return back()->with('usuarioModificado', 'Usuario Modificado');
       
    }  
}
