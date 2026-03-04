<?php

$numeros = [1,2,3,4,5];

unset($numeros[2]);
foreach ($numeros as $num) {
 echo $num . "<br>";
}