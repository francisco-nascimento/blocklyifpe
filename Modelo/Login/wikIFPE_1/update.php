<?php    
    $conexao = mysqli_connect('localhost', 'root', '', 'wikifpe');
    
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome_completo'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $campus = $_POST['campus'];
    $query = "update usuario set matricula = '{$matricula}', nome_completo = '{$nome}', apelido = '{$apelido}', email = '{$email}', senha = '{$senha}' and campus = '{$campus}' where email = '{$email}' ;";
    $resultado = mysqli_query($conexao,$query);
    if ($resultado){
    	header ("Location: editar.php");
    }else {
        echo mysqli_error ($conexao);
    	echo "<h1> DEU ERRO !! </h1>";
    }
?>