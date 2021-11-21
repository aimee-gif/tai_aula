@extends('layouts.app')

@section('title', 'Listagem de Pedidos')

@section('sidebar')
@parent

@endsection

@section('content')
<br>
<h4>Listagem de Pedidos</h4>
<p></p>
<form action="{{ action('PedidoController@search') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Digite sua pesquisa..." name="valor" id="">
        </div>
        <div class="col-md-2.5">
            <select name="tipo" class="form-control" id="">
                <option value="nomeproduto">Nome do Produto</option>
                <option value="tipoproduto">Tipo do Produto</option>
            </select>
        </div>
        <div class="col-md-5">
        <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
            <a href="{{url('/pedido/create')}}" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Cadastrar</a>
            <a href="{{url('/pdf1')}}" class="btn btn-danger"> <i class="fas fa-file-pdf"></i>  PDF</a>
            <a href="{{url('/')}}" class="btn btn-secondary"> <i class="fas fa-home"></i>  <i class="fas fa-arrow-left fa-xs"></i> Início</a>
        </div></div>
</form>

<br>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Produto</th>
            <th scope="col">Tipo do Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Código</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Para Quais Fins?</th>
            <th scope="col">Ação</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $item)
        <tr>
            <th scope='row'>{{$item->id}}</th>
            <td>{{$item->nomeproduto}}</td>
            <td>{{$item->tipoproduto}}</td>
            <td>{{$item->quantidade->quantidades ?? ""}}</td>
            <td>{{$item->codigo->siglaproduto ?? ""}}</td>
            <td>{{$item->pedidos->tamanho ?? ""}}</td>
            <td>{{$item->fins}}</td>
            <td><a href="{{action('PedidoController@edit', $item->id)}}" style='color:orange;'><i class='fas fa-edit'></i></a>
            </td>
            <td><a href="{{action('PedidoController@destroy', $item->id)}}" onclick="return confirm('Deseja realmente remover o registro?');" style='color:red;'><i
                        class='fas fa-trash'></i></a> </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center"> {{$pedidos->links() }}</div>
@endsection
