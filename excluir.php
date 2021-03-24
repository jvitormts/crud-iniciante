<?php
require 'config.php';

//verificar se o id foi enviado
if (isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);

    $query = "DELETE FROM usuarios where id = '$id'";
    $pdo->query($query);

    header("Location: index.php");

}else {
    header("Location: index.php");
}

?>
