<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver um produto</title>
</head>
<body>
    <label for="">Nome</label><br>
    <input type="text" name="nome" value="{{ $produto->nome }}" id=""><br>
    <label for="">custo</label><br>
    <input type="text" name="custo" value="{{ $produto->custo }}" id=""><br>
    <label for="">preco</label><br>
    <input type="text" name="preco" value="{{ $produto->preco}}" id=""><br>
    <label for="">quantidade</label><br>
    <input type="text" name="quantidade" value="{{ $produto->quantidade}}" id=""><br>
</body>
</html>