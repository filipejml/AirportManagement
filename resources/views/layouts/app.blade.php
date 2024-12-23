<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport Manager</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Airport Manager</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Tela Inicial</a></li>
            <li class="nav-item"><a class="nav-link" href="/flights">Cadastro de Voos</a></li>
            <li class="nav-item"><a class="nav-link" href="/flights/list">Lista de Voos</a></li>
            <li class="nav-item"><a class="nav-link" href="/companies">Companhias Aéreas</a></li>
            <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
        </ul>
    </div>
</nav>

<!-- Conteúdo da Página -->
<div class="container mt-5">
    @yield('content') <!-- Aqui é onde o conteúdo específico de cada página será renderizado -->
</div>

</body>
</html>
