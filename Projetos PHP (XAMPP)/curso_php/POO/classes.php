<?php 

class Pessoa{

	//Atributos 
	var $nome;
	//metodos

	function setNome($nome_definido){
		$this->nome = $nome_definido;
	}

	function getNome(){
		return $this->nome;
	}
}

$pessoa = new Pessoa();

$pessoa->setNome('Murillo');
echo $pessoa-> getNome();

?>