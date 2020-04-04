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
    function valor_comissao_prop(reservas){
      let total = 0;
      reservas.forEach(function(reserva){
        total += ((reserva.valor_diaria * reserva.diarias)*0.90);
      });
      console.log(total);
      $('.comissao').html(total);
    }
  </script>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> PROPRIETÁRIO: </h2>
      </header>
      
      <a href={{route("menu_valores")}}><button class="icone">VOLTAR</button></a>

      <section class="corpo">
          @foreach($apartamento as $ap)
              <p class="button-efect" onclick="valor_comissao_prop({{$ap->reserva}})">{{$ap->residencial}}</p></p>
          @endforeach
      </section>

      <aside class="lateral"> 
        <p>R$ </p><p class="comissao">AQUI VAI UM RESUMO DOS VALORES DE CADA AP PARA CADA PROP</p>
      </aside>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
</html>
