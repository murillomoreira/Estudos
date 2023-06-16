<?php 

//classe mae ou superclasse
class Felino{

	var $mamifero = 'sim';

	function correr(){
		echo 'Correr felino';
	}

}
//classe filha ou subclasse
class Chita extends Felino{

	//Polimorfismo
	function correr(){
		echo 'Correr como chita 100Km/h';
	}


 }
$chita = new Chita();

echo $chita->mamifero.'<br>';
$chita->correr();






?>