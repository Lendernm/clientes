@extends('layouts.base')



<div class="card-header text-center">Listado de Clientes</div>

<a class="btn btn-success" href="{{ url('/form')}}">Agregar Cliente</a>
<div class="row"></div>

  <div class="col">
     <table class="table">
       <thead class="thead-dark">

     
    
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col"></a></th>
        </tr>
     </thead>
     <tbody>
     @foreach($Setdata as $var)
     <tr>
            <td>{{$var->id}}</td>
            <td>{{$var->nombre}}</td>
            <td>{{$var->apellido_paterno}}</td>
            <td>{{$var->apellido_materno}}</td>
            <td>{{$var->email}}</td>
            <td>{{$var->telefono}}</td>

            <td>
            <a href="{{ route('editform', $var->id)}}" class="btn btn-primary" ><img src="/ico_edit.gif"   title="Editar"></a>
            </td>



            <td>
                <form action="{{ route('delete', $var->id)}}" method="POST" ></a>
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger"><a><img src="/ico_eliminar.gif"   title="Eliminar"></button>
                </form>
            </td>
        </tr> 
           
    </tr>
        
 </div>
  </td>
    
     @endforeach
     </tbody>
    </table>
   

  </div>
