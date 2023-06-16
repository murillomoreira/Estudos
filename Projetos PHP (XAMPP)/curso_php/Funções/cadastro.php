<?php 


if( isset($_POST['nome']) && empty ($_POST['nome'])){
	echo 'Campo Obrigatório Nome não preenchido <br/>';
}

if( isset($_POST['cpf']) && empty ($_POST['cpf'])){
	echo 'Campo Obrigatório CPF não preenchido <br/>';
}

if( isset($_POST['cpf']) && !is_numeric($_POST['cpf'])){
	echo 'Tipo inválido para CPF <br/>';
}




?>



<form method="post" action="">
	<label>
		Nome completo*:
		<input type="text" name="nome">
	</label>

	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">


</form>