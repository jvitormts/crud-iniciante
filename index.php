<?php
    require 'config.php';
?>
<style>
    <?php include 'CSS/style.css'; ?>
</style>
<a href="adicionar.php">Adicionar Novo usuário</a>
<table border="0" >
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th colspan="3">Ações</th>
    </tr>
    <?php
    $query = "SELECT * FROM usuarios";
    $query = $pdo->query($query);

    if($query->rowCount() > 0){
        foreach ($query->fetchAll() as $usuario){
            echo "<tr>";
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td>'.$usuario['telefone'].'</td>';
            echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> </td>';
            echo '<td><a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
            echo "</tr>";
        }
    }
    ?>
</table>

