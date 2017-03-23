<?php

require_once 'conexao.php';
    $pdo = conectar();
    
    $pdo->beginTransaction();
    $insertmed = $pdo->query("INSERT INTO medico VALUES (31,'s americo','918293819283','joseamerico@gmail.com')");
   

    $insertesp = $pdo->query("INSERT INTO especialidade (idespecialidade,nome_especialidade)VALUES (5,'nome')");

     
     
    $pdo->commit();