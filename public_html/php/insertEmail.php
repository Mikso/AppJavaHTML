
<?php
    include '../server/config.php';
    
       $email = $_POST['txtEmail'];
       $password = $_POST['txtPass'];
       
try{       
$sql = $pdo->prepare("INSERT INTO usuario(email, senha) VALUES (:txtEmail, :txtPass)");
$sql->bindValue(":txtEmail", $email);
$sql->bindValue(":txtPass", $password);
$sql->execute();
echo '<br> Gravado <br>';

}catch(PDOException $e){
    echo 'Erro';
    var_dump($e);
}

?>