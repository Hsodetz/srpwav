
@extends('layouts.master')

@section('title', 'Registro')


@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="card border-dark">
                <div class="card-header bg-dark text-light">
                    Registro de Personal
                </div>
                    <div class="col-md-12" style="margin-top: 2%;">
                        {!! Form::open(['action' => 'PersonalController@store', 'method' => 'post']) !!}

            
                            @include('personal.formulario')
            

                        {!! Form::close() !!}
                    </div>
            </div>    
        </div>

        <div class="col-md-6">
        
            
            @include('includes/errorvalidation')
            

        </div>
    
    </div>
    
@stop

