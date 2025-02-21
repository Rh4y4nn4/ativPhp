<?php

function removerEspacos($texto) {
    return str_replace(' ', '', $texto); 
}


$entrada = "Rhayanna precisa de férias!";
$resultado = removerEspacos($entrada);

echo "Original: $entrada <br>";
echo "Sem espaços: $resultado";
?>