<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">

    <title>Criar Reserva</title>

    <script type="text/javascript">
      function calc_total(){
        var dias = parseInt(document.getElementById('cDiar').value);
        var diaria = parseInt(document.getElementById('cValorDiar').value);
        var limpeza = parseInt(document.getElementById('cValorLim').value);

        if(Number.isInteger(dias) == true && Number.isInteger(diaria) == true && Number.isInteger(limpeza) == true){
          tot = (dias * diaria) + limpeza;
          document.getElementById('cTot').value = "R$" + String(tot) +  ",00";
        }
        
      }
    </script>    ​
  </head>
  <body>
    <div class="interface">

    <header class="cabecalho">
      <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
      <h2> CRADASTRAR NOVO CLIENTE: </h2>
    </header>
    <button class="icone"><a href={{route("criar_reserva")}}> VOLTAR </a></button>

    <form method="post" id="fContato" action="{{ route('cadastrar_cliente') }}" oninput="calc_total();">
            {{csrf_field()}}
      <fieldset id="usuario">
        <legend>Dados do cliente:</legend>

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
