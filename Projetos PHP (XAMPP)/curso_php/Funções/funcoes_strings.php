<?php 

//strtolower 
/*$texto = "Curso Completo de PHP";
echo strtolower($texto);*/

//strtoupper 
/*$texto = "Curso Completo de PHP";
echo strtoupper($texto);*/

//ucfirst
/*$texto = "curso completo de php";
echo ucfirst($texto);*/

//strlen
/*$texto = "Curso completo de PHP";
echo strlen($texto);*/

// Teste CPF (STRLEN)

/*$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$total_string_cpf = strlen($cpf);

if($total_string_cpf != 11 && $cpf != ''){
 echo "CPF Inválido!";
}

<form method="post" action="">
	<label>CPF: 
	<input type="text" name="cpf">
	</label>
	<input type="submit" value="cadastro">
</form>*/ 

//str_replace 
/*$texto = "345.332.456-40";
$cpf = str_replace(".", "", $texto);
$cpf = str_replace("-", "", $cpf);
echo $cpf;*/

//substr
		//0123456789............	
$texto = "Entenda porque seu smartphone esquenta tanto, se você tem um smartphone";

$noticia =  substr($texto,0,44);
echo $noticia." ...";



?>
