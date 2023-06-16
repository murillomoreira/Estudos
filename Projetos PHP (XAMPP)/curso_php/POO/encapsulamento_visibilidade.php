<?php 

class Veiculo{

	/*
	public
	private
	protected
	*/


	private $placa;
	private $cor;
	protected $tipo="Compacto";

	public function setPlaca($p_placa){
		//validação placa
		$this->placa=$p_placa;
	}
	public function getPlaca(){
		return $this->placa;
	}
}

class Carro extends Veiculo{
	public function exibirTipo(){
		echo $this->tipo;
	}
}

$carro = new Carro();
$carro->exibirTipo();


?>