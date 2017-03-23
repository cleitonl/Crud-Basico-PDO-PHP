<?php

require_once 'conexao.php';
$pdo = conectar();

$busca = $pdo->prepare("SELECT * FROM medico");
$busca->execute();

while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {

    echo ("{$linha['nome_medico']}" . "{$linha['email']}" . "<br>");
}
?>