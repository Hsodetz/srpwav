

<div class="form-group">

	{{ Form::label('nombre', 'Nombre') }}

	{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) }}

</div>

<div class="form-group">

	{{ Form::label('apellido', 'Apellido') }}

	{{ Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese apellido']) }}

</div>

<div class="form-group">

	{{ Form::label('cedula', 'Documento de Identidad') }}

	{{ Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese numero de documento de identidad']) }}

</div>

<div class="form-group">

	{{ Form::label('password', 'Password') }}

	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese password']) }}

</div>

<div class="form-group float-right">

	{{ Form::submit('Enviar', ['class' => 'btn btn-success btn-sm']) }}

</div>