<?php 

/*creamos la baraja ("bolsa" de las cartas)*/
function crearBaraja()
{
    $valores = ["1", "2", "3", "4", "5", "6", "7", "J", "Q", "K"];
    $palos = ["T", "D", "C", "P"];

    $baraja = [];
    foreach ($palos as $palo) { // por cada palo..
        foreach ($valores as $valor) { //...lee todos los valores
            $baraja[] = $valor . $palo; // concatenamos valores y palos (cada palo con cada valor) 
        }
    }
    shuffle($baraja); //barajamos el array de baraja
    return $baraja; 
}

//damos valores a las cartas
function valorCartas($valores)
{
    if ($valores == "1") {
        return 1;
    }
    if (in_array($valores, ["J", "Q", "K"])) {
        return 0.5;
    }
    return (int) $valores;
}

//repartimos las cartas
function repartirCartas($baraja, $numCartas)
{
    $numJugadores = 4; // siempre juegan 4 jugadores
    $posicion = 0;     // posición de la siguiente carta a repartir

    $manos = [];
    for ($j = 0; $j < $numJugadores; $j++) {
        $manos[$j] = []; //creamos la mano de cada jugador en un array (vacía)
        for ($c = 0; $c < $numCartas; $c++) {
            $manos[$j][] = $baraja[$posicion]; // damos la carta de esa posición
            $posicion++; // pasamos a la siguiente carta
        }
    }
    return $manos;
}

//calculamos las puntuaciones
function calcularPuntuaciones($manos)
{
    $puntuaciones = [];
    for ($j = 0; $j < 4; $j++) { //Recorremos los jugadores...
        $total = 0;
        foreach ($manos[$j] as $carta) { //recorremos la mano de cada jugador...
            $valor = $carta[0]; // primer carácter de la carta ("7T", se queda solo con el 7)
            $total += valorCartas($valor); 
        }
        $puntuaciones[$j] = $total;
    }
    return $puntuaciones;
}

function ganadores($puntuaciones)
{
    $mejor = 0; // mejor puntuación válida 

    //buscamos la puntuación más alta sin pasarse de 7.5
    foreach ($puntuaciones as $puntos) {
        if ($puntos <= 7.5 && $puntos > $mejor) {
            $mejor = $puntos;
        }
    }

    // guardamos los jugadores que tienen esa puntuación
    $ganadores = [];
    //STACKOVERFLOW→  return array_keys($puntuaciones, $mejor); //revisa todas las puntuaciones y se queda con la mejor
    for ($j = 0; $j < 4; $j++) {
        if ($puntuaciones[$j] == $mejor) { //comprueba empates 
            $ganadores[] = $j;
        }
    }
    
    return $ganadores;
}

//calculamos los premios
function calcularPremios($puntuaciones, $ganadores, $apuesta)
{
    $premios = [0, 0, 0, 0]; // premio de cada jugador 
    $porcentaje = 0.5;

    $premioCadaUno = $apuesta * $porcentaje / count($ganadores); 

    if (count($ganadores) == 0) { // Si nadie gana no se reparte nada
        return $premios;
    }

    if ($puntuaciones[$ganadores[0]] == 7.5) { // si el ganador tiene un 7.5...
        $porcentaje = 0.8; // el porcentaje es de 0.8
    }

    foreach ($ganadores as $j) { 
        $premios[$j] = $premioCadaUno;
    }
    return $premios;
}

//obtenemos las iniciales de un nombre y apellidos
function iniciales($nombre)
{
    $iniciales = "";
    foreach (explode(" ", $nombre) as $palabra) { //separamos el nombre por el espacio en un array, recorremos cada elemento (palabra)
        //substr($palabra, 0, 1) → empezamos en el caracter 0, cogemos solo una letra (la primera letra)
        $iniciales .= strtoupper(substr($palabra, 0, 1));  //vamos recogiendo las primeras letras y las separamos por un punto
    }
    return $iniciales;
}

?>

