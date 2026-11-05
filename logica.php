<?php

$nome = $_POST ['nome'];
$maquina = $_POST ['maquinas'];
$turno = $_POST ['turno'];
$pecas_produzidas =  $_POST ['peças_produzidas'];
$pecas_refugadas = $_POST ['peças_refugadas'];
$minutos_parada =  $_POST ['minutos_parada'];


// Arrays
$maquinas_metas = [
    "Maq-01" => 2000,
    "Maq-02" => 1500,
    "Maq-03" => 2500,
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

// Não deixando a meta ultrapassar de 100%
if ($meta_atingida > 100){
    $meta_atingida = 100;
}

// Regras que o sistema precisa ter

// Regra de Refugo
if ($refugo > 5){
    $get_refugo =  "Refugo: Atenção! O refugo ultrapassou o limite de 5%, a qualidade da produção precisa melhorar <br>";
}
else{
    $get_refugo =  "Refugo: O refugo se manteu abaixo dos 5%. A qualidade da produção está dentro do padrão <br>";
}

// Máquina parada
if ($minutos_parada >= 60){
    $get_tempo = "Tempo: A máquina necessita manutenção, ela esteve parada por muito tempo durante o turno <br>";
}
else {
    $get_tempo = "Tempo: A máquina esteve operando no tempo padrão <br>"; 
}

// Meta alcançada
if ($pecas_boas >= $maquinas_metas [$maquina]){
    $get_meta = "Meta: A meta de peças foi atingida!! <br>";
}
else{
    $get_meta = "Meta: A meta não foi atingida, necessário o aumento de produção <br>";
}

// funções do sistema

function buscaMeta (){
    return $maquinas_metas [$maquina];
}

function calcularMediaPecas($pecas_boas, $total_horas = 8) {
     $media_peca = $pecas_boas / $total_horas;
     return "A média de peças produzidas por hora foi: ". $media_peca;
}

$refugo = number_format($refugo, 2, ".", ",");

require "view_relatorio.php";
?>
