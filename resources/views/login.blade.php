<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <h2>Login</h2>
    @if (Session::has('error'))
        <p style="color: brown">{{Session::get('error')}}</p>
    @endif
    <form action="{{route('login')}}" method="post">
        @csrf
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" class="text" name="user" placeholder="Usuario" />
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" class="text" name="pass" placeholder="Password" />
        </div>
        <div>
            <input type="submit" class="text" value="Enviar" />
        </div>
    </form>
</body>
</html>