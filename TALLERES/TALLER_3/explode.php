
<?php
// Ejemplo de uso de explode()
$frase = "Manzana,Naranja,Plátano,Uva";
$frutas = explode(",", $frase);

echo "Frase original: $frase</br>";
echo "Array de frutas:</br>";
print_r($frutas);

// Ejercicio: Crea una variable con una lista de tus 5 películas favoritas separadas por guiones (-)
// y usa explode() para convertirla en un array
$misPeliculas = "Alien el octavo pasajero - Superman - Terminator - Roky Balboa - Alien Vs Depredador"; // Reemplaza esto con tu lista de películas
$arrayPeliculas = explode("-", $misPeliculas);

echo "</br>Mis películas favoritas:</br>";
print_r($arrayPeliculas);

// Bonus: Usa explode() con un límite
$texto = "de las cinco peliculas Uno,Dos,Tres,Cuatro,Cinco me gustaron mas las que estan enlistadas";
$array = explode(",", $texto, 3);

echo "</br>Texto original: $texto</br>";
echo "Array con límite:</br>";
print_r($array);
?>
      
