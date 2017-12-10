

<?php


  try{

        $conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        



        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $comentario = $_POST["comentario"];

        $stmt = $conexao->prepare("insert into faleConosco (nome, email, comentario) values (?, ?, ?);");

        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $comentario);


        $stmt->execute();

        header("Location: index.php");


  }catch(PDOException $e){
      echo $e->getMessage();
    }



 ?>