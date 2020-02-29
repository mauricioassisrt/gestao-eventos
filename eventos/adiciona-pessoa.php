<?php require_once("cabecalho.php");  
 require_once("banco-pessoa.php");


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$profissao = $_POST['profissao'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$idcurso =$_POST['idcurso'];

$ultid = inserePessoa( $conexao, $nome, $cpf, $profissao, $telefone, $cidade, $email, $idcurso);

if($ultid) { 

	 	

	header("Location: minicurso-formulario.php?ultid=$ultid&idcurso=$idcurso"); ?>


<?php } else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">A Pessoa: <?= $nome; ?> Não foi inscrito: <?= $msg?></p>
<?php

}
?>

<?php include("rodape.php"); ?>