<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- asset apunta automáticamente hacia la carpeta public y hace la referncia automática y dinámica 
        por lo que no tenemos que escribirlo así <link href="public/css/app.css" rel="stylesheet"> -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script src="{{asset('js/app.js')}}"  defer ></script>

        <title>Devstagram - @yield('title')</title>
            
    </head>
    <body class="bg-gray-100">
        <nav>
            <a href="/">Principal</a>
            <a href="/nosotros">Nosotros</a>
            <a href="/store">Tienda</a>
        </nav>

        <h1 class="text-2xl">@yield('title')</h1>   
        
        <hr>
        @yield('content')
        {{now()->year}}
        
    </body>
</html>
