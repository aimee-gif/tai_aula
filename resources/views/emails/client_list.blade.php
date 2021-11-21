<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Teste Pagina email</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Genero</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $item)
            <tr>
                <th scope='row'>{{$item->id}}</th>
                <td>{{$item->nome}}</td>
                <td>{{$item->sobrenome}}</td>
                <td>{{$item->generos->genero ?? "" }}</td>
                <td>{{$item->estado}}</td>
                <td>{{$item->cidade}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->telefone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
