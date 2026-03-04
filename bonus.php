<?php

$cadastro = [
    [
        "nome" => "Ana",
        "idade" => 17,
        "curso" => "Informática"
    ],
    [
        "nome" => "Bruno",
        "idade" => 18,
        "curso" => "Administração"
    ],
    [
        "nome" => "Carla",
        "idade" => 16,
        "curso" => "Enfermagem"
    ]
];


foreach ($cadastro as $aluno) {
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Idade: " . $aluno["idade"] . "<br>";
    echo "Curso: " . $aluno["curso"] . "<br>";
    echo "<hr>";
}

?>