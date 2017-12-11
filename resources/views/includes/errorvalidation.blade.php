

@if (count($errors) > 0)

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        
        <h3> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> </h3>

        <ul>
            @foreach ($errors->all() as $msgError)
                <li> {{ $msgError }} </li>
            @endforeach
        </ul>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
@endif
