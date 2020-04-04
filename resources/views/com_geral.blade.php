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
    $(document).ready(function(){
      let total=0;
      let reservas =  {!! json_encode($reservas->toArray()) !!}
      reservas.forEach(function(reserva){
        total += ((reserva.diarias * reserva.valor_diaria) * 0.10);
      });
      $('.comissao').html(total);
      console.log(total);
      
    });
  </script>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}> <img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> COMISSÃO GERAL: </h2>
      </header>

      <button class="icone"><a href={{route("comissao")}}> VOLTAR </a></button>

      <div class="corpo_geral">
        <h2>VALOR GERAL:</h2>
        <p class="comissao"></p>
      </div>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
  ​
</html>
