@extends('layout.site')

@section('titulo', 'Cachorros Perdidos')

@section('conteudo')

  <div class="container">
      <h3 class="center">Cadastrar Doguinho perdido</h3>

      <div class="row">
        <form class="" action="{{route('admin.cachorros.salvar')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          @include('admin.cachorros._form')

          <button class="btn deep orange">Cadastrar</button>
        </form>
      </div>

  </div>


@endsection
