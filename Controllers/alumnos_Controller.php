<?php
session_start();

function inicio(){
    require "Models/clases_Model.php"; 
    setcookie('provincia', '', time()-60);
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
        var_dump($_SESSION);

        header("Location: index.php?controller=monumentos&action=ruleta");
    }

    include "Views/monumentos_Inicio.php";
}

function aumPunt() {
    require "Models/clases_Model.php";

    // 
    
    $alumno = getAlumno($_SESSION["idAlum"]);
    $puntuacion = $alumno['puntuaciones']+$_COOKIE['puntos'];
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

function sesion() {
    session_destroy();
    header("Location: index.php");
}

?>