<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type="text/css" href="style.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Mini Projeto</title>
</head>
<body>   
        <div id = "turno">
                <h2> Registro de Turno </h2>
                <form action = "logica.php" method = "POST">
                <label for = ""> Nome do Operador: </label>
                <input type = "text" name = "nome"> 
                <br><br>
                <label for = ""> Máquinas </label>
                <select name = "maquinas">
                    <option value = "Maq-01"> Maquina 01 </option>
                    <option value = "Maq-02"> Maquina 02 </option>
                    <option value = "Maq-03"> Maquina 03 </option>
                </select>
                <br><br>
                <input type="radio" name="turno" value="primeiro">
                <label for="html">1º turno </label>
                <input type="radio" name="turno" value="segundo">
                <label for="html">2º turno </label>
                <input type="radio" name="turno" value="terceiro">
                <label for="html">3º turno </label>
                <br><br>
                <label for = ""> Peças Produzidas </label>
                <input type = "number" name = "peças_produzidas" min = "0">
                <br><br>
                <label for = ""> Peças Refugadas </label>
                <input type = "number" name = "peças_refugadas" min = "0">
                <br><br>
                <label for = ""> Minutos de Máquina Parada: </label>
                <input type = "number" name = "minutos_parada" min = "0" max = "480">
                <br><br>
                <button type = "submit"> Registar </button>
                <button class = "btn-voltar" type = "reset"> Limpar </button>
                </form>
        </div>
</body>
</html>