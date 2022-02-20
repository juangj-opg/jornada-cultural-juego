<?php
function ruleta(){
    require "Models/clases_Model.php"; 

    // Enviar por POST el número de opciones de la ruleta del "login" del Inicio.
    // La clase, para no perderla, se podría guardar en Cookies

    // Con ese número, configurar la ruleta en otra función

    include "Views/monumentos_Ruleta.php";
}

function ahorcado(){
    require "Models/clases_Model.php"; 

    // En caso que no tengamos la Cookie del ID de la provincia, le devolveremos a la ruleta.
    if (!isset($_COOKIE['provincia'])){
        header("index.php?controller=monumentos&action=ruleta");
    }

    // La ruleta le enviará por GET la id de provincia y con eso, 
    // recogerá una palabradicha provincia en la base de datos.

    include "Views/monumentos_Ahorcado.php";
}

?>