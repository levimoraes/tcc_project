<?php
include '../config/db_config.php';


$projeto_nome = $_POST["nome_projeto"];
$projeto_desc = $_POST["projeto_desc"];
$projeto_data_inicio = $_POST["projeto_data_inicio"];
$projeto_data_fim = $_POST["projeto_data_fim"];
$projeto_linguagem = $_POST["linguagem"];
$projeto_metricas[] = $_POST["metrica"];
$tipo = $_POST['metrica']; 
$valores = ''; 
foreach($tipo as $k => $v){ 
$valores .= $v .= ","; 

} 

echo "TROCOU";

adiciona_projeto($projeto_nome,$projeto_desc,$projeto_data_inicio,$projeto_data_fim,$projeto_linguagem,$valores);

echo '<script>window.location.href = "home.php";</script>';

?>