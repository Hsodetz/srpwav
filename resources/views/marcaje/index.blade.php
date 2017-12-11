
@extends('layouts.master')

@section('title', 'Lista de Empleados')


@section('content')

  <div class="card center" style="width: 20rem;">
    <div class="card-header">
      <i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Empleados
    </div>
    <ul class="list-group list-group-flush">
      
      @foreach ($personals as $personal)
        <li class="list-group-item"> 
        {{ $personal->nombre }} 
        <a href="" class="badge badge-primary float-right"> Ver Asistencia </a>
        </li>
        
      @endforeach
      
    </ul>
  </div>
  
@stop

