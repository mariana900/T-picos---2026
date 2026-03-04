<?php

$produto = [
    "nome" => "livro: Trono de vidro",
    "preço" => "R$49,90",
    "estoque" => 17,
];
foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
