<?php
require_once("conecta.php");

function insereInserir($conexao, $nome, $data, $horario, $sala, $vagas, $idcurso) {
$query= "insert into minicursos(nome, data, horario, sala, vagas, idCurso) values ('{$nome}','{$data}','{$horario}','{$sala}','{$vagas}','{$idcurso}')";
 
 return mysqli_query($conexao,$query);
 
}
?>