<?php
function inicio(){
    require "Models/clases_Model.php"; 

    $clases = getClases(); // Para recoger el nombre y la ID de las clases

    include "Views/monumentos_Inicio.php";
}

function puntuaciones(){
    require "Models/clases_Model.php"; 

    $clases = getClases(); // Para recoger el nombre y la puntuación de cada clase

    include "Views/monumentos_Puntuaciones.php";
}

function ruleta(){
    require "Models/clases_Model.php"; 

    // Enviar por POST el número de opciones de la ruleta del "login" del Inicio.
    // La clase, para no perderla, se podría guardar en Cookies

    // Con ese número, configurar la ruleta en otra función

    include "Views/monumentos_Ruleta.php";
}

function ahorcado(){
    require "Models/clases_Model.php"; 

    // La ruleta le enviará por GET la id de provincia y con eso, 
    // recogerá una palabradicha provincia en la base de datos.

    include "Views/monumentos_Ahorcado.php";
}

?>