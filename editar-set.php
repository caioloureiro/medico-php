<?php

require 'conexao.php';

$id = $_GET['id'];
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

	$sql = "UPDATE medico SET
	nome = '$nome',
	crm = '$crm',
	telefone = '$telefone',
	especialidade01 = '$especialidade01',
	especialidade02 = '$especialidade02',
	especialidade03 = '$especialidade03',
	especialidade04 = '$especialidade04',
	especialidade05 = '$especialidade05'
	WHERE id = '$id'
	";

	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Medico editado com sucesso'); window.location.href = 'index.php'; </script>";
	} else {
		echo "Erro: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

}else{
	echo "<script> alert('Campo em branco.'); window.location.href = 'index.php'; </script>";
}

?>