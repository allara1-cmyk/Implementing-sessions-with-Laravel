<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>

    <div class="container text-center">
        <div class="card p-5 bg-light text-dark">
            <h1 class="mb-3 fw-bold">Bienvenido a Mi Proyecto</h1>
            <p class="mb-4">Selecciona una opción para continuar</p>

            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-custom">
                    <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                </a>
                <a href="{{ route('register') }}" class="btn btn-success btn-custom">
                    <i class="bi bi-person-plus"></i> Registrarse
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
