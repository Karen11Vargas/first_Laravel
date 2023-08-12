<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title> {{env('APP_NAME')}} | Contacto</title>
   </head>
   <body>
    <h1>Pagina de Contacto</h1>
    <form action="/contacto" method="POST">
        
        {{-- Protege al usuario de posibles ataques --}}
        @csrf 
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="correoElectronico">Correo Electronico</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono">
        </div>
        <div>
            <label for="nombre">Consulta</label>
            <textarea name="consulta" id="consulta" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" name="enviar">
        </div>
    </form>
    <a href="/contacto"></a>
   </body>
</html>