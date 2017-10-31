<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include '../config/db_config.php';
include '../config/lista_metricas.php';
include 'run_python.php';


$projeto_nome = $_POST["nome_projeto"];
$projeto_desc = $_POST["projeto_desc"];
$projeto_data_inicio = $_POST["projeto_data_inicio"];
$projeto_data_fim = $_POST["projeto_data_fim"];
$projeto_linguagem = $_POST["linguagem"];
$projeto_widget = $_POST["widget"];
$projeto_git = $_POST['url_gitHub'];

$metrica1 = $_POST['metrica_1'];
$valor1 = $_POST['valor_1'];
$metrica2 = $_POST['metrica_2'];
$valor2 = $_POST['valor_2'];
$metrica3 = $_POST['metrica_3'];
$valor3 = $_POST['valor_3'];
$metricas = "$metrica1,$valor1;$metrica2,$valor2;$metrica3,$valor3";

$valor1 = ($valor1*5)/100;
$valor2 = ($valor2*5)/100;
$valor3 = ($valor3*5)/100;

$v = run_python();
echo "<script> alert(' $v[0] ') </script>";

//sugestao_metricas($metrica1,$valor1,$metrica2,$valor2,$metrica3,$valor3);


//adiciona_projeto($projeto_nome,$projeto_desc,$projeto_data_inicio,$projeto_data_fim,$projeto_linguagem,$metricas,$projeto_widget,$projeto_git);

//echo '<script>window.location.href = "home.php";</script>';

?>