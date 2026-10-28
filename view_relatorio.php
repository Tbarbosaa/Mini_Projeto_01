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
                <th> Meta </th>
                <th> Peças Produzidas </th>
                <th> Peças Boas </th>
            </tr>
        <?php foreach ($maquina_relatorio as $maq): ?>
                <tr>
                    <td> <?= $maquina_relatorio ['Nome']; ?> </td>
                    <td> <?= $maquina_relatorio ['Peças_produzidas']; ?> </td>
                    <td> <?= $maquina_relatorio ['Peças_Boas']; ?> </td>
                    <td> <?= $maquina_relatorio ['Refugo'] ; ?> </td>
                </tr>
           <?php  endforeach ?>
        </table>
    </body>
</html>