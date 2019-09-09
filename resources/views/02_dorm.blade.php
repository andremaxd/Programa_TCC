<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Controle Aluguel</title>
  </head>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> 02 DORMITÓRIOS: </h2>
      </header>
      <button class="icone"><a href={{route("menu_calendario")}}> VOLTAR </a></button>

      <section class="corpo">

        @foreach ($reservas as $reserva)
        <p>{{$reserva->Apartamento['residencial']}}</p>
        @endforeach

      </section>

      <aside class="lateral"> 
        <p>AQUI VAI A TABELA COM O CALENDARIO</p>
        <p>1 2 3 4 5</p>
        <p>6 7 8 9 10</p>
      </aside>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
</html>
