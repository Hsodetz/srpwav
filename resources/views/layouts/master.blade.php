<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SRPWAV - @yield('title')</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/font-awesome-4.7.0/css/font-awesome.css') !!}
    

</head>
<body style="display: none;">


@include('includes.navbar')


<div class="container" style="margin-top: 3%;">
    @yield('content')
</div>

<div class="card-footer text-muted fixed-bottom bg-dark text-center">
    &copy; WAV 2017 por Helmuth Sodetz
</div>

<script src=" {{ asset('js/jquery-3.2.1.min.js') }} "></script>  
<script src=" {{ asset('js/bootstrap.js') }} "></script>
<script src=" {{ asset('js/bundle.js') }} "></script>
<script src=" {{ asset('js/myscript.js') }} "></script>       
</body>
</html>