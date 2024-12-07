<!-- resources/views/flights/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Voos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Lista de Voos</h1>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Companhia</th>
                <th>Número do Voo</th>
                <th>Data</th>
                <th>Quantidade de Passageiros</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
                <tr>
                    <td>{{ $flight->id }}</td>
                    <td>{{ $flight->company }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->date }}</td>
                    <td>{{ $flight->passengers }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
