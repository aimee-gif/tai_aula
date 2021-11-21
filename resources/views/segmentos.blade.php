@extends('layouts.app')

@section('title', 'Segmentos')

@section('content')
<br>
<br>
<br>
<h2> ***Apresentação de Alguns dos Nossos Trabalhos e Segmentos***</h2>
<br>
<img src="https://ninjadasvendas.com.br/wp-content/uploads/2019/07/modelo-de-cartao-de-visita-diversos_3-1.png" class="img-thumbnail"  width="48%">
<img src="https://cf.shopee.com.br/file/dac859e3c6d611ed3171f5fb6c5722c1" class="img-thumbnail" width="48%"><br><br>
<img src="https://www.artsector.com.br/wp-content/uploads/criacao-de-logotipo-1.jpg" class="img-thumbnail" width="48%">
<img src="https://2op.com.br/blog/wp-content/uploads/2015/05/mockup.jpg" class="img-thumbnail" width="48%">
<br>
<br>
<div class="d-grid gap-2">
    <a href="{{url('/home')}}" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
    <a href="{{url('/pedido/create')}}" class="btn btn-success"> <i class="fas fa-plus"></i>  Cadastrar Pedido</a>
    <a href="{{url('/produto/create')}}" class="btn btn-success"> <i class="fas fa-plus"></i> Cadastrar Produto</a>
    <a href="{{url('/')}}" class="btn btn-secondary"> <i class="fas fa-home"></i>  <i class="fas fa-arrow-left fa-xs"></i> Início</a>

      </div>
      <br>
@endsection
