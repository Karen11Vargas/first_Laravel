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

    <h1>Roles de Usuario</h1>
    <a href="{{route('roles.create')}}">Crear Nuevo rol</a>
    <table border="3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $r)
            <tr>
                <td>{{$r['id']}}</td>
                <td>{{$r['label']}}</td>
                <td>{{ date('d/m/Y', strtotime($r['create_at'])) }}</td>
                <td>{{date('d/m/Y', strtotime($r['update_at'])) }}</td>
                <td>
                    <a href="{{route('roles.edit', ['id' =>$r['id']]) }}">Editar</a>
                    <form  id="logout" action="{{route('roles.delete', ['id' =>$r['id']])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button>Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>