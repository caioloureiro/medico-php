<?php

require 'conexao.php';

$nome = $_GET['adicionar_nome'];
$crm = $_GET['adicionar_crm'];
$telefone = $_GET['adicionar_telefone'];
$especialidade01 = $_GET['adicionar_especialidade01'];
$especialidade02 = $_GET['adicionar_especialidade02'];
$especialidade03 = $_GET['adicionar_especialidade03'];
$especialidade04 = $_GET['adicionar_especialidade04'];
$especialidade05 = $_GET['adicionar_especialidade05'];

if(
$nome != '' &&
$crm != '' &&
$telefone != '' &&
$especialidade01 != '' &&
$especialidade02 != '' &&
$especialidade03 != '' &&
$especialidade04 != '' &&
$especialidade05 != ''
){

	$sql = "INSERT INTO medico (
	nome,
	crm,
	telefone,
	especialidade01,
	especialidade02,
	especialidade03,
	especialidade04,
	especialidade05
	)
	VALUES (
	'$nome',
	'$crm',
	'$telefone',
	'$especialidade01',
	'$especialidade02',
	'$especialidade03',
	'$especialidade04',
	'$especialidade05'
	)";

	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Medico inserido com sucesso'); window.location.href = 'index.php'; </script>";
	} else {
		echo "Erro: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

}else{
	echo "<script> alert('Campo em branco.'); window.location.href = 'index.php'; </script>";
}

?>