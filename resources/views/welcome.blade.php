   
    @php
    $myName = "Karen";
    $lecciones = ['parametros', 'rutas', 'configuracion'];
    @endphp
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title> {{env('APP_NAME')}}</title>
   </head>
   <body>
    <a href="{{route ('getContacto')}}">Hola</a>
    <h1>Hola Mundo desde Laravel</h1>
    <p>Mi primera pagina con Laravel</p>
   
    <p>Hola mi nombre es {{$myName}}</p>
    
    <h3>Temas</h3>

    <ul>
        @foreach ($lecciones as $ls )
            <li>{{$ls}}</li>
        @endforeach
    </ul>

    <a href="/contacto">Contacto</a>
   </body>
   </html>