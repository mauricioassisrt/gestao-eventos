<?php require_once("conecta.php");

function insereInscricao($conexao,$idpessoa, $minicursoespecifico, $idminicursogeral, $minicursoespecifico2, $idminicursogeral2,$data){

	$query="insert into inscricao (idPessoa, idMinicursos1,idMinicursos2,idMinicursos3,idMinicursos4,data)  values ('{$idpessoa}','{$minicursoespecifico}','{$minicursoespecifico2}','{$idminicursogeral}','{$idminicursogeral2}','{$data}')";
	return mysqli_query($conexao,$query)  or die ('Could not look up user information; ' . mysqli_error($conexao));

}

function listaMinicurso($conexao){
	$minicursos = array();
	$query = "select * from minicursos order by idcurso, nome asc";
	$resultado = mysqli_query ($conexao, $query);
	while ($minicurso = mysqli_fetch_assoc ($resultado)) {
		array_push ($minicursos, $minicurso);
	}
	return $minicursos;

}
function listaMinicursoEspecifica($conexao,$idcurso){
	$minicursosEspecificos = array();
	$query = "select * from minicursos where idcurso = {$idcurso} order by nome ";
	$resultado = mysqli_query ($conexao, $query);
	while ($minicursoEspecifico = mysqli_fetch_assoc ($resultado)) {
		array_push ($minicursosEspecificos, $minicursoEspecifico);
	}
	return $minicursosEspecificos;

}