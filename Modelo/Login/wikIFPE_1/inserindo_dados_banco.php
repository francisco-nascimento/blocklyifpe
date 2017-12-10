<?php 

	try{

			
			$conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

			$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$stmt = $conexao->prepare("insert into usuario (matricula, nome_completo, apelido, email, senha, campus) values (?,?,?,?,?,?)");
			
				session_start();
				$matricula = $_POST["matricula"];
				$nome = $_POST["nome"];
				$_SESSION["nome"] = $nome;
				$apelido = $_POST["apelido"];
				$email =$_POST["email"];
				$_SESSION["email"] = $email;
				$senha = $_POST["senha"];
				$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
				$campus = $_POST["campus"];

				$stmt->bindValue(1, $matricula);
				$stmt->bindValue(2, $nome);
				$stmt->bindValue(3, $apelido);
				$stmt->bindValue(4, $email);
				$stmt->bindValue(5, $senhaCriptografada);
				$stmt->bindValue(6, $campus);



				$stmt->execute();

				header("Location: index.php");

	}catch(PDOException $e){
			echo $e->getMessage();
		}




// var_dump($matricula);

?>