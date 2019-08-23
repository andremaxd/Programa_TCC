<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Controle Aluguel</title>
    ​
  </head>
  <body>
    <div class="interface">    
    <header class="cabecalho">
      <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>

    <h2> CALENDÁRIO DOS ALUGUEIS: </h2>

    </header>
    <button class="icone"><a href={{route("menu")}}> VOLTAR </a></button>


      <div class ='menu'>
        <nav>
          <li><a href={{route("02_dorm")}}>02 dormitórios</a></li>
          <li><a href={{route("03_dorm")}}>03 dormitórios</a></li>
          <li><a href={{route("04_dorm")}}>04 dormitórios</a></li>

        </nav>
      </div>
      
      
     <footer class="rodape">
      <p>Copyright &copy; 2019 - by André Max Dorneles</p>
      <p>Trabalho de conclusão de curso.</p>
    </footer>
    ​</div>
  </body>
  ​
</html>
