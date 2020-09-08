<!doctype html>
<html>
	<head>
		<title>Médico PHP</title>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="container" itemscope>
			<h1>Médico PHP</h1>
			<div class="pesquisa">
				<form class="form" action="index.php" method="GET">
					<h2>Pesquisar</h2>
					<input id="pesquisa" name="pesquisa" value="1" style="display:none"/>
					<input id="nomeINPUT" name="nome" placeholder="Digite o nome." />
					<button id="pesquisar" type="submit">Pesquisar</button>
				</form>
			</div>
			<div class="adicionar"></div>
			<div class="app">
				<?php
					
					require 'conexao.php';
					
					if(!isset( $_GET['pesquisa'] )){
						
						require 'pesquisar_tudo.php';
					
					}
					
					if(isset( $_GET['pesquisa'] )){
						
						require 'pesquisar_nome.php';
					
					}
					
					mysqli_close($conn);

				?>
			</div>
		</div>
		<div class="escurecer"><div class="fechar"></div></div>
		<div class="adicionarBOX">
			<form class="form" action="inserir.php" method="GET">
				<h2>Adicionar</h2>
				<input id="adiciona" name="adiciona" value="1" style="display:none"/>
				<input id="adicionar_nome" name="adicionar_nome" placeholder="Digite o nome." />
				<input id="adicionar_crm" name="adicionar_crm" placeholder="Digite o CRM." />
				<input id="adicionar_telefone" name="adicionar_telefone" placeholder="Digite o telefone." />
				<?php require 'select.php'; ?>
				<button id="adicionar" type="submit">Adicionar</button>
			</form>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>