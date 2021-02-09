<?php

function romanotoint($romano) // Função que vai converter o numero
{
    $romano = strtoupper($romano); // Convertendo para deixar maiusculo
    $n = 0; // Resultado Final
    $numeros = [  // Lista de numeros romanos
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $letras = strlen($romano); // Checa quantos caracteres existem nessa string

    for ($i = 0; $i < $letras; $i++) { // Loop para rodar de acordo com a quantidade de caracteres
        $atual = $romano[$i]; // Letra atual
        $proximo = $romano[$i + 1] ?? false; // Proximo caractere (Para PHP 7.4+)
        //$prox = (isset($romano[$i + 1])) ? $romano[$i + 1] : false; // Para PHP 7.3-

        // Verificar se existe proximo

        if ($proximo && $numeros[$proximo] > $numeros[$atual]) {
            $n = $n - $numeros[$atual];
        } else {
            $n = $n + $numeros[$atual];
        }
    }

    return $n;
}

$r = 'X'; // Numero a ser convertido
echo $r . ' = ' . romanotoint($r);
