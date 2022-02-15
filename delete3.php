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
            $(".letra").click(function() {
                alert($(this).val());
            });

        });
    </script>
</head>
<body>
<div class="card-body">
                        <div id="virtual-keyboard">
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Views/images/letras/azul/Letter_Q.png" value="Q" />
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
</body>
</html>