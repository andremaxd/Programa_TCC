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
      <h2> CRIAR RESERVA: </h2>
    </header>
    <button class="icone"><a href={{route("menu")}}> VOLTAR </a></button>

    <form method="post" id="fContato" action="{{ route('cadastrar_reserva') }}" oninput="calc_total();">
            {{csrf_field()}}
      <fieldset id="usuario">
        <legend>Dados locador:</legend>

        <p> <label for="cNome">Nome: </label> <input type="text" name="nome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"></p>
        <p> <label for="cCPF">CPF:</label> <input type="CPF" name="cpf" id="cCPF" placeholder="000.000.000-00"></p>
        <p><label for="cRua">Endereço:</label> <input type="text" name="endereco" id="cRua" size="15" maxlength="80" placeholder="Rua, Cidade, Estado"></p>
        <p><label for="cTel">Telefone:</label><input type="phone" name="telefone" id="cTel" placeholder="(00) 90000-0000"></p>
        <p> <label for="cMail">E-mail:</label> <input type="email" name="email" id="cMail" size="20" maxlength="40" placeholder="Email"></p>
        <fieldset id="sexo"> <legend>Sexo</legend>
          <input type="radio" name="sexo" id="cMasc"><label for="cMasc"> Masculino</label><br>
          <input type="radio" name="sexo" id="cFem"><label for="cFem"> Feminino</label> </fieldset>
      </fieldset>

      <fieldset id="apartamento">
        <legend>Selecionar apartamento:</legend>

        <p><label for="cDorm">Dormitórios:</label>
        <select name="tApto" id="cApto">
          <option selected>Selecione</option>
          <option value="02d">02 dormitórios</option>
          <option value="03d">03 dormitórios</option>
          <option value="04d">04 dormitórios</option>
        </select></p>

        <p>
          <label for="cResid">Residencial:</label>
          <input type="text" name="tResid" id="cResid" maxlength="40" size="20" placeholder="Apartamento" list="predio">
          <datalist id="predio">
            <option value="Alfredo Selent"></option>
            <option value="Santo Antonio"></option>
            <!-- COLOCAR TODOS OS APTOS-->
          </datalist>
        </p>

        <p><label for="cNAp">Apto:</label> <input type="number" name="tNAp" id="cNAp" min="0" max="9999"></p>

      </fieldset>

      <fieldset>
        <legend class="apartamento">Valores:</legend>
        
        <p>Dia de Entrada:<input type="date" name="tEntrada" id="cEntrada"> </p>
        <p>Dia de Saída:<input type="date" name="tSaida" id="cSaida" onchange="calculaDias()"> </p>

        <p><label for="cDiar">Diárias:</label> <input type="number" name="tDiar" id="cDiar" readonly></p>
        <p><label for="cValorDiar">Valor da diária:</label> <input type="text" name="tValorDiar" id="cValorDiar" maxlength="40" size="20" placeholder="R$"></p>
        <p><label for="cValorLim">Valor da limpeza:</label> <input type="text" name="tValorLim" id="cValorLim" maxlength="40" size="20" placeholder="R$"></p>

        
      </fieldset>

      <fieldset>
        <legend class="valor_tot">Valor total:</legend>
        <p>Valor total:<input type="text" name="tTot" id="cTot" placeholder="Total a Pagar" readonly></p>
      </fieldset>

      <div class="botao_reserva">
            <button><a>CADASTRAR</a></button> 
            <button><a>IMPRIMIR CONTRATO</a></button>
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

    function calculaDias(){
      var data1 = document.getElementById('cEntrada').value;
      var data2 = document.getElementById('cSaida').value;

      data1 = new Date(data1);
      data2 = new Date(data2);

      result = (data2 - data1)/(1000*3600*24);

      if(result < 0){
        alert("Data errada")
      } else {
        document.getElementById('cDiar').value = result;
      }

    }
  </script>
  </body>
  ​
</html>
