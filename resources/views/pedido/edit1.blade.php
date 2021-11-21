@extends('layouts.app')

@section('title', 'Edição de Pedidos')

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

<form action="{{ action('PedidoController@store', $pedidos->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <br>
<br>
<h2>Edição de Pedidos</h2>
<br>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="id_nomeproduto">Nome do Produto</label>
                <input type="text" placeholder="Post para Instagram..." name="nomeproduto" class="form-control" value="{{$pedidos->nomeproduto}}"><br>
            </div>

            <div class="form-group col-md-6">
                <label for="tipoproduto">Tipo do Produto</label>
                <input type="text" placeholder="Físico/Digital" name="tipoproduto" class="form-control" value="{{$pedidos->tipoproduto}}"><br>
            </div>


            <div class="form-group col-md-6">
    <label for="pedido_tamanho_id">Tamanho</label>
        <select name="pedido_tamanho_id" class="form-control">
            @foreach ($pedido_tamanhos as $item)
            <option value="{{ $item->id }}" @if ($item->id == old('pedido_tamanho_id', $pedidos->pedido_tamanho_id)) selected="selected" @endif >{{$item->tamanho}} - {{$item->unimedida}}</option>
            @endforeach
        </select>
        <br></div>

            <div class="form-group col-md-6">
                <label for="fins">Para Quais Fins?</label>
                <input type="text" placeholder="Empresarial/Mídias Sociais" name="fins" class="form-control" value="{{$pedidos->fins}}"><br>
            </div>

         <p></p>
          <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Salvar</button>
          <p></p>
          <a href="{{url('/pedido')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
      </form>
@endsection
