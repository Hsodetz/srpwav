
$(document).ready(function(){
    $(document).ready(function(){
        $("body").fadeIn(1000);
    });
});

function confirm_borrado(){
    if (confirm('Esta seguro de eliminar el empleado?')){
        return true;
    }else{
        return false;
    }
}