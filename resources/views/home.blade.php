@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    
<br>
<br>
<br>
<h2>** Seja bem-vindo(a) a melhor empresa de Designer Gráfico do mundo **</h2>
<br>
    <img src="http://treinamentosprofissionais.com.br/wp-content/uploads/2017/08/design-grafico.jpg" class="img-fluid" >
    <br>
    <br>
    <br>
    <div class="d-grid gap-2">
        <a href="{{url('/segmentos')}}" class="btn btn-block btn-primary">  Iniciar</a>
      </div>
@endsection
