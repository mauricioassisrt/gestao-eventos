<?php  require_once("conecta.php");
require_once("cabecalho.php");  
require_once("banco-inserir.php");



$nome = $_POST['nome'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$sala = $_POST['sala'];
$vagas = $_POST['vagas'];
$idcurso =$_POST['idcurso'];

           $d = explode ("/", $data);//tira a barra
           $data = "$d[2]-$d[1]-$d[0]";//separa as datas $d[2] = ano $d[1] = mes etc...

$insere = insereInserir( $conexao, $nome, $data, $horario, $sala, $vagas, $idcurso);

if($insere) { 

	$mensagem = "<p class='text-success'> Minicurso adicionado com sucesso .. !!!</p>";

	header("Location: inserir-formulario.php?mensagem=$mensagem");
	

?>
<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O Minicurso não foi inscrito <?= $msg?></p>
<?php

}
?>

<?php include("rodape.php"); ?>