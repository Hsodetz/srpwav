
<div class="form-group">

	{{ Form::label('nombre', 'Nombre') }}

        <select class="form-control" name="nombre">
            <option value=""> Seleccione el Empleado </option>
            @foreach ($personals as $personal)
		        <option value="{{ $personal->id }}"> {{ $personal->nombre }} </option>
		    @endforeach
	    </select>
    
</div>

<div class="form-group">

	{{ Form::label('password', 'Password') }}

	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese password']) }}

</div>

<div class="form-group float-right">

	{{ Form::submit('Ingresar', ['class' => 'btn btn-success btn-sm']) }}

</div>


