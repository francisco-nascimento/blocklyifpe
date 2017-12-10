
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <head>
    <title>Cadastro de Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

    <script type="text/javascript">


        function validaSenha(){

          var senha = document.getElementById("senha")
          var confirmaSenha = document.getElementById("confirmaSenha");

          if(senha.value != confirmaSenha.value) {
            alert("Senhas diferentes, por favor insira as senha iguais!");
              confirmaSenha.focus();
                return false;
          }

                         
        }
          
    </script>
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

  	    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.html">wikIFPE</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="Poste_aqui.html"><span class="glyphicon glyphicon-globe"></span> Poste aqui</a></li> -->
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="cadastro.php"><span class="glyphicon glyphicon-list-alt"></span>Cadastre-se</a></li>
            <li><a href="faq.html"><span class="glyphicon glyphicon-question-sign"></span>FAQ</a></li>
            <li><a href="faleconosco.html"><span class="glyphicon glyphicon-envelope"></span>Fale conosco</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="form">
        
        <div class="content">
          <div id="signup">   
            <h1>Cadastro de Usuário</h1>
            
            <form action="inserindo_dados_banco.php" method="POST" onsubmit="return validaSenha();">

            <div class="field-wrap">
              <label>
                Insira Sua Matricula<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="matricula">
            </div>
            
            
              <div class="field-wrap">
                <label>
                  Nome completo<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" name="nome">
              </div>
            
              <div class="field-wrap">
              <label>
                Apelido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="apelido">
            </div>

            <div class="field-wrap">
              <label>
                Endereço de Email<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off" name="email">
            </div>
            
            <div class="field-wrap">
              <label>
                Insira uma Senha<span class="req">*</span>
              </label>
              <input type="password" required autocomplete="off" id="senha" name="senha">
            </div>

            <div class="field-wrap">
              <label>
                Confirme sua senha<span class="req">*</span>
              </label>
              <input type="password" required autocomplete="off" id="confirmaSenha" name="senha">
            </div>

            <div class="field-wrap">
              <select class="selectpicker" data-live-search="true" required title="Qual o seu campus?" data-width="100%" name="campus">
                <?php
  	              try{


  						$conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

  						$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  						$resultado = $conexao->query("select id_campus, nome_campus from campus");


                	 foreach ($resultado as $linha) {
            echo "<option data-tokens=".$linha['nome_campus']." value=".$linha['id_campus'].">".$linha['nome_campus']."</option>";
            			}

  			         }catch(PDOException $e){
  			      echo $e->getMessage();
  			         }
                ?>

              </select>

            </div>
            <div id="butao">
            <button type="submit" class='button button-block' >CADASTRAR</button>
            </div>
            </form>

          </div>
          </div>
          </div>

          
        
      </div> <!-- /form -->
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

      <footer class="container-fluid text-center">
        <p>Créditos</p>
       
      </footer>

  </body>
</html>