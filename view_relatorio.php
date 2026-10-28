<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório de Turno </title>
    </head>
    <body>
        <p> Nome do operador : <?= $nome ?> </p>
        <p> Máquina utilizada : <?= $maquina ?> </p>
        <p> Turno : <?= $turnos [$turno] ?> </p>

        <table border = "1" width = "100%">
            <tr>
                <th> Nome da máquinas</th>
                <th> Peças Produzidas </th>
                <th> Peças Boas </th>
                <th> refugo </th>
            </tr>
                <tr>
                    <td> <?= $maquina; ?> </td>
                    <td> <?= $pecas_produzidas ; ?> </td>
                    <td> <?= $pecas_refugadas ;?> </td>
                    <td> <?= $refugo ; ?> </td>
                </tr>
        </table>
    </body>
</html>