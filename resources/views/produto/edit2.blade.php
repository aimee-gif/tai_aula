@extends('layouts.app')

@section('title', 'Edição de Produtos')

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

<form action="{{ action('ProdutoController@store', $produtos->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <br>
<br>
<h2>Edição de Produtos</h2>
<br>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="nomeproduto1">Nome do Produto</label>
                <input type="text" placeholder="Post para mídias sociais..." name="nomeproduto1" class="form-control" value="{{$produtos->nomeproduto1}}"><br>
            </div>

            <div class="form-group col-md-6">
                <label for="codigo1">Código</label>
                <input type="text" placeholder="post001" name="codigo1" class="form-control" value="{{$produtos->codigo1}}"><br>
            </div>

            <div class="form-group col-md-6">
                <label for="tipoproduto1">Tipo do Produto</label>
                <input type="text" placeholder="Físico/Digital" name="tipoproduto1" class="form-control" value="{{$produtos->tipoproduto1}}"><br>
            </div>


            <div class="form-group col-md-6">
                <label for="quantidadepedidos1">Quantidade de Pedidos</label>
                <input type="text" placeholder="5un." name="quantidadepedidos1" class="form-control" value="{{$produtos->quantidadepedidos1}}"><br>
            </div>


            <div class="form-group col-md-6">
                <label for="estoque1">Em Estoque</label>
                <input type="text" placeholder="Há X Unidades/ Não Há Unidades" name="estoque1" class="form-control" value="{{$produtos->estoque1}}"><br>
            </div>


         <p></p>
          <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Cadastrar</button>
          <p></p>
          <a href="{{url('/produto')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
      </form>

@endsection
