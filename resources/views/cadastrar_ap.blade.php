<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">

    <title>Controle Aluguel</title>
    ​
  </head>
  <body>
    <div class="interface">

    <header class="cabecalho">
      <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
      <h2> CADASTRAR NOVO APARTAMENTO: </h2>
    </header>
    <button class="icone"><a href={{route("menu_prop")}}> VOLTAR </a></button>

    <form method="post" id="fContato" action="{{ route('cadastrar_apto') }}">
    {{csrf_field()}}
      <fieldset id="">
        <legend id="">Proprietário já cadastrado:</legend>

        <p><label for="cDorm">Proprietário:</label>
        <select name="tApto" id="cApto">
          <option selected>Selecione</option>
        @foreach ($proprietarios as $proprietario)
          <option value={{$proprietario->id}}>{{$proprietario->nome}}</option>

        @endforeach

        </select></p>
      </fieldset>

      <fieldset id="apartamento">
        <legend id="apartamento">Selecionar apartamento:</legend>

        <p><label for="cDorm">Dormitórios:</label>
        <select name="dormitorios" id="cApto">
          <option selected>Selecione</option>
          <option value="02d">02 dormitórios</option>
          <option value="03d">03 dormitórios</option>
          <option value="04d">04 dormitórios</option>
        </select></p>

        <p>
          <label for="cResid">Residencial:</label>
          <input type="text" name="residencial" id="cResid" maxlength="40" size="20" placeholder="Apartamento" list="predio">
          <datalist id="predio">
            <option value="Alfredo Selent"></option>
            <option value="Santo Antonio"></option>
            <!-- COLOCAR TODOS OS APTOS-->
          </datalist>
        </p>

        <p><label for="cNAp">Apto:</label> <input type="number" name="ap" id="cNAp" min="0" max="9999"></p>

      </fieldset>
      <div class="botao_reserva">
        <button><a>CADASTRAR</a></button> 
      </div>
    </form>
      
    <footer class="rodape">
      <p>Copyright &copy; 2019 - by André Max Dorneles</p>
      <p>Trabalho de conclusão de curso.</p>
    </footer>
    ​
  </div>
  </body>
  ​
</html>
