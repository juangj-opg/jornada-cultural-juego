<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php include "./Models/monumentos_Model.php"; ?>

<?php
// Funcional pero hay que modificar cosas

// Tengo que limpiar código

// -----

// Recoger monumentoso de una provincia

$idProvincia = 2;

$provinciaMonumentos = getMonumentosProvincia($idProvincia);
$arrayProvincias = [];
$count = 1;

foreach ($provinciaMonumentos as $monumento) {
    //echo "<br>".$monumento['monumento'];
    $monumento = array($count++, $monumento['monumento']);
    $arrayProvincias[] = $monumento;
    //echo random_int(1,2);
}

$contadorMonumentos = count($arrayProvincias);

echo "<br>";

var_dump($arrayProvincias);
echo "<br><br>";

$randonMonument = random_int(1,$contadorMonumentos);

$monumento = getMonumento($randonMonument);
var_dump($monumento) ;


echo "<br><br>";

// --------

// Conversor palabra a guiones

// $monumento ha sido establecido anteriormente

$nombre =  $monumento['monumento'];
$count = mb_strlen($nombre);

echo $nombre;
echo "<br>";
echo $count;
echo "<br><br>";

$array = [];

for ($i=0; $i < $count ; $i++) { 
    $cortado = mb_substr($nombre, $i, 1);
    echo $cortado;
    echo "<br>";
    if ($cortado == " "){
        $array[] = " ";
    } else {
        $array[] = " _";
    }
}

var_dump($array);

$palabra = "";
echo "<br> <br>";
foreach ($array as $P) {
    if($P == " "){
        $palabra = $palabra."&nbsp;";
    } else {
        $palabra = $palabra.$P;
    }
}

echo $palabra;




?>

</body>
</html>