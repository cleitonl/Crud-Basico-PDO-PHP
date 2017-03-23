<?php

define("HOST", "localhost");
define("DB", "sistema_medico");
define("USER", "root");
define("PASS", "");

function conectar() {
    try {
        $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $pdo;
}

?>