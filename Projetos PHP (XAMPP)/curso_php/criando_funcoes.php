<?php  

//Função sem Retorno
function exibir_boas_vindas($nome='indefinido'){
	echo "Bem Vindo ao Curso PHP,  ".$nome;
}

//Fun~ção com Retorno
function calcular_soma($numero1,$numero2){
	return $numero1+$numero2;
}


//Chamar a função
exibir_boas_vindas();
echo '<br />';
echo calcular_soma(4,5);


?>