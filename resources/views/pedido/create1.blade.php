@extends('layouts.app')

@section('title', 'Cadastro de Pedidos')

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


<form action="{{ action('PedidoController@store', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

<br>
<br>
<h2>Cadastro de Pedidos</h2>
<br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nomeproduto">Nome do Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Post para Instagram..." value="{{ old ('nomeproduto') }}"><br>
            </div>

            <div class="form-group col-md-6">
                <label for="tipoproduto">Tipo do Produto</label>
                <input type="text" name="tipoproduto" class="form-control" placeholder="Físico/Digital" value="{{ old ('tipoproduto') }}"><br>
            </div>


            <div class="form-group col-md-6">
            <label for="pedido_tamanho_id">Tamanho</label>
            <select name="pedido_tamanho_id" class="form-control" value="{{ old ('pedido_tamanho_id') }}">
            <option value="select" disabled selected >Tamanho...</option>
            @foreach ($pedido_tamanhos as $item)
            <option value="{{$item->id}}"> {{$item->tamanho}} - {{$item->unimedida}}</option>
            @endforeach
        </select>
    <br></div>

            <div class="form-group col-md-6">
                <label for="fins">Para Quais Fins?</label>
                <input type="text" name="fins" class="form-control" placeholder="Empresarial/Mídias Sociais" value="{{ old ('fins') }}"><br>
            </div>

         <p></p>
          <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Cadastrar</button>
          <p></p>
          <a href="{{url('/pedido')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
      </form>
@endsection
