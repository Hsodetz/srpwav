

@if (Session::has('info-success'))
    
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        
        <h3 class="text-primary"> <i class="fa fa-check-square" aria-hidden="true"></i> </h3>

        <p> {{Session::get('info-success')}} </p>
        
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

@endif
