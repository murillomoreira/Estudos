<?php
//inicio do programa/execução

//is_array($array_verificar) 
/* Verifica se uma variável é um array */
/* Return true or false */ 
$array = array('notebook','teclado');
$retorno = is_array($array);

if($retorno){
	echo "Verdadeiro".'<br>';
}else{
	echo "Falso".'<br>';}

//in_array('mar','windows')
/* Verificar se um valor existe em um array*/
/* Return true or false */ 
$array2 = array('mac','linux','windows');
$retorno2 = in_array('solaris', $array2);

if($retorno2){
echo "Verdadeiro".'<br>';
}else{
	echo "Falso".'<br>';}

//array_keys 
/* Retona todas as chaves de um array */
$produtos = array(10 =>'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

var_export($chaves_array);
echo '<br/>';

//sort 
/* Ordena um array */
/* Return true or false */ 
$frutas = array(0=>'Banana',1=>'Amora',2=>'Caju');

sort($frutas);
var_export($frutas);
echo "<br />";

//asort 
/* Ordena um array, mantendo indice/valor */
/* Return true or false */ 
$frutas2 = array(0=>'Banana',1=>'Amora',2=>'Caju');

asort($frutas2);
var_export($frutas2);
echo "<br />";

// count
/* Conta elementos de um array */
$frutas3 = array(0=>'Banana',1=>'Amora',2=>'Caju');

$itens_array = count($frutas3);
echo $itens_array.'<br>';

//array_merge 
/*Funde um ou mais arrays*/
$array3 = array('mac','linux');
$array4 = array ('windows');

$novo_array = array_merge($array3,$array4);
var_export($novo_array);
echo "<br>";

//explode
/*Divide uma string baseado em um delimitador*/
$string = "20/10/2020";
$retorno3 = explode("/", $string);

var_export($retorno3);
echo '<br>';

//implode 
/*Junta elementos de um array em uma string*/
$nova_string = implode("-", $retorno3);
echo $nova_string;






//fim_execução
?>