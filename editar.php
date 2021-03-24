<?php

require 'config.php'; //conexão com o banco de dados
$id = 0;

//verificando o envio do id e salvando ele em variavel
if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);
}

//Verificando se dados foram enviados ao clicar no submit
if (isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $query = "UPDATE usuarios SET nome = '$nome', email = '$email',telefone = '$telefone' WHERE id = '$id' ";
    if (isset($pdo)) {
        $pdo->query($query);
    }

    header("Location: index.php");

}

    $query = "SELECT * FROM usuarios WHERE id = '$id'";
    $query = $pdo->query($query);

    if ($query->rowCount() > 0){
        $dado = $query->fetch();
    }else{
        header("Location: index.php");
    }

?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $dado['nome'];?>" /> <br/><br/>
    E-mail:<br/>
    <input type="email" name="email"  value="<?php echo $dado['email'];?>"/> <br/><br/>
    Telefone:<br/>
    <input type="text" name="telefone"  value="<?php echo $dado['telefone'];?>"/> <br/><br/>

    <input type="submit" value="Atualizar"/>
</form>