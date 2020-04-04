@extends('template')

@section('titulo', 'Dados Clientes')

@section('retorno')
  <button class="icone"><a href={{route("menu")}}> VOLTAR </a></button>
@endsection

@section('conteudo')
  <div class="corpo">
    <section >
      <div class="clientes_cadastrados">
        <p><b>Clientes:</b></p>
        
        @foreach($cliente as $clie)
          <p class="button-efect" onclick="show({{$clie->id}})">{{$clie->nome}}</p></p>
        @endforeach
      </div>
    </section>
  </div >
  <div class="lateral">
    @foreach($cliente as $clie)
      @if($cliente[0]->id == $clie->id)
      <div class="clientes_cadastrados dados-prop {{$clie->id}}">
      @else
      <div class="clientes_cadastrados dados-prop {{$clie->id}} desactive">
      @endif
        <p><b>DADOS PESSOAIS</b><a href='{{route("deletar_cliente", $clie->id)}}'> Deletar</a></p>
        <div>
          <p>{{$clie->nome}}</p>
          <p>{{$clie->cpf}}</p>
          <p>{{$clie->telefone}}</p>
          <p>{{$clie->email}}</p>
      
        </div>
      </div>
    @endforeach
  </div>
  <script>
    function show(id){
      $('.dados-prop').addClass('desactive')
      $('.'+id).removeClass('desactive');
    }
  </script>
@endsection
