<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Controle Aluguel</title>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  </head>

  <script>
    $(function() {
      $( "#calendario" ).datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
      });
    });
</script>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> 02 DORMITÓRIOS: </h2>
      </header>
      <button class="icone"><a href={{route("menu_calendario")}}> VOLTAR </a></button>  

      <div class="calendario">
      <section class="corpo">
        <p><h2>Apartamentos:</h2></p>
        @foreach ($reservas as $reserva)
        <p>{{$reserva->Apartamento['residencial']}} - {{$reserva->ap}}</p>
        @endforeach

      </section>

      <aside class="lateral"> 
        <p>AQUI VAI A TABELA COM O CALENDARIO</p>
        <p>Data: <input type="text" id="calendario" /></p>

      </aside>

    </div>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
</html>
