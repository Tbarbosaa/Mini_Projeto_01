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
    $get_refugo =  "Atenção a qualidade está baixa! <br>";
}
else{
    $get_refugo =  "A qualidade está dentro do padrão <br>";
}

// Máquina parada
if ($tempo_produtivo <= 60){
    $get_tempo = "Máquina necessita manutenção <br>";
}
else {
    $get_tempo = "Funcionamento padrão <br>"; 
}

// Meta alcançada
if ($pecas_boas >= $maquinas_metas [$maquina]){
    $get_meta = "A meta de peças foi atingida!! <br>";
}
else{
    $get_meta = "A meta não foi atingida, falta de produção <br>";
}

// funções do sistema

function buscaMeta (){
    return $maquinas_metas [$maquina];
}

function percentual (){
    return "Percentual de meta: $get_meta, Percentual de refugo: $get_refugo , Percentual de tempo: $get_tempo";
}



require "view_relatorio.php";
?>