<?php

require 'conexao.php';

$result = mysqli_query($conn, "SELECT * FROM medico WHERE id = ". $_GET['id']);

?>
<!doctype html>
<html>
	<head>
		<title>Médico PHP</title>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="adicionarBOX on">
			<?php while ($medico = mysqli_fetch_array($result)){ ?>
				<form class="form" action="editar-set.php" method="GET">
					<h2>Editar</h2>
					<input id="adiciona" name="adiciona" value="1" style="display:none"/>
					<input id="adiciona" name="id" value="<?php echo $medico['id'] ?>" style="display:none"/>
					<input id="adicionar_nome" name="adicionar_nome" placeholder="Digite o nome." value="<?php echo $medico['nome'] ?>" />
					<input id="adicionar_crm" name="adicionar_crm" placeholder="Digite o CRM." value="<?php echo $medico['crm'] ?>" />
					<input id="adicionar_telefone" name="adicionar_telefone" placeholder="Digite o telefone." value="<?php echo $medico['telefone'] ?>" />
					<?php require 'select.php'; ?>
					<button id="adicionar" type="submit">Salvar</button>
				</form>
			<?php } ?>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>