<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="javascript:void(0)" onclick="document.getElementById('logout').submit();">Cerrar Sesion</a>
    <form style="display: none;" id="logout" action="{{route('logout')}}" method="POST">
    @csrf
    </form>

    <h1>Roles de Usuario /
        @if ($id == null)Crear Nuevo Rol
        @else 
        Modificar Rol
        @endif 
    </h1>
    <a href="{{route('roles.index')}}">Volver</a>
   <form action="{{ route('roles.save',['id' => $id])}}" method="POST">
    @if ($id != null)
    @method('PUT')
        <input type="hidden" name="id" value="{{$id}}">
    @endif
    @csrf
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="label" class="text" value="{{ $record != null?$record['label']:''}}">
    </div>
    <div>
        <input type="submit" value="Guardar">
    </div>
   </form>

</body>
</html>