<?php
include("Conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$celular =  $_POST["celular"];
$senha = $_POST["senha"];

try {
    $x = "INSERT INTO usuarios (`id`, `nome`, `email`, `celular`, `senha`)
          VALUES(NULL, `$nome`, `$email`, `$celular`, `$senha`)";
    $conn->exec($x);
    echo "Cadastro realizado com sucesso!!";
}catch(PDOException $e){
    echo $x . "<br\>" . $e->getMessage();
}
$conn = null;

?>