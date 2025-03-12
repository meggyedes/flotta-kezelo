<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flottakezelő Rendszer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Üdvözlünk a Flottakezelő Rendszerben!</h1>
        <p class="text-center">Ez az alap kezdőoldal. Innen elérheted a különböző funkciókat:</p>
        <div class="d-flex justify-content-center">
            <a href="{{ route('vehicles.index') }}" class="btn btn-primary mx-2">Járművek</a>
            <a href="{{ route('drivers.index') }}" class="btn btn-secondary mx-2">Sofőrök</a>
            <a href="{{ route('routes.index') }}" class="btn btn-success mx-2">Útvonalak</a>
        </div>
    </div>
</body>
</html>
