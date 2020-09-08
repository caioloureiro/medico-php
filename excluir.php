<?php

require 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM medico WHERE id = ". $id;

if ($conn->query($sql) === TRUE) {
	echo "<script> alert('Medico excluido com sucesso'); window.location.href = 'index.php'; </script>";
} else {
	echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>