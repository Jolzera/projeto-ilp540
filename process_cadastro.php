<?php
include("Conecta.php");

$nome = $_POST["nome"];
$celular =  $_POST["celular"];
$senha = $_POST["senha"];

if(!isset($_SESSION)) {
	session_start();

    if(isset($_SESSION["id_usuario"]))
    {
        $id = $_SESSION["id_usuario"];
        $location = "Location:logado.php";
        $sql = "UPDATE `usuario` SET `nome`='$nome',`celular`='$celular', `senha`='$senha' WHERE `id`='$id'";

    }
    else
    {
        $email = $_POST["email"];
        $location = "Location:logado.php";
        $sql = "INSERT INTO usuario (`id`, `nome`, `email`, `celular`, `senha`) VALUES (NULL, '$nome', '$email', '$celular', '$senha')";
    }
}

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header($location);
?>