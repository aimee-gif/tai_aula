@extends('layouts.app')

@section('title', 'Listagem de Clientes')

@section('sidebar')
@parent

@endsection

@section('content')
<br>
<h4>Listagem de Clientes</h4>
<p></p>

<form action="{{ action('ClientesController@search') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Digite sua pesquisa..." name="valor" id="">
        </div>
        <div class="col-md-3">
            <select name="tipo" class="form-control" id="">
                <option value="nome">Nome</option>
                <option value="sobrenome">Sobrenome</option>
                <option value="genero">Genero</option>
                <option value="estado">Estado</option>
                <option value="cidade">Cidade</option>
                <option value="email">E-mail</option>
            </select>
        </div>
        <div class="col-md-5">
        <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
            <a href="{{url('/clientes/create')}}" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Cadastrar</a>
            <a href="{{url('/')}}" class="btn btn-secondary"> <i class="fas fa-home"></i>  <i class="fas fa-arrow-left fa-xs"></i> Início</a>
            <a href="{{url('/clientes-email')}}" class="btn btn-warning"> <i class="fas fa-paper-plane"></i>Email</a>
        </div>
    </div>
</form>
<br>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Genero</th>
            <th scope="col">Estado</th>
            <th scope="col">Cidade</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ação</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $item)
        <tr>
            <th scope='row'>{{$item->id}}</th>
            <td>{{$item->nome}}</td>
            <td>{{$item->sobrenome}}</td>
            <td>{{$item->generos->genero ?? ""}}</td>
            <td>{{$item->estado}}</td>
            <td>{{$item->cidade}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->telefone}}</td>
            <td><a href="{{ action('ClientesController@edit',$item->id) }}" style='color:orange;'><i class='fas fa-edit'></i></a>
            </td>
            <td><a href="{{ action('ClientesController@destroy',$item->id) }}" onclick="return confirm('Deseja realmente remover o registro?');" style='color:red;'><i
                        class='fas fa-trash'></i></a> </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center"> {{$clientes->links() }}</div>
@endsection
