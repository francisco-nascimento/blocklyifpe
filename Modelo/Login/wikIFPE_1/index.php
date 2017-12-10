<?php
     
    session_start();
    if (!isset($_SESSION["email"])) {
      header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>wikIFPE</title>
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
    }
    
  .carousel-inner img {
      width: 100%; /*
                      Defina largura para 100% */
      margin: auto;
      min-height:200px;
  }

  /* 
      Oculta o texto do carrossel quando a tela tiver menos de 600 pixels de largura */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<?php 

  try{

      $conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

      $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $conexao->prepare("select nome from usuario where nome = ?");



    }catch(PDOException $e){
      echo $e->getMessage();
    }

?>

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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Quebra para Slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/img1.jpg" alt="Image" style="">
        <div class="carousel-caption">
         <div> <h3>Como fazer para passar na disciplina de Projeto e Pratica <!-- aqui entra um codigo PHP--> </h3> </div>
          
        </div>      
      </div>

      <div class="item">
        <img src="img/img2.jpg" alt="Image">
        <div class="carousel-caption">

         <div> <h3>Como fazer para passar na disciplina de POO</h3> </div>
          
        </div>      
      </div>
    </div>

    <!-- Controles esquerdo e direito -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Aprenda como fazer as coisas no IFPE</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="img/campus.jpg" class="img-responsive" style="width:100%" alt="Image">
       <p><a href="#">Como chegar no IFPE-Jabotao</a></p>
    </div>
    <div class="col-sm-4"> 
      <img src="img/exemplo.png" class="img-responsive" style="width:100%" alt="Image">
      <p><a href="#">Veja como postar no wikIFPE</a></p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p><a href="#">Ultimas postagens!</a></p>
      </div>
      <div class="well">
       <p><a href="#">Aprenda como fazer um bom trabalho</a></p>
      </div>
    </div>
  </div>
</div><br>


<footer class="container-fluid text-center">
  <p>Créditos</p>
</footer>

</body>
</html>
