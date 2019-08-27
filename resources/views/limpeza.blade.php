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
        <a href={{route("menu")}}> <img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> LIMPEZA: </h2>
      </header>

      <button class="icone"><a href={{route("menu_valores")}}> VOLTAR </a></button>

      <section class="corpo">
        <p>AQUI VAI OS APTOS</p>
      </section>

      <aside class="lateral"> 
        <p>AQUI VAI UM RESUMO DOS VALORES</p>
      </aside>

      <fieldset>
        <legend>Valor total:</legend>
        <p>AQUI VAI O VALOR GERAL DAS LIMPEZAS</p>
      </fieldset>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
  ​
</html>
