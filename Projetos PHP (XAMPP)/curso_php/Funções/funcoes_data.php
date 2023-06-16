<?php

//date = Y - M - D
$data = date("d-m-Y H:i");


//strtotime
$data_inicial = '2017-04-02';
$data_final = '2017-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_time = $time_final - $time_inicial;


$diaSegundos = 24*60*60;
$diferenca_dias = $diferenca_time / $diaSegundos;
echo $diferenca_dias;

?>