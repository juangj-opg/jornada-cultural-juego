<?php
function inicio(){
    require "Models/clases_Model.php"; 
    $clases = getClases();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $error = true;

        $nombre = $_POST["nombre"];
        $nombre = strip_tags($nombre);
        $nombre = stripslashes($nombre);
        $nombre = htmlspecialchars($nombre);
        if (empty($nombre)) {
            $error = false;
        }

        $clase = $_POST["clase"];

        $alumno = addAlumno($nombre, $clase); // Para recoger el nombre y la ID de las clases
        header("Location: index.php?controller=monumentos&action=ruleta");
    }

    include "Views/monumentos_Inicio.php";
}

function puntuaciones(){
    require "Models/clases_Model.php"; 

    $clases = getAlumnos(); // Para recoger el nombre y la puntuación de cada clase

    include "Views/monumentos_Puntuaciones.php";
}

?>