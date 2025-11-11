<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div>
            <strong>Error:</strong> {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>Email:</label>
            <input type="email" name="email" required autofocus>
        </div>

        <div>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember"> Recordarme
            </label>
        </div>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
