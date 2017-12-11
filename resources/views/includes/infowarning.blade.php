@if (Session::has('info-warning'))
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        
        <h3> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> </h3>

        <p> {{Session::get('info-warning')}} </p>
        
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

@endif