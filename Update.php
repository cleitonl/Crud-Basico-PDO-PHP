<?php

require_once('conexao.php');
$pdo = conectar();

if (isset($_GET['nome'])) {
    $nome = (trim($_GET['nome']));
    $id = $_GET['id'];

    $atualizar = $pdo->prepare("UPDATE medico SET nome_medico = ? WHERE idmedico = ?");
    $atualizar->bindValue(1, $nome);
    $atualizar->bindValue(2, $id);
    $atualizar->execute();
    $contador = $atualizar->rowCount();
    if ($contador > 0) {
        echo "Usuario Atualizado!";
    } else {
        echo "Não Houve Atualização!";
    }
} else {
    echo "sem dados!";
}
?>