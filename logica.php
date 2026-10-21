<?php

$nome = $_POST ['nome'];
$maquina = $_POST ['maquinas'];
$turno = $_POST ['turno'];
$pecas_produzidas =  $_POST ['peças_produzidas'];
$pecas_refugadas = $_POST ['peças_refugadas'];
$minutos_parada =  $_POST ['minutos_parada'];


// Arrays
$maquinas_metas = [
    "maq_01" => 2000,
    "maq_02" => 1500,
    "maq_03" => 2500,
];

$turnos = [
    "primeiro" => "Manhã",
    "segundo" => "Tarde",
    "terceiro" => "Noite"
];

// Contas que o sistema deve fazer
$pecas_boas = $pecas_produzidas - $pecas_refugadas;
$refugo = $pecas_refugadas / $pecas_produzidas * 100;
$meta_atingida = $pecas_boas / $maquinas_metas [$maquina] * 100;
$tempo_produtivo = (480 - $minutos_parada) / 480 * 100;
echo "O tempo produtivo foi de: ".$tempo_produtivo .  " minutos";

// Regras que o sistema precisa ter
?>