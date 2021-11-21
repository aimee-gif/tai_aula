@extends('layouts.app')

@section('title', 'Cadastro de Clientes')

@section('sidebar')
@parent

@endsection


@section('script')
<script>
 $(document).ready(function($){
    $('#telefone').mask('(00)00000-0000');
 });
</script>
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

<form action="{{ action('ClientesController@store', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <br>
<br>
<h2>Cadastro de Clientes</h2>
<br>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ old ('nome') }}"><br>
        </div>

        <div class="form-group col-md-6">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" value="{{ old ('sobrenome') }}"><br>
        </div>

        <div class="form-group col-md-4">
            <label for="cliente_genero_id">Genero</label>
            <select name="cliente_genero_id" class="form-control" value="{{ old ('cliente_genero_id') }}">
            <option value="select" disabled selected >Genero...</option>
            @foreach ($cliente_generos as $item)
            <option value="{{$item->id}}"> {{$item->genero}} - {{$item->sigla}}</option>
            @endforeach
        </select>
    <br></div>

        <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="Curitiba" value="{{ old ('cidade') }}"><br>
        </div>


        <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" placeholder="Paraná" value="{{ old ('estado') }}"><br>
        </div>


        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="exemplo@gmail.com" value="{{ old ('email') }}"><br>
        </div>


        <div class="form-group col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(xx)xxxxx-xxxx" value="{{ old ('telefone') }}"><br>
        </div>

     <p></p>
      <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Cadastrar</button>
      <p></p>
      <a href="{{url('/clientes')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
  </form>
  <p></p>
  <p></p>
@endsection
