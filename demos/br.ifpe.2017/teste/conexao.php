<?php

$conexao = new PDO('mysql:host=localhost;dbname=teste', "root", "Eus@uacad001");
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>