<?php

function inverterString($texto) {
    $textoInvertido = "";
    $tamanho = strlen($texto);
    
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $textoInvertido .= $texto[$i]; 
    }
    
    return $textoInvertido;
}


$entrada = "Rhayanna vai fica loca nesse curso!";
$resultado = inverterString($entrada);

echo "Original: $entrada <br>";
echo "Alterado: $resultado";

?>