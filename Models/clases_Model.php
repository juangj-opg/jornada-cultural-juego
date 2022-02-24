<?php
function getConnection() {
    $user = "developer";
    $pass = "developer";
    return  new PDO('mysql:host=localhost;dbname=andalucia', $user, $pass);
}

function getClases() {
    try {
        $conn = getConnection();
        $consulta = $conn->prepare("SELECT * FROM puntuaciones");
        $consulta->execute();
        $clases = $consulta->fetchAll();
        return $clases;
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $conn = null;
}

function getClase($idClase) {
    try {
        $conn = getConnection();
        $consulta=$conn->prepare("SELECT * FROM puntuaciones WHERE id = ?");
        $consulta->bindParam(1, $idClase);
        $consulta->execute();
        $monumentos = $consulta->fetch(\PDO::FETCH_ASSOC);
        return $monumentos;
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $conn = null;
}

function getAlumnos() {
    try {
        $conn = getConnection();
        $consulta = $conn->prepare("SELECT a.nombre, p.clase, a.puntuaciones FROM alumnos a, puntuaciones p WHERE a.idClase = p.id ORDER BY a.puntuaciones DESC");
        $consulta->execute();
        $clases = $consulta->fetchAll();
        return $clases;
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $conn = null;
}

function getAlumno($idAlumno) {
    try {
        $conn = getConnection();
        $consulta=$conn->prepare("SELECT * FROM alumnos WHERE id = ?");
        $consulta->bindParam(1, $idAlumno);
        $consulta->execute();
        $monumentos = $consulta->fetch(\PDO::FETCH_ASSOC);
        return $monumentos;
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $conn = null;
}

function addAlumno($nombre, $idClase) {
    try {
        $conn = getConnection();
        $sql = $conn->prepare("INSERT INTO alumnos (nombre, idClase, puntuaciones) VALUES (?, ?, 0)");
        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $idClase);
        $sql->execute();
        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        return -1;
    }
    $conn = null;
}

function setAlumno($idAlumno, $puntuaciones) {
    try {
        $conn = getConnection();
        $sql = $conn->prepare("UPDATE alumnos SET puntuaciones=? WHERE id=?");
        $sql->bindParam(1, $puntuaciones);
        $sql->bindParam(2, $idAlumno);
        $sql->execute();
        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        return -1;
    }
    $conn = null;
}

function setClase($idClase, $puntuaciones) {
    try {
        $conn = getConnection();
        $sql = $conn->prepare("UPDATE puntuaciones SET puntuacion=? WHERE id=?");
        $sql->bindParam(1, $puntuaciones);
        $sql->bindParam(2, $idClase);
        $sql->execute();
        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        return -1;
    }
    $conn = null;
}