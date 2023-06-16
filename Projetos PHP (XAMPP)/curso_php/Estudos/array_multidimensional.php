<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Tabuleiro de Xadrez</title>
	</head>

	<body>

<?php

	$tabuleiro[8]['a'] = 'torre preto';
	$tabuleiro[8]['b'] = 'cavalo preto';
	$tabuleiro[8]['c'] = 'bispo preto';
	$tabuleiro[8]['d'] = 'rainha preto';
	$tabuleiro[8]['e'] = 'Rei preto';
	$tabuleiro[8]['f'] = 'bispo preto';
	$tabuleiro[8]['g'] = 'cavalo preto';
	$tabuleiro[8]['h'] = 'torre preto';

	$tabuleiro[7]['a'] = 'piao preto';
	$tabuleiro[7]['b'] = 'piao preto';
	$tabuleiro[7]['c'] = 'piao preto';
	$tabuleiro[7]['d'] = 'piao preto';
	$tabuleiro[7]['e'] = 'piao preto';
	$tabuleiro[7]['f'] = 'piao preto';
	$tabuleiro[7]['g'] = 'piao preto';
	$tabuleiro[7]['h'] = 'piao preto';



	print_r($tabuleiro);
	print '<br />';
	print $tabuleiro[8]['e'];
	print '<br />';
	print $tabuleiro[8]['g'];
		
?>

		
	</body>
</html>