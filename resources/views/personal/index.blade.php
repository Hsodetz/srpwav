
@extends('layouts.master')

@section('title', 'Listado')

@section('content')

<div class="row">
    <div class="col-md-8">

        <div class="card border-dark">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-list" aria-hidden="true"></i> 
                Listado de Empleados
                <span class="float-right badge badge-light text-info"> {{ $personals->count() }} empleados </span>
        </div>
        <div class="card-body">
            <table class="table text-center table-sm table-striped table-responsive-sm">
                <thead class="bg-dark text-light">
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Documento de Identidad</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($personals as $personal)
                        <tr>
                            <td> {{ $personal->nombre }} </td>
                            <td> {{ $personal->apellido }}  </td>
                            <td> {{ $personal->cedula }}  </td>
                            <td> 
                                   
                                <div class="btn-group">
                                    <a href="{{route('personal.edit', $personal->id)}}" class="btn btn-outline-info btn-sm form-group"> 
                                        Editar   
                                    </a>
                                        &nbsp
                                    {!! Form::open(['route' => ['personal.destroy', $personal->id], 'method' => 'DELETE', 'style'=>'display:inline-block']) !!}
                                        
                                        {!! Form::submit('Eliminar', ['method' => 'delete', 'onclick' => 'return confirm_borrado()', 'class' => 'btn btn-outline-danger btn-sm form-group']) !!} 
                                    
                                    {!! Form::close() !!}
                               </div>
                                
                            </td>
                            
                        </tr>
                     @endforeach    
                </tbody>
            </table>
        </div>
    </div>

    </div>

    <div class="col-md-4">
  
        @include('includes/infosucces')
        
    </div>   

</div>
   
@stop


