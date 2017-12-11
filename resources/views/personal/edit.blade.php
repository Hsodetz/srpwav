
@extends('layouts.master')

@section('title', 'Editar Empleado')


@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card border-dark">
            <div class="card-header bg-dark text-light">
                Registro de Personal
            </div>
            <div class="col-md-12" style="margin-top: 2%;">

                {!! Form::model($personal, ['route' => ['personal.update', $personal->id], 'method' => 'PUT']) !!}
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

