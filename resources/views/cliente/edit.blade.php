@extends('layouts.app')

@section('title', 'Edição de Clientes')

@section('sidebar')
@parent

@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('ClientesController@store', $clientes->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <br>
<br>
<h2>Edição de Clientes</h2>
<br>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" placeholder="Nome" name="nome" class="form-control" value="{{$clientes->nome}}"><br>
        </div>

        <div class="form-group col-md-6">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" placeholder="Sobrenome" name="sobrenome" class="form-control" value="{{$clientes->sobrenome}}"><br>
        </div>

        <div class="form-group col-md-4">
            <label for="cliente_genero_id">Genero</label>
            <select name="cliente_genero_id" class="form-control">
            @foreach ($cliente_generos as $item)
            <option value="{{ $item->id }}" @if ($item->id == old('cliente_genero_id', $clientes->cliente_genero_id)) selected="selected" @endif >{{$item->genero}} - {{$item->sigla}}</option>
            @endforeach
        </select>
        <br></div>

        <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" placeholder="Curitiba" name="cidade" class="form-control" value="{{$clientes->cidade}}"><br>
        </div>


        <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <input type="text" placeholder="Paraná" name="estado" class="form-control" value="{{$clientes->estado}}"><br>
        </div>


        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" placeholder="exemplo@gmail.com" name="email" class="form-control" value="{{$clientes->email}}"><br>
        </div>


        <div class="form-group col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" placeholder="(xx)xxxx-xxxx" name="telefone" class="form-control" value="{{$clientes->telefone}}"><br>
        </div>

     <p></p>
      <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Cadastrar</button>
      <p></p>
      <a href="{{url('/clientes')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
  </form>
  <p></p>
  <p></p>
@endsection
