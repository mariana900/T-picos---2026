<html>
    <link rel="stylesheet" href="index.css">
    </html>

<?php

include('conexao.php');

$id= $_GET['id'];

$sql = "DELETE FROM contatos WHERE id=$id";

if (mysqli_query($conexao,$sql)){
    echo "<h2>O contato foi excluido com sucesso!</h2>";
    echo "<a href='index.php'>VOLTAR </a>";
    exit;
} 
else{
    echo "<h2>Erro ao ecluir o contato.</h2>" . msqli_error($conexao);
        echo "<a href='index.php'>VOLTAR </a>";
exit;
}

?>