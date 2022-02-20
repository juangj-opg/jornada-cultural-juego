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
    $monumento = array($count++, $monumento['monumento'], $monumento['idMonumentos']);
    $arrayProvincias[] = $monumento;
    //echo random_int(1,2);
}

$contadorMonumentos = count($arrayProvincias);

$randonMonument = random_int(1,$contadorMonumentos);

$id = 1;
foreach ($arrayProvincias as $MonumentoProvincia) {
    if ($randonMonument == $MonumentoProvincia[0]){
        $id = $MonumentoProvincia[2]; // ID del monumento seleccionado
    }
}


$monumento = getMonumento($id);

// --------

// Conversor palabra a guiones

// $monumento ha sido establecido anteriormente

$nombre =  $monumento['monumento'];
$count = mb_strlen($nombre);

$array = [];

for ($i=0; $i < $count ; $i++) { 
    $cortado = mb_substr($nombre, $i, 1);
    if ($cortado == " "){
        $array[] = " ";
    } else {
        $array[] = "_";
    }
}
$palabra = "";
foreach ($array as $P) {
    if($P == " "){
        $palabra = $palabra."&nbsp;";
    } else {
        $palabra = $palabra.$P;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Lo que se podría hacer, es pasar por Ajax las palabras (monumento) o meterlo en cookies y de esa manera usarlo ya sea con Javascript o PHP.
            fallos = 0;
            palabra = "<?php echo $nombre?>";
            palabraCaps = palabra;
            palabra = palabra.toLowerCase();

            function remplazarLetra(letra)
            {
                var letra;

                var tildes =[
                    /[\300-\306]/g, /[\340-\346]/g,  // A, a
                    /[\310-\313]/g, /[\350-\353]/g,  // E, e
                    /[\314-\317]/g, /[\354-\357]/g,  // I, i
                    /[\322-\330]/g, /[\362-\370]/g,  // O, o
                    /[\331-\334]/g, /[\371-\374]/g,  // U, u
                    /[\321]/g, /[\361]/g, // N, n
                    /[\307]/g, /[\347]/g, // C, c
                ];

                var chars = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'];

                for (var i = 0; i < tildes.length; i++)
                {
                    letra = letra.replace(tildes[i],chars[i]);
                }
                console.log("prueba")
                console.log(letra);
                return letra;
            }

            $(".letra").click(function() {
                //alert($(this).val());
                $letra = $(this).val().toLowerCase();
                console.log($letra);
                if ($letra == "á" || $letra == "é" || $letra == "í" || $letra == "ó" || $letra == "ú")
                    $letra = remplazarLetra($letra);


                if(palabra.includes($letra)){
                    $src = './Views/images/letras/verde/Letter_'+$letra.toUpperCase()+'_green.png'
                    $(this).attr('src', $src);
                    $(this).prop('disabled', true);
                    transformaGuiones($letra)

                } else {
                    $src = './Views/images/letras/rojo/Letter_'+$letra.toUpperCase()+'_red.png'
                    $(this).attr('src', $src);
                    $(this).prop('disabled', true);
                    fallos++;
                }

                switch(fallos) {
                    case 0:
                        $url = "./Views/images/muñeco/1-suelo.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 1:
                        $url = "./Views/images/muñeco/2-poster.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 2:
                        $url = "./Views/images/muñeco/3-soporte.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 3:
                        $url = "./Views/images/muñeco/4-soga.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 4:
                        $url = "./Views/images/muñeco/5-cabeza.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 5:
                        $url = "./Views/images/muñeco/6-cuerpo.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 6:
                        $url = "./Views/images/muñeco/7-brazoIzq.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 7:
                        $url = "./Views/images/muñeco/8-brazoDer.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 8:
                        $url = "./Views/images/muñeco/9-pieIzq.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 9:
                        $url = "./Views/images/muñeco/10-pieDer.png"
                        $("#muñeco").attr('src', $url);
                        break;
                    case 10:
                        $url = "./Views/images/muñeco/11-conejoCompleto.png"
                        $("#muñeco").attr('src', $url);
                        $(".letra").prop('disabled', true);
                        alert("El conejo se ha muerto :(.");
                        break;
                    
                }
                
            });

            String.prototype.replaceAt = function(index, replacement) {
                return this.substr(0, index) + replacement + this.substr(index + replacement.length);
            }

            function transformaGuiones(letra)
            {
                var palabra_actual = $("#palabra").text()
                for (let i = 0; i < palabra.length; i++) {
                    console.log(palabraCaps.substr(i, 1));

                    // Cambiador de tildes por letra normales
                    if (palabra.substr(i,1) == "á")  palabra = palabra.replaceAt(i,"a");
                    if (palabra.substr(i,1) == "é")  palabra = palabra.replaceAt(i,"e");
                    if (palabra.substr(i,1) == "í")  palabra = palabra.replaceAt(i,"i");
                    if (palabra.substr(i,1) == "ó")  palabra = palabra.replaceAt(i,"o");
                    if (palabra.substr(i,1) == "ú")  palabra = palabra.replaceAt(i,"u");
                    
                    if(palabra.substr(i, 1) == letra){
                        console.log("Coincide");
                        palabra_actual = palabra_actual.replaceAt(i, palabraCaps.substr(i, 1));
                        $("#palabra").text(palabra_actual)
                        
                    }
                    
                }
            }

        });
    </script>
</head>
<body>
<div class="card-body">
                        <div id="virtual-keyboard">
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_Q.png" value="Q"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_W.png" value="W" />
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_E.png" value="E" />
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_R.png" value="R"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_T.png" value="T"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_Y.png" value="Y"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_U.png" value="U"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_I.png" value="I"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_O.png" value="O"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_P.png" value="P"/>
                            </div>
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_A.png" value="A"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_S.png" value="S"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_D.png" value="D"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_F.png" value="F"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_G.png" value="G"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_H.png" value="H"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_J.png" value="J"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_K.png" value="K"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_L.png" value="L"/>
                            </div>
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_Z.png" value="Z"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_X.png" value="X"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_C.png" value="C"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_V.png" value="V"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_B.png" value="B"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_N.png" value="N"/>
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_M.png" value="M"/>
                            </div>
                        </div>
                    </div>

                    <img src="./Views/images/muñeco/1-suelo.png" id="muñeco" width="500px">
                    <h1 id="palabra" style="letter-spacing: 7px;"><?php echo $palabra; ?></h1>
</body>
</html>