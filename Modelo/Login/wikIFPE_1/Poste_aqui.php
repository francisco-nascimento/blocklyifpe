<?php
  session_start();
    if (!isset($_SESSION["email"])) {
      header("Location: login.php");
    }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Postagem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* 
       Remover a margem padrão da barra de navegação - bordas inferior e arredondadas */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* 
        Adiciona uma cor de fundo cinza e algum preenchimento ao rodapé */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
      margin-top: 15%;
    }

  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.php">wikIFPE</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="postagem.php"><span class="glyphicon glyphicon-globe"></span> Postagens</a></li>
          <li><a href="Poste_aqui.php"><span class="glyphicon glyphicon-globe"></span> Poste aqui</a></li>
          <li><a href="pag_edicao.php"><span class="glyphicon glyphicon-transfer"></span> Editar dados</a></li>
          <li><a href="faq.php"><span class="glyphicon glyphicon-question-sign"></span>FAQ</a></li>
          <li><a href="faleconosco.php"><span class="glyphicon glyphicon-envelope"></span>Fale conosco</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-remove"></span>LogOut</a></li>
        
        </ul>
      </div>
    </div>
  </nav>
  <center>
  <h1> &nbsp;Postagem</h1><br><br>
  <h3> &nbsp;Poste algo interessante aqui!</h3><br>
  </center>
  <center>
      <div>

       
        
        <form method="post" action="enviar_postagem.php">

          <p> 
          &nbsp;Titulo<br> 
          <input type="text" size="52" name="titulo" maxlength="200" placeholder="Coloque um titulo na sua postagem de no maximo 200 caracteres"> 
          </p> 
          
          <p> 
          <div>Diga aqui como fazer ..<br></div>
          <textarea rows="4" cols="50" name="descricao" maxlength="5000000" placeholder="Diga como realizar com no maximo 5.000.000 caracteres. Fique a vontade para descrever da forma que achar melhor."></textarea> 
          </p>   
          
          <p> 
          <input type="submit" name="enviar" value="Enviar"> 
          <input type="reset" name="apagar" value="Apagar">
          </p> 
          </form>


      </div>
  </center>

<footer id="creditos">
<center>
  <p>Créditos</p>
  <p><a href="faleconosco.php"> Fale Conosco </a></p>
  <p><a href="faq.php">  FAQ</a> </p>
</center>
</footer>

</body>
</html>