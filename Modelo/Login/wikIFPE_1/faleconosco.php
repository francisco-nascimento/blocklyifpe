<?php
     
    session_start();
    if (!isset($_SESSION["email"])) {
      header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Fale Conosco</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
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




<div class="form">
          <div class="content">
         <div id="login">   
                  <h1>Fale Conosco</h1>
           <form action="enviar_faleconosco1.php" method="post">
                    
                    <div class="field-wrap">
                    
                    <input type="text" autocomplete="off"  name="nome" required placeholder="Digite seu nome *">
                    </div>
                  
                    <div class="field-wrap">
                    
                    <input type="email" autocomplete="off" name="email" required placeholder="Digite seu e-mail *">
                    </div>

                    <div class="field-wrap">
                    
                    <textarea placeholder="Escreva sua mensagem aqui" name="comentario" rows="6" cols="50" ></textarea>
                    </div>

                   
                  <button class="button button-block"/>Enviar</button>
                  
           </form>

                </div>
                
                </div>
              </div><!--content -->







    
    <p>
    <footer class="container-fluid text-center" id="footer">

      <p>Créditos</p>

    </footer>
    </p>
  </body>
</html>