@extends ('layout')
@section('content')
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
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
    <h1>Cadastrar  Veículos</h1>
    
    <form action="{{ route('cadastrar-veiculo') }}" method="POST">
        @csrf
        <label for="nomeveiculo">Nome do Veículo:</label>
        <input type="text" name="nomeveiculo" required><br>

        <label for="corVeiculo">Cor:</label>
        <input type="text" name="corVeiculo" required><br>

        <label for="fabricacao">Data de Fabricação:</label>
        <input type="date" name="fabricacao" required><br>

        <label for="montadora">Montadora:</label>
        <input type="text" name="montadora" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>


@endsection
