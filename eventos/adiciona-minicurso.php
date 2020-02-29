<?php require_once("banco-inscricao.php");

$idpessoa = $_POST['ultimo_id'];
$idminicursogeral = $_POST ['minicurso_geral'];
$idminicursogeral2 = $_POST ['minicurso_geral2'];
$minicursoespecifico = $_POST['minicurso_curso'];
$minicursoespecifico2 = $_POST['minicurso_curso2'];
$data = date('Y-m-d H:i:s');


if(insereInscricao($conexao,$idpessoa, $minicursoespecifico, $idminicursogeral, $minicursoespecifico2, $idminicursogeral2,$data)) {

 ?>
 	<?php

	$mensagem = "<p class='text-success'> Inscricao realizada com sucesso .. !!!</p>";

	header("Location: index.php?mensagem=$mensagem");
	?>


<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Minicurso NÃO adicionado <?= $msg?></p>
<?php

}

?>