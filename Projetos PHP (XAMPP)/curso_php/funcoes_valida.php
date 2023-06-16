<?php 

function valida_login($login , $senha){

	//Validar Direto em um BD
	$login_bd = 'murillo.costa';
	$senha_bd = '123456';

	if($login == $login_bd && $senha == $senha_bd){
		return true;
	}
	return false;


}

?>