<?php

    // funcao conectar

try {
    $pdo = new PDO("mysql:host=localhost;dbname=rh_imoveis", "root", "");
} catch (Exception $ex) {
    print "Ocorreu um erro: " . $ex ->getMessage();
    die();
}

return $pdo;

?>
