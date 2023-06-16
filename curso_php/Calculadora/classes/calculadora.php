<?php 

Class Calculadora{
	
	private $total;
	private $num1;
	private $num2;

	function __construct(){
		$this->total = 0;
		$this->num1  = 0;
		$this->num2  = 0;
	}

	//getter e setter
	public function setNum1($p_num1){
		$this->num1 = $p_num1;
	}
	public function setNum2($p_num2){
		$this->num2 = $p_num2;
	}


	//operações
	public function somar(){
	$this->total = $this->num1 + $this->num2; 
	}

		public function subtrair(){
	$this->total = $this->num1 - $this->num2; 
	}

		public function multiplicar(){
	$this->total = $this->num1 * $this->num2; 
	}

		public function dividir(){
	$this->total = $this->num1 / $this->num2; 
	}

	public function getTotal(){
		return $this->total;
	}

}

?>