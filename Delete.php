<?php

require_once('conexao.php');
$pdo = conectar();

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = $_GET['id'];

    $deletar = $pdo->prepare("DELETE FROM medico WHERE idmedico = ?");
    $deletar->bindValue(1, $id);
    $deletar->execute();
    $contador = $deletar->rowCount();
    if ($contador > 0) {
        echo "Usuario deletado!";
    } else {
        echo "Não Houve deletação!";
    }
} else {
    echo "sem dados!";
}
?>
