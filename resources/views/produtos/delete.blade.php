<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edite um produto</title>
</head>
<body>
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">tem certeza que deseja excluir esse produto?</label><br>
        <input type="text" name="nome" value="{{ $produto->nome }}" id=""><br>
        <button>sim</button>
    </form>
</body>
</html>