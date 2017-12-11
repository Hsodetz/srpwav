
@extends('layouts.master')


@section('title', 'Registro de Asistencia')
    
@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="card border-dark">
                <div class="card-header bg-dark text-light">
                    Registro de Asistencia del Personal
                    <span class="float-right badge badge-light text-success"> {{ date('d-m-Y H:i') }} </span>    
                </div>
                    <div class="col-md-12" style="margin-top: 2%;">
                        {!! Form::open(['action' => 'MarcajeController@store', 'method' => 'post']) !!}

            
                            @include('marcaje.formulario')
            

                        {!! Form::close() !!}
                    </div>
            </div>    
        </div>

        <div class="col-md-6">
        
            
            @include('includes/errorvalidation')
            @include('includes/infosucces')
            @include('includes/infowarning')
            

        </div>
    
    </div>
    

@stop

