<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF: Pedidos</title>
</head>
<body>
    <h1>Listagem de Pedidos</h1>
    @foreach ($pedidos as $item )
    <h4>Produto: {{$item->nomeproduto}} <br> Tipo: {{$item->tipoproduto}} <br> Quantidade: {{$item->quantidade}} <br> Fins: {{$item->fins}} <br> Tamanho: {{$item->pedidos->tamanho ?? ""}}</h4>
    <hr>
@endforeach
</body>
</html>
