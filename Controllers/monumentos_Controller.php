<?php
function ruleta(){
    require "Models/clases_Model.php"; 

    // Enviar por POST el número de opciones de la ruleta del "login" del Inicio.
    // La clase, para no perderla, se podría guardar en Cookies

    // Con ese número, configurar la ruleta en otra función

    include "Views/monumentos_Ruleta.php";
}

function ahorcado(){
    require "Models/monumentos_Model.php"; 

    // En caso que no tengamos la Cookie del ID de la provincia, le devolveremos a la ruleta.
    if (!isset($_COOKIE['provincia']))
        header("Location: index.php?controller=monumentos&action=ruleta");
    else
        $ID_Provincia = $_COOKIE['provincia'];

    // Recogemos todos los monumentos según la provincia seleccionada por la ruleta
    $monumentosProvincia = getMonumentosProvincia($ID_Provincia);

    // Recoger el ID de un monumento aleatorio según la provincia
    $ID_Monumento = getIDMonumentoAleatorio($monumentosProvincia);

    // Obtenemos en un único array todos los datos del monumento seleccionado
    $monumento = getMonumento($ID_Monumento);

    // Y convertimos el nombre en guiones que será usado en el juego.
    $palabra = convertirMonumentoEnGuiones($monumento);

    include "Views/monumentos_Ahorcado.php";
}

function getIDMonumentoAleatorio($monumentosProvincia)
{
    /* 
    * Va leyendo el anterior array y recogeremos el nombre del monumento 
    * y la ID del monumento guardándolo sobre un nuevo Array. 
    *
    * Quedaría el array de Granada tal que así:
    * Array [ Array[1,"La Alhambra", 1], Array[2,"Corral del Carbón",10] ]
    *
    * El primer número es para más adelante y usarlo de número aleatorio entre los dos monumentos.
    */
    
    $ArrayMonumentos = [];
    $count = 1;
    foreach ($monumentosProvincia as $monumento) {
        $monumento = array($count++, $monumento['monumento'], $monumento['idMonumentos']);
        $ArrayMonumentos[] = $monumento;
    }

    /* 
    * Contaremos cuantos monumentos hay en el Array 
    * y elegiremos aleatoriamente uno de los dos según el primer número del Array.
    *
    * Si hay dos monumentos, se elegirá entre el nº 1 y 2.
    * Si hay tres, entre el 1, 2 y el 3.
    * Y si hay un único monumento, solo se elegirá el 1.
    */
    $CuentaMonumentos = count($ArrayMonumentos);

    $randomMonument = random_int(1,$CuentaMonumentos);
    $ID_Monumento = 0;

    foreach ($ArrayMonumentos as $MonumentoProvincia) {
        if ($randomMonument == $MonumentoProvincia[0]){
            $ID_Monumento = $MonumentoProvincia[2]; // ID del monumento seleccionado
        }
    }

    return $ID_Monumento;
}

function convertirMonumentoEnGuiones($monumento)
{
    // Recogeremos el nombre del monumento y contaremos cuantos carácteres existen.
    $nombreMonumento =  $monumento['monumento'];
    $cuentaLetras = mb_strlen($nombreMonumento);

    /*
    * Transformaremos la palabra en _ o espacios y guardarlo en un Array.
    *
    * Por ejemplo, Torre del Oro quedaría:
    *       _ _ _ _ _  _ _ _  _ _ _
    */
    $array = [];
    for ($i=0; $i < $cuentaLetras ; $i++) { 
        $cortado = mb_substr($nombreMonumento, $i, 1);
        if ($cortado == " "){
            $array[] = " ";
        } else {
            $array[] = "_";
        }
    }

    /*
    * Ahora, cada caracter del Array lo juntaremos en
    * una única palabra, que es la que se mostrará en la página.
    */
    $palabra = "";
    foreach ($array as $P) {
        if($P == " "){
            $palabra = $palabra."&nbsp;";
        } else {
            $palabra = $palabra.$P;
        }
    }

    return $palabra;
}

?>