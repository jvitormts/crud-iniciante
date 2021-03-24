<?php

require 'config.php';
//Verificando o envio das informações Via Post
if( isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $query = "INSERT INTO usuarios SET nome = '$nome', email = '$email', telefone = '$telefone'";
    $pdo->query($query);

    header("Location: index.php");
}else{
    echo "ERRO";

}

?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" /> <br/><br/>
    E-mail:<br/>
    <input type="email" name="email" /> <br/><br/>
    Telefone:<br/>
    <input type="text" name="telefone" /> <br/><br/>

    <input type="submit" value="Cadastrar" />
</form>