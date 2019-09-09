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
    <button class="icone"><a href={{route("criar_reserva")}}> VOLTAR </a></button>

    <form method="post" id="fContato" action="{{ route('cadastrar_reserva') }}" oninput="calc_total();">
            {{csrf_field()}}
      <fieldset id="">
        <legend>Dados locador:</legend>
        <p><label for="cDorm">Cliente:</label>
        <select name="cliente_id" id="cApto">
          <option selected>Selecione</option>
        @foreach ($cliente as $clientes)
          <option value={{$clientes->id}}>{{$clientes->nome}}</option>

        @endforeach

        </select></p>
        
      </fieldset>

      <fieldset id="apto">
        <legend>Selecionar apartamento:</legend>

        <p><label for="cDorm">Dormitórios:</label>
        <select name="dormitorios" id="cApto">
          <option selected>Selecione</option>
          <option value="02d">02 dormitórios</option>
          <option value="03d">03 dormitórios</option>
          <option value="04d">04 dormitórios</option>
        </select></p>


        <p><label for="cDorm">Apartamento:</label>
        <select name="residencial" id="cApto">
          <option selected>Selecione</option>
        @foreach ($apartamento as $apartamentos)
          <option value="{{$apartamentos->id}}-{{$apartamentos->ap}}">{{$apartamentos->residencial}} - ap: {{$apartamentos->ap}}</option>
        @endforeach

        </select>

        <p>
          <!--<label for="cResid">Residencial:</label>
          <input type="text" name="residencial" id="cResid" maxlength="40" size="20" placeholder="Apartamento" list="predio">
          <datalist id="predio">
            <option value="Alfredo Selent"></option>
            <option value="Santo Antonio A"></option>
            <option value="Santo Antonio B"></option>
            -->
            
            <!-- COLOCAR TODOS OS APTOS-->
          </datalist>
        </p>
      </fieldset>

      <fieldset>
        <legend class="apartamento">Valores:</legend>
        
        <p>Dia de Entrada:<input type="date" name="entrada" id="cEntrada"> </p>
        <p>Dia de Saída:<input type="date" name="saida" id="cSaida" onchange="calculaDias()"> </p>

        <p><label for="cDiar">Diárias:</label> <input type="number" name="diarias" id="cDiar" readonly></p>
        <p><label for="cValorDiar">Valor da diária:</label> <input type="text" name="valor_diaria" id="cValorDiar" maxlength="40" size="20" placeholder="R$"></p>
        <p><label for="cValorLim">Valor da limpeza:</label> <input type="text" name="valor_limpeza" id="cValorLim" maxlength="40" size="20" placeholder="R$"></p>

        
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

  <script>

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
