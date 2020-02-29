<?php require_once("cabecalho.php"); 

 require_once("banco-inscricao.php");

if(isset($_GET['mensagem'])){
	$mensagem = ($_GET['mensagem']);
echo "$mensagem";
}
?>

Bem vindo