<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>
    <link rel="stylesheet" href="{{ asset('css/lista.css') }}"> 
    <style>
        
        body {
            background-image: url('{{ asset('assets/fundo-preto.jpg') }}');
            background-size: 100%;
            right: auto;           
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    
    <h1>Lista de Veículos</h1>

    @if($veiculos->isEmpty())
        <p>Nenhum veículo cadastrado.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nome do Veículo</th>
                    <th>Cor</th>
                    <th>Data de Fabricação</th>
                    <th>Montadora</th>
                </tr>
            </thead>
            <tbody>
                @foreach($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->nomeveiculo }}</td>
                        <td>{{ $veiculo->corVeiculo }}</td>
                        <td>{{ $veiculo->fabricacao }}</td>
                        <td>{{ $veiculo->montadora }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>

