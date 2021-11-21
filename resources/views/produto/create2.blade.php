@extends('layouts.app')

@section('title', 'Cadastro de Produtos')

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

<form action="{{ action('ProdutoController@store', 0) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

<br>
<br>
<h2>Cadastro de Produtos</h2>
<br>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="nomeproduto1">Nome do Produto</label>
                <input type="text" name="nomeproduto1" class="form-control" placeholder="Post para mídias sociais..." value="{{ old ('nomeproduto1') }}"><br>
            </div>

            <div class="form-group col-md-6">
                <label for="codigo1">Código</label>
                <input type="text" name="codigo1" class="form-control" placeholder="post001" value="{{ old ('codigo1') }}"><br>
            </div>

            <div class="form-group col-md-6">
                <label for="tipoproduto1">Tipo do Produto</label>
                <input type="text" name="tipoproduto1" class="form-control" placeholder="Físico/Digital" value="{{ old ('tipoproduto1') }}"><br>
            </div>


            <div class="form-group col-md-6">
                <label for="quantidadepedidos1">Quantidade de Pedidos</label>
                <input type="text" name="quantidadepedidos1" class="form-control" placeholder="5un." value="{{ old ('quantidadepedidos1') }}"><br>
            </div>


            <div class="form-group col-md-6">
                <label for="estoque1">Em Estoque</label>
                <input type="text" name="estoque1" class="form-control" placeholder="Há X Unidades/ Não Há Unidades" value="{{ old ('estoque1') }}"><br>
            </div>

            @php
            !empty($produtos->nome_arq) ? $nome_arq = $produtos->nome_arq : $nome_arq = "sem_imagem.jpg";
            @endphp

         <p></p>
          <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Cadastrar</button>
          <p></p>
          <a href="{{url('/produto')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
      </form>

@endsection
