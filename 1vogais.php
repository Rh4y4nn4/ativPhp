<<?php

function substituirVogais($texto) {
    return preg_replace('/[aeiouAEIOU]/', '*', $texto);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome']; 
    $resultado = substituirVogais($nome);
    echo "Original: $nome <br>";
    echo "Modificado: $resultado";
} else {
 
    echo '<form method="post">
            <label for="nome">Digite seu nome:</label>
            <input type="text" id="nome" name="nome" required>
            <input type="submit" value="Substituir Vogais">
          </form>';
}
?>
