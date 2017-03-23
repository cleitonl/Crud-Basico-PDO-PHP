<?php

require_once 'conexao.php';
$pdo = conectar();

$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];

$insercao = $pdo->prepare("INSERT INTO medico VALUES (DEFAULT,?,?,?)");
$insercao->bindValue(1, $nome);
$insercao->bindValue(2, $telefone);
$insercao->bindValue(3, $email);

$valida = $pdo->prepare("SELECT * FROM medico WHERE email = ?");
$valida->execute(array($email));

$result = $valida->rowCount();
if ($result == 0 && $email != "") {
    $insercao->execute();
    echo "Inserido!";
} else {
    echo "O registro ja Existe!";
}
?>
