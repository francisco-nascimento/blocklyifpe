<?php
     
    session_start();
    if (!isset($_SESSION["email"])) {
      header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>FAQ</title>
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

 <div align="center">
   
<h1>FAQ - Perguntas Frequentes</h1>
<h3>Preciso de uma conta para postar no WikiFPE?</h3>
<p>Sim, é necessária uma conta para poder postar conteúdo, e ter um controle do que e por quem está sendo postado.</p>
<h3>Posso postar sobre qualquer coisa?</h3>
<p>Sim, desde que seja algo relacionado ao seu CAMPUS, Por favor não poste algo que não seja apropriado para todas as idades.<br> &nbsp;Profanidades, conteúdo adulto, preconceitos, ódio, instruções anti-sociais, drogas, racismo e instruções para atividades ilegais ou que tenham a intenção explícita de causar ferimentos a pessoas.</p>
<h3>Preciso ser estudante / professor / funcionário do IFPE para participar do WikiFPE?</h3>
<p>Sim, pois o mesmo é voltado apenas para a Instituição</p>
<h3>Como faço uma postagem no site?</h3>
<h4>PASSO 1 - Primeiro, é necessário que possua uma conta em nosso site, clique em Cadastre-se e crie rapidamente sua conta.</h4><br>

<img src="img/faq1.png" width="50%" lenght="50%"><br>

<h4>PASSO 2 - Após a criação, entre com sua conta no site para acessar o seu perfil.</h4><br>

<img src="img/faq2.png" width="50%" lenght="50%"><br>

<h4>PASSO 3 - Volte para a tela inicial e clique em "poste aqui".</h4><br>

<img src="img/faq3.png" width="50%" lenght="50%"><br>

<h4>PASSO 4 - Insira um Título e o conteúdo de sua postagem em "Diga aqui como fazer ...", após clicar em enviar sua postagem estará disponível no site.</h4><br>

<img src="img/faq4.png" width="25%" lenght="25%"><br><br>

<p>Quaisquer dúvidas que não estejam respondidas no FAQ, não hesite em entrar em contato conosco através do "Fale Conosco".</p><br>

</div>

<footer class="container-fluid text-center">
  <p>Créditos</p>
  <P><a href="faleconosco.php"> Fale Conosco </a></P>
  <p><a href="faq.php">  FAQ</a> </p>
</footer>

</body>
</html>
