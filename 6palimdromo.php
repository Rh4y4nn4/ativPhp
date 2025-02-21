<?php

function verificarPalindromo($palavra) {
    
    $palavra = strtolower(str_replace(' ', '', $palavra));

    
    if ($palavra == strrev($palavra)) {
        return "A palavra '$palavra' é um palíndromo.";
    } else {
        return "A palavra '$palavra' não é um palíndromo.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $palavra = $_POST['palavra']; 
    $resultado = verificarPalindromo($palavra);
    echo $resultado;
} else {
    
    echo '<form method="post">
            <label for="palavra">Digite uma palavra:</label>
            <input type="text" id="palavra" name="palavra" required>
            <input type="submit" value="Verificar Palíndromo">
          </form>';
}

?>