<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <header>
        <nav>
            <a @if($section == 'who-we-are') style="color: rgb(41, 138, 44)"  @endif href="{{route('website.section',['section' => 'who-we-are'])}}">Quien soy</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a @if ($section == 'contact') style="color: green;" @endif href="{{route('website.section',['section' => 'contact'])}}">Contacto</a>
        </nav>
    </header>

    <h1>Hola mi nombre es: {{$name}}</h1>
    <h3>Tengo: {{$age}}</h3>
    <h3>Mi profesion es: {{$profession}}</h3>


    <h3>El nombre de esta app es: {{env('APP_NAME')}} en el entorno "{{env('APP_ENV')}}"</h3>

    
</body>
</html> 