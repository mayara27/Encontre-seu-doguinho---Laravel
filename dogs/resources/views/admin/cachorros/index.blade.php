@extends('layout.site')

@section('titulo', 'Cachorros Perdidos')

@section('conteudo')

  <div class="container">
      <h3 class="center">Lista de Doguinhos perdidos</h3>

      <div class="row">
        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Cor</th>
              <th>Porte</th>
              <th>Pelagem</th>
              <th>Destrição</th>
              <th>Imagem</th>
              <th>Nome para contato</th>
              <th>Telefone para contato</th>
              <th>Doguinho já encontrado?</th>
            </tr>
          </thead>

          <tbody>

            @foreach($registros as $registro)
              <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->cor}}</td>
                <td>{{$registro->porte}}</td>
                <td>{{$registro->pelagem}}</td>
                <td>{{$registro->descricao}}</td>
                <td><img width="250"src="{{asset($registro->imagem)}}" alt="{{$registro->descricao}}"></td>
                <td>{{$registro->nome}}</td>
                <td>{{$registro->telefone}}</td>
                <td>
                  <a class="btn red" href="{{route('admin.cachorros.deletar', $registro->id)}}">Achado?</a>
                </td>
              </tr>
            @endforeach
          </tbody>

        </table>
      </div>
      <div class="row">
        <a class="btn blue" href="{{route('admin.cachorros.adicionar')}}">Cadastrar Doguinho Perdido</a>
      </div>
  </div>


@endsection
