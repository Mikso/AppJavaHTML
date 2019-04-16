<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=rh_sistema", "root", "");
    echo 'Sucesso na conexão' . '<br>';
} catch (Exception $ex) {
    print "Ocorreu um erro: " . $ex ->getMessage();
    die();
}

return $pdo;

?>
