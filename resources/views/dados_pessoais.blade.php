@extends('template')

@section('titulo', 'Dados Proprietários')

@section('retorno')
  <button class="icone"><a href={{route("menu_prop")}}>VOLTAR</a></button>
@endsection

@section('conteudo')
      <div class="corpo">
        <section >
          <div class="clientes_cadastrados">
            <p><b>PROPRIETÁRIOS:</b></p>
            
            @foreach($proprietarios as $prop)
              <p class="button-efect" onclick="show({{$prop->id}})">{{$prop->nome}}</p></p>
            @endforeach
          </div>
        </section>
      </div >
      <div class="lateral">
        @foreach($proprietarios as $prop)
          @if($proprietarios[0]->id == $prop->id)
          <div class="clientes_cadastrados dados-prop {{$prop->id}}">
          @else
          <div class="clientes_cadastrados dados-prop {{$prop->id}} desactive">
          @endif
            <p><b>DADOS PESSOAIS</b><a href='{{route("deletar_proprietario", $prop->id)}}'> Deletar</a></p>
            <div>
              <p>{{$prop->nome}}</p>
              <p>{{$prop->cpf}}</p>
              <p>{{$prop->banco}}</p>
              <p>{{$prop->agencia}}</p>
              <p>{{$prop->conta}}</p>
              <p>{{$prop->tipo_conta}}</p>
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