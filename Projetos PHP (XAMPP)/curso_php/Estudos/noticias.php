<?php 

$noticias = array();

$noticias[1]['titulo'] = 'Titulo da Noticia 1';
$noticias[1]['conteudo'] = 'Conteudo da Noticia 1';

$noticias[2]['titulo'] = 'Titulo da Noticia 2';
$noticias[2]['conteudo'] = 'Conteudo da Noticia 2';

$noticias[3]['titulo'] = 'Titulo da Noticia 3';
$noticias[3]['conteudo'] = 'Conteudo da Noticia 3';

$noticias[4]['titulo'] = 'Titulo da Noticia 4';
$noticias[4]['conteudo'] = 'Conteudo da Noticia 4';

//var_dump($noticias);
//for
for ($idx=1;$idx <= 4;$idx++)
  {
	echo $noticias[$idx]['titulo'];
	echo '<br/>';
	echo $noticias[$idx]['conteudo'];
	echo '<br/>';	

  }


// Do While

/*do{
	echo $noticias[$idx]['titulo'];
	echo "<br />";
	echo $noticias[$idx]['conteudo'];
	echo "<br />";	
	$idx = $idx + 1;
} while ($idx <= 4);*/

//While
/*while ( $idx <= 3) {
	
	echo $noticias[$idx]['titulo'];
	echo '<br />';
	echo $noticias[$idx]['conteudo'];
	echo '<br />';
	$idx++;
}*/

?>