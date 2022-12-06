<?php

$arquivo = fopen("clientes.txt", "w");

$listaClientes = [
    [
        "nome" => "Guto",
        "idade" => 36
    ],
    [
        "nome" => "Renata",
        "idade" => 30
    ],
    [
        "nome" => "Rafael",
        "idade" => 20
    ],
    [
        "nome" => "Paulo",
        "idade" => 32
    ],
    [
        "nome" => "Julia",
        "idade" => 19
    ],
    [
        "nome" => "Gabriel",
        "idade" => 21
    ],
    [
        "nome" => "Ana",
        "idade" => 18
    ]
];

for ($i = 0; $i < count($listaClientes); $i++) {
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);

?>