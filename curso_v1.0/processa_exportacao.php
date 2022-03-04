<?php

include 'db.php';

$tabela = $_POST['tabela'];

$query = "SELECT * FROM $tabela ";

$exporta_dados = mysqli_query($conexao, $query);

$rows = array();
while($r = mysqli_fetch_assoc($exporta_dados)) {
    $rows[] = $r;
}

file_put_contents('dados.json',(json_encode($rows, JSON_UNESCAPED_UNICODE)));

header('location:index.php?pagina=exportar_dados');
