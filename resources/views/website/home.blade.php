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
            <a href="{{route('website.who')}}">Quien soy</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{route('website.contact')}}">Contacto</a>
        </nav>
    </header>

    <h2>Hola {{$user}}</h2>
    <h1>Soy Karen, Hi</h1>
    <h4>Estas visitando esta pagina el dia {{$date}} a las {{$time}}</h4>
    <h3>El nombre de esta app es: {{env('APP_NAME')}} en el entorno "{{env('APP_ENV')}}"</h3>
    
    <h2>Personalizar Formulario</h2>
    @if ($user == 'Usuario')
        <h3>Rellene para personalizar</h3>
    @else 
    <h3>Si no te llamas {{$user}} cambia el formulario</h3>
    @endif
    <form action="{{route('website.usuario')}}">
        <input type="text" name="name" placeholder="Nombre">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>