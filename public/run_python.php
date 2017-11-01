<?php 

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);



function run_python()
{
	$command = escapeshellcmd('python algoritmo_sugestao.py');
	$output = shell_exec($command);
	return $output;
}

function escrever_dados($metrica1,$valor1,$metrica2,$valor2,$metrica3,$valor3){
	sugere_metricas($metrica1,$valor1,$metrica2,$valor2,$metrica3,$valor3);
}


?>