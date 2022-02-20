<?php
session_start();

function inicio(){
    require "Models/clases_Model.php"; 
    unset($_COOKIE['provincia']);
    //session_destroy();
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
        $alumno = addAlumno($nombre, $clase);
        $_SESSION["idAlum"] = $alumno;
        $clase = getAlumno($alumno);
        $_SESSION["idClas"] = $clase["idClase"];
        //$alumno = addAlumno($nombre, $clase); // Para recoger el nombre y la ID de las clases
        header("Location: index.php?controller=monumentos&action=ruleta");
    }

    include "Views/monumentos_Inicio.php";
}

function aumPunt() {
    require "Models/clases_Model.php";

    // 
    $alumno = getAlumno($_SESSION["idAlum"]);
    $puntuacion = $alumno['puntuaciones']+1;
    setAlumno($_SESSION["idAlum"], $puntuacion);

    $clase = getClase($_SESSION["idClas"]);
    $puntuacion = $clase['puntuacion']+1;
    setClase($_SESSION["idClas"], $puntuacion);

    header("Location: index.php?action=puntuaciones");
}

function puntuaciones(){
    require "Models/clases_Model.php"; 

    $clases = getAlumnos(); // Para recoger el nombre y la puntuación de cada clase

    include "Views/monumentos_Puntuaciones.php";
}

?>