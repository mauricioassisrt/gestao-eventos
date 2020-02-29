<?php require_once("cabecalho.php"); 
require_once("banco-inserir.php"); 
require_once("banco-pessoa.php");

if(isset($_GET['mensagem'])){
	$mensagem = ($_GET['mensagem']);
echo "$mensagem";
}
?>
		<h1>Insira o Minicurso</h1>
		<br/><br/><br/><br/>
<form action="adiciona-inserir.php" method="post">
	<table class="table">

<?php include("inserir-formulario-base.php");
?>

	</table>
	</form>
<?php include("rodape.php"); ?>