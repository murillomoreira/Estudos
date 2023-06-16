<?php 


//__construct
Class Pessoa{

	private $nome;

	public function correr(){
		echo $this->nome." Correndo <br>";
	}

	function __construct($p_nome){
		echo "Construtor Iniciado <br>";
		$this->nome = $p_nome;
	}

	function __destruct(){
		echo "Objeto Removido <br>";
	}

}
$pessoa = new Pessoa('Murillo');
$pessoa->correr();


//__destruct



?>