<?php
require_once("conecta.php");

function inserePessoa($conexao, $nome, $cpf, $profissao, $telefone, $cidade, $email, $idcurso) {
$query= "insert into pessoa(nome, cpf, profissao, telefone, cidade, email, idCurso) values ('{$nome}','{$cpf}','{$profissao}','{$telefone}','{$cidade}','{$email}','{$idcurso}')";
$exe= mysqli_query($conexao,$query);
 
 $ultid= mysqli_insert_id($conexao);
 return $ultid;
}

function listaMiniCurso($conexao){
	$curso= array();
	$query= "select * from curso where id";
	$resultado= mysqli_query($conexao,$query);
	while($cursos= mysqli_fetch_assoc($resultado)){
		array_push($curso,$cursos);
	}
	return $curso;
}