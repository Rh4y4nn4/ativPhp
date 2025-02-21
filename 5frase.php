<?php

function contarPalavras($frase) {
    $palavras = explode(' ', $frase); 
    $numPalavras = count($palavras);  
    echo "Número de palavras: $numPalavras <br>";
      
    foreach ($palavras as $palavra) {
        echo $palavra . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $frase = $_POST['frase']; 
    contarPalavras($frase);
} else {
    
    echo '<form method="post">
            <label for="frase">Digite uma frase:</label>
            <input type="text" id="frase" name="frase" required>
            <input type="submit" value="Contar Palavras">
          </form>';
}
?>