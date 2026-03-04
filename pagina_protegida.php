<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


if ($usuario == "admin" && $senha == "1234") {
    echo "Bem-vindo, $usuario! Seu cargo é Administrador.";
}
elseif ($usuario == "professor" && $senha == "abcd") {
    echo "Bem-vindo, $usuario! Seu cargo é Professor.";
}
else {
    echo "Erro: Nome de usuário ou senha incorretos.";
}

?>