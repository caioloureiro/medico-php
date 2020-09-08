<?php

$result = mysqli_query($conn, "SELECT * FROM medico");

while ($medico = mysqli_fetch_array($result)){
	
	echo'
	<div class="medico-card">
		<div class="medico-card-linha"><a href="excluir.php?excluir=1&id='. $medico['id'] .'" onclick="return confirm(&apos;Tem certeza?&apos;)"><div class="medico-card-excluir"></div></a><a href="editar.php?editar=1&id='. $medico['id'] .'"><div class="medico-card-editar"></div></a></div>
		<div class="medico-card-linha">Nome: '. $medico['nome'] .'</div>
		<div class="medico-card-linha">CRM: '. $medico['crm'].'</div>
		<div class="medico-card-linha">Telefone: '. $medico['telefone'].'</div>
		<div class="medico-card-linha">Habilidades:</div>';
		
		if($medico['especialidade01'] !== "INEXISTENTE"){echo '<div class="medico-card-linha">'. $medico['especialidade01'] .'</div>';}
		if($medico['especialidade02'] !== "INEXISTENTE"){echo '<div class="medico-card-linha">'. $medico['especialidade02'] .'</div>';}
		if($medico['especialidade03'] !== "INEXISTENTE"){echo '<div class="medico-card-linha">'. $medico['especialidade03'] .'</div>';}
		if($medico['especialidade04'] !== "INEXISTENTE"){echo '<div class="medico-card-linha">'. $medico['especialidade04'] .'</div>';}
		if($medico['especialidade05'] !== "INEXISTENTE"){echo '<div class="medico-card-linha">'. $medico['especialidade05'] .'</div>';}
		
	echo'
	</div>
	';

}

?>