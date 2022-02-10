<?php
function inicio(){
    require "Models/clases_Model.php"; 

    $clases = getClases();

    include "Views/monumentos_Inicio.php";
}
?>