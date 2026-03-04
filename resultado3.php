<?php

$mf = $_POST["mf"];

if ($mf <= 1.7) {
    echo "Não pode realizar o exame.";
}

elseif ($mf >= 7.0) {
    echo "Aluno APROVADO!";
}

else {
    $ne = (50 - (6 * $mf)) / 4;
    echo "Precisa tirar $ne no exame para ser aprovado.";
}

?>