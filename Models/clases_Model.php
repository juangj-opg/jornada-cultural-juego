<?php
    function getConnection() {
        $user = "developer";
        $pass = "developer"; 
        return  new PDO('mysql:host=localhost;dbname=andalucia', $user, $pass);
    }

    function getClases() {
        try { 
            $conn = getConnection();
            $consulta=$conn->prepare("SELECT * FROM puntuaciones");
            $consulta->execute();
            $clases = $consulta->fetchAll();
            return $clases;
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $conn = null;
    }

?>