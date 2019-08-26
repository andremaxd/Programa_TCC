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
      <h2> CADASTRAR NOVO PROPRIETÁRIO: </h2>
    </header>
    <button class="icone"><a href={{route("menu_prop")}}> VOLTAR </a></button>

    <form method="post" id="fContato" action="{{ route('cadastrar_prop_ap') }}">
    {{csrf_field()}}
      <fieldset id="usuario">
        <legend id="usuario">Dados proprietário:</legend>

        <p> <label for="cNome">Nome: </label> <input type="text" name="nome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"></p>
        <p> <label for="cCPF">CPF:</label> <input type="CPF" name="cpf" id="cCPF" placeholder="000.000.000-00"></p>
        <p><label for="cRua">Endereço:</label> <input type="text" name="endereco" id="cRua" size="15" maxlength="80" placeholder="Rua, Cidade, Estado"></p>
        <p><label for="cTel">Telefone:</label><input type="phone" name="telefone" id="cTel" placeholder="(00) 90000-0000"></p>
        <p> <label for="cMail">E-mail:</label> <input type="email" name="email" id="cMail" size="20" maxlength="40" placeholder="Email"></p>
        <fieldset id="sexo"> <legend>Sexo</legend>
          <input type="radio" name="sexo" id="cMasc"><label for="cMasc"> Masculino</label><br>
          <input type="radio" name="sexo" id="cFem"><label for="cFem"> Feminino</label> </fieldset>
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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>

  <script>

      $(document).ready(function(){
        $('#cCPF').mask('000.000.000-00', {reverse: true});
        $('#cTel').mask('(00) 00000-0000');
      });
      </script>
  </body>
  ​
</html>
