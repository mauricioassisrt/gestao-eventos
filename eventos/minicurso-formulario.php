<?php require_once("cabecalho.php"); 
require_once("banco-inscricao.php"); 

$ultid = $_GET['ultid'];
$idcurso =$_GET['idcurso'];

$minicursos = listaMinicurso($conexao);
$minicursosEspecificos = listaMinicursoEspecifica($conexao,$idcurso);

?>
		<h1>Escolha o Minicurso</h1>
		<br/><br/><br/><br/>
<form action="adiciona-minicurso.php" method="post">


<?php include("inscricao-formulario-base.php");
?>


	</form>
<?php include("rodape.php"); ?>