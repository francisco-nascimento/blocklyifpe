<?php


	try{

				$conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

				$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $resultado = $conexao->query("select id_usu from usuario;");

          foreach ($resultado as $linha) {
                $id = $linha["id_usu"];
               }

				$stmt = $conexao->prepare("insert into pergunta (id_usuario, titulo, descricao) values ('$id',?, ?);");


        
				$titulo = $_POST["titulo"];
				$descricao = $_POST["descricao"];

				$stmt->bindValue(1, $titulo);
				$stmt->bindValue(2, $descricao);


				$stmt->execute();


        header("Location: postagem.php");







	}catch(PDOException $e){
			echo $e->getMessage();
		}



 ?>