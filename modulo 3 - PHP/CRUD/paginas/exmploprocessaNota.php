<?php
// reptições em php

$nomes  = ["Caio", "Marcos", "Diego"];
foreach ($nomes as $nome){ //for (nomes[$nome])
    echo $nome . "<br>";
}
// percorrer Array Associativo
$notasAtividades = [
    "Caio" => 10,
    "Marcos" => 8,
    "Diego" => 9
];

foreach($notasAtividades as $nome => $nota){
    echo  '<p style="color: .green;">' . $nome . "nota" . $nota . "<br> <hr></p>";
}

// percorrer dois Arrays Associativos
$notasAtividades = [
    "Caio" => 10, // é como se o nome e a nota fosse duas variaveis
    "Marcos" => 8,
    "Diego" => 9
];

$notasProvas = [
    "Caio" => 9,
    "Marcos" => 8,
    "Diego" => 10
];

foreach($notasAtividades as $nome => $nota){ // ele ta declarando as variaveis nome e nota, la no notasativdades, a seta => declara essas variaveis
    $prova = $notasProva[$nome]; //como o nome já está na chave, ele não precisa processar ela, só precisa focar na nota, que é diferente aqui
    echo  $nome . "nota" . $nota . "<br>";
    echo  $nome . "nota" . $prova . "<br>";
}
?>