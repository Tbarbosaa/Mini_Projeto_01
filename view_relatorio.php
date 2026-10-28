<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" type="text/css" href="style_relatorio.css">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <title>Relatório de Turno </title>
    </head>
    <body>
        <h2> Relatório de Turno </h2>
        <p> Nome do operador : <?= $nome ?> </p>
        <p> Máquina utilizada : <?= $maquina ?> </p>
        <p> Turno : <?= $turnos [$turno] ?> </p>

        <table border = "1" width = "100%" class = "tabela">
            <tr>
                <th> Nome da máquina</th>
                <th> Peças Produzidas </th>
                <th> Peças Boas </th>
                <th> Refugo </th>
                <th> Meta da máquina </th>
                <th> Percentual de meta </th>
                <th> Tempo Produtivo </th>
            </tr>
                <tr>
                    <td> <?= $maquina; ?> </td>
                    <td> <?= $pecas_produzidas ; ?> </td>
                    <td> <?= $pecas_boas ;?> </td>
                    <td> <?= $refugo ; ?> </td>
                    <td> <?= $maquinas_metas [$maquina] ; ?> Peças </td>
                    <td> <?= $meta_atingida ?>% </td>
                    <td> <?= $tempo_produtivo ?>% </td>
                </tr>
        </table>
        <p> <?= $get_refugo ?> </p>
        <p> <?= $get_tempo ?> </p>
        <p> <?= $get_meta ?> </p>
    </body>
</html>