<?php

  session_start();
    if (!isset($_SESSION["email"])) {
      header("Location: login.php");
    }

  try{


              $conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

              $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

              $resultado = $conexao->query("select * from pergunta");


              

    }catch(PDOException $e){
              echo $e->getMessage();
                 }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Postagens</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">


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
          <li><a href="Poste_aqui.html"><span class="glyphicon glyphicon-globe"></span> Poste aqui</a></li>
           <li><a href="pag_edicao.php"><span class="glyphicon glyphicon-transfer"></span> Editar dados</a></li>
          <li><a href="faq.php"><span class="glyphicon glyphicon-question-sign"></span>FAQ</a></li>
          <li><a href="faleconosco.php"><span class="glyphicon glyphicon-envelope"></span>Fale conosco</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-remove"></span>LogOut</a></li>
        </ul>
      </div>
    </div>
  </nav>

 
    
    <?php
    foreach ($resultado as $linha) {
    ?>

      <table border="3">
        <tr>
            <th>
              <?php echo $linha['titulo']; ?>
            </th>
        </tr>
        <tr>
            <td>
              <?php echo $linha['descricao'];?>
            </td>
        </tr>
      </table>

<?php 

              }
?>
  
    


  		

  <footer class="container-fluid text-center">
    <p><a href="faleconosco.php">Fale Conosco</a></p>
    <p><a href="faq.php">FAQ</a></p>
  </footer>

   </body>
 </html>