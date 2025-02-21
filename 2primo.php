<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]); 

   
    function ehPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

   
    if (ehPrimo($numero)) {
        $mensagem = "$numero é um número primo.";
    } else {
        $mensagem = "$numero não é um número primo.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Primo</title>
</head>
<body>
    <h2>Verifique se um número é primo</h2>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    
    if (isset($mensagem)) {
        echo "<p><strong>$mensagem</strong></p>";
    }
    ?>
</body>
</html>