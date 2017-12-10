<?php 
	

	$conexao = mysqli_connect('localhost', 'root', '', 'wikifpe');
    if (!$conexao){
        die("ERROR: " . mysqli_connect_error());
    }


    $email = $_GET["email"];

    $query = "update pergunta set id_usuario = null where id_usuario = (select id_usuario from usuario where email = '$email');";

    $resultado = mysqli_query($conexao,$query);

    $query1 = "delete from usuario where email = '$email';";

    $resultado = mysqli_query($conexao,$query1);

    

     if ($resultado){  

    	header("Location: adms.php");
    }else {
    	echo "<h1> DEU ERRO !! </h1>";
       }

?>