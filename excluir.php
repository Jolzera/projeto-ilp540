<?php
include("authentica.php");

include("Conecta.php");

$id = $_GET["id"];

$sql = "DELETE FROM `usuario` WHERE `id` = '$id'";

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

if(!isset($_SESSION)) session_start();
session_destroy();

header("Location:index.php");

?>