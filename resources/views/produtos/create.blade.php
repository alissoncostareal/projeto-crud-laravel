<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Um novo produto</title>
</head>
<body>
    <form action="{{  route('registrar_produto')  }}" method="POST">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome" id=""><br>
        <label for="">custo</label><br>
        <input type="text" name="custo" id=""><br>
        <label for="">preco</label><br>
        <input type="text" name="preco" id=""><br>
        <label for="">quantidade</label><br>
        <input type="text" name="quantidade" id=""><br>
        <button>salvar</button>
    </form>
</body>
</html>