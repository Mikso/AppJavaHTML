<?php

include '../server/config.php';

try {

    $email = $_POST['txtEmail'];
    $password = $_POST['txtPass'];

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
    $sql->execute(array($email, $password));
    
    echo $_POST['txtEmail'];
    
} catch (PDOException $e) {
    echo $e;
}



if ($sql->rowCount() > 0) {
    session_start();
    $_SESSION['email'] = $_POST['txtEmail'];
    $_SESSION['password'] = $_POST['txtPass'];

    header("Location: ../Sys_interno/menu.php");
    echo 'ok';
} else {

    header("Location: ../login.php");
    echo 'erro';
}
?>

