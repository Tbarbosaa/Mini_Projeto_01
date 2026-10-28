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
echo "O tempo produtivo foi de: ".$tempo_produtivo .  " minutos <br>";
echo "Refugo:  ". $refugo. "<br>";
echo "Peças boas: ". $pecas_boas. "<br>";

// Regras que o sistema precisa ter

// Regra de Refugo
if ($refugo > 5){
    echo "Qualidade baixa! <br>";
}
else{
    echo "Qualidade Padrão <br>";
}

// Máquina parada
if ($tempo_produtivo <= 60){
    echo "Máquina necessita manutenção <br>";
}
else {
    echo "Funcionamento padrão <br>"; 
}

// Meta alcançada
if ($meta_atingida == $maquinas_metas [$maquina]){
    echo "A meta de peças foi atingida!! <br>";
}
else{
    echo "Falta de produção <br>";
}

// funções do sistema

function buscaMeta (){
    return $maquinas_metas [$maquina];
}

function percentualProdução ($pecas_boas, $pecas_produzidas){
    $percentual_pecas = ($pecas_boas - $pecas_produzidas) / $pecas_produzidas;
    echo $percentual_pecas. "%";
}

$maquina_relatorio = [
    ["Nome" => "Maq-01", "Peças_produzidas" => $pecas_produzidas, "Peças_Boas" => $pecas_boas, "Refugo" => $refugo],
    ["Nome" => "Maq-02", "Peças_produzidas" => $pecas_produzidas, "Peças_Boas" => $pecas_boas, "Refugo" => $refugo],
    ["Nome" => "Maq-03", "Peças_produzidas" => $pecas_produzidas, "Peças_Boas" => $pecas_boas, "Refugo" => $refugo]
];

require_once "view_relatorio.php";
?>