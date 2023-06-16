<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php

		//arrays simples

		//Declaração 1 

		/*$mensagens_engracadas ['a'] = 'Estou fazendo as contas aqui e edtas mês não tem jeito, vou ter que ganhar na loteria.';		
		$mensagens_engracadas ['b'] =	'As 3 coisas que as mulheres mais gostam de ouvir: Eu te amo, 50% de Desconto e você emagreceu!' ; 
		$mensagens_engracadas [3] = 'Cara feia para mim é espelho.'; 
		$mensagens_engracadas [4] =	'O Casamento é um relacionamento a dois, no qual uma das pessoas sempre está certa e a outra é o Marido!' ;
		$mensagens_engracadas [5] = 'Estou tão carente que o churrasqueiro chega e diz: "Coração" e eu respondo : "Diga Paixão! " ' ; */

		$teste = 'teste com variável';

		// Declaração 2 
		$mensagens_engracadas = array(
'a' => 2 ,
'b' => true,
3 => -7,17,
4 => $teste,
5 => 'Estou tão carente que o churrasqueiro chega e diz: "Coração" e eu respondo : "Diga Paixão! " '   );

// Impressão de arrays 

		var_dump($mensagens_engracadas);
		echo '<br />';
		echo $mensagens_engracadas[3];
		echo '<br />';
		echo $mensagens_engracadas['b'];

		
?>

		
	</body>
</html>