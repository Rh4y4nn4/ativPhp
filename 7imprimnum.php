<?php

function imprimirNumeros($limite) {
    for ($i = 1; $i <= $limite; $i++) {
        if ($i % 3 == 0) {
            echo "X<br>";
        } else {
            echo "$i<br>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero']; 
    imprimirNumeros($numero);
} else {
    
    echo '<form method="post">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" required>
            <input type="submit" value="Imprimir">
          </form>';
}

 ?>