<?php
    function getConnection() {
        $user = "developer";
        $pass = "developer"; 
        return  new PDO('mysql:host=localhost;dbname=andalucia', $user, $pass);
    }

    function getProvincia($idProvincia) {
        try {   
            $conn = getConnection();
            $consulta=$conn->prepare("SELECT * FROM provincias WHERE id = ?");
            $consulta->bindParam(1, $idProvincia);
            $consulta->execute();
            $provincia = $consulta->fetch(PDO::FETCH_ASSOC);
            return $provincia;
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $conn = null;
    }

    function getMonumentos($idProvincia1, $idProvincia2) {
        try {
            $conn = getConnection();
            $consulta=$conn->prepare("SELECT * FROM monumentos WHERE idProvincia = ? || idProvincia = ?");
            $consulta->bindParam(1, $idProvincia1);
            $consulta->bindParam(1, $idProvincia2);
            $consulta->execute();
            $monumentos = $consulta->fetchAll();
            return $monumentos;
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $conn = null;
    }

?>