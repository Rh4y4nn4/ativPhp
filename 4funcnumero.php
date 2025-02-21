<?php

function verificarNumero($numero) {
    if ($numero > 0) {
        return "O número é positivo.";
    } elseif ($numero < 0) {
        return "O número é negativo.";
    } else {
        return "O número é zero.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero']; 
    $resultado = verificarNumero($numero);
    echo $resultado;
} else {
   
    echo '<form method="post">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" required>
            <input type="submit" value="Verificar">
          </form>';
}
?>