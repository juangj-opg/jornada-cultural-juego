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

    function getMonumentos() {
        try {
            $conn = getConnection();
            $consulta=$conn->prepare("SELECT * FROM monumentos");
            $consulta->execute();
            $monumentos = $consulta->fetchAll();
            return $monumentos;
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $conn = null;
    }

    function getMonumento($idMonumento) {
        try {
            $conn = getConnection();
            $consulta=$conn->prepare("SELECT * FROM monumentos WHERE idMonumentos = ?");
            $consulta->bindParam(1, $idMonumento);
            $consulta->execute();
            $monumentos = $consulta->fetch(\PDO::FETCH_ASSOC);
            return $monumentos;
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $conn = null;
    }

?>