<?php
$nombres = ['Lucia','Maria','Jordi'];
$apellidos =['Serrano','Rodríguez','Reyes'];

// a) Usando array_combine fusionar los 2 en un array asociativo, mostrar el array para comprobarlo.
// array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
// print_r() muestra información sobre una variable en una forma que es legible por humanos.

$combinado = array_combine($nombres,$apellidos);
print_r($combinado);

// b) Mostrar en un string todos los nombres usando alguna funcion de arrays.
// array_keys — Devuelve todas las claves de un array o un subconjunto de claves de un array

print_r(array_keys($combinado));

// c) Mostrar en un string todos los apellidos usando alguna funcion de arrays.
// array_values — Devuelve todos los valores de un array

print_r(array_values($combinado));

//d) Usando la funcion array_flip, pon en las claves los apellidos y en los valores lo nombres.
// array_flip — Intercambia todas las claves de un array con sus valores asociados

$cambio = array_flip($combinado);
print_r($cambio);

//e) Usando array_filter, mostrar aquellos nombres cuya longitud sea inferior a 8.
// array_filter — Filtra elementos de un array usando una función de devolución de llamada. Y recorre el array
// strlen recorre cada letra del nombre.

function funcion1($num){

        if(strlen($num)<8){
            return true;
    }
    
}

print_r(array_filter($nombres, "funcion1"));

//f) Usando array_filter, mostrar aquellos apellidos cuya longitud sea inferior a 8.

function funcion2($num){

    if(strlen($num)<8){
        return true;
}

}

print_r(array_filter($apellidos, "funcion2"));


// g) Usando alguna otra funcion de arrays, mostrar en una columna los apellidos.
echo '<table border="1">';
echo '<tr>';
foreach ( $combinado as $i ) {
                echo '<td>' ,$i ,'</td>';     
}
echo '</tr>';
echo '</table>';


?>