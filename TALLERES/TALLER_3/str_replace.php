
<?php

// Ejemplo de uso de str_replace()
$frase = "El gato negro saltó sobre el perro negro";
$fraseModificada = str_replace("negro", "blanco", $frase);

echo "Frase original: $frase</br>";
echo "Frase modificada: $fraseModificada</br>";

// Ejercicio: Crea una variable con una frase que contenga al menos tres veces la palabra "PHP"
// y usa str_replace() para cambiar "PHP" por "JavaScript"
$miFrase = "PHP es un lenguaje utilizado en servidores PHP y solo en esos entornos de Lenguaje PHP "; // Reemplaza esto con tu frase
$miFraseModificada = str_replace("PHP", "JavaScript", $miFrase);

echo "</br>Mi frase original: $miFrase</br>";
echo "Mi frase modificada: $miFraseModificada</br>";

// Bonus: Usa str_replace() para reemplazar múltiples palabras a la vez
$texto = "el Col y Repollo son vegetales. Me gustan el Col y el Repollo.";
$buscar = ["Col", "Repollo"];
$reemplazar = ["Tomate", "Brocoli"];
$textoModificado = str_replace($buscar, $reemplazar, $texto);

echo "</br>Texto original: $texto</br>";
echo "Texto modificado: $textoModificado</br>";

?>
          
