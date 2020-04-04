<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Controle Aluguel</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </head>

  <script>
    function valor_comissao_ap(reservas){
      let total = 0;
      reservas.forEach(function(reserva){
        total += ((reserva.valor_diaria * reserva.diarias)*0.10);
      });
      console.log(total);
      $('.comissao').html(total)
    }
  </script>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> INDIVIDUAL POR APARTAMENTO: </h2>
      </header>

      <button class="icone"><a href={{route("comissao")}}> VOLTAR </a></button>

      <section class="corpo" style="text-align : center">
      <h2> APARTAMENTOS </h2>
      @foreach($apartamento as $apto)
              <p class="button-efect" onclick="valor_comissao_ap({{$apto->reserva}})">{{$apto->residencial}}</p></p>
            @endforeach      </section>

      <aside class="lateral"> 
      <h2> VALOR DA COMISSÃO </h2>
        <p class='comissao'>VALORES</p>
      </aside>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
  ​
</html>
