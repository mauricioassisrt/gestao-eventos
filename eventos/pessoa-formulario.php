<?php require_once("cabecalho.php"); 
require_once("banco-pessoa.php"); 

$pessoa = array("nome" => "", "cpf" => "", "profissao" => "", "telefone" => "", "cidade" => "", "email" => "", "idcurso" => "");

?>
		<h1>Formulario de Pessoa</h1>
<form action="adiciona-pessoa.php" method="post">
	<table class="table">

<?php include("pessoa-formulario-base.php"); ?>

	</table>
	</form>
<?php include("rodape.php"); ?>