<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Formulario Login Kid-->

    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="titular">JUEGO DEL AHORCADO</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="login-form">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <input type="text" pattern="[a-Z]" class="form-control" placeholder="Introduce tu nombre!" required="required">
                    </div>

                    <div class="form-group">
                        <select name="clase" class="form-control" placeholder="Clase..." required="required">
                            <option hidden selected>Clase</option>
                        </select>
                        <small id="emailHelp">* ¡Hay un ranking con las mejores clases!</small>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="button" id="jugar" class="btn btn-danger">JUGAR</button>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" id="instrucciones" class="btn btn-primary">INSTRUCCIONES</button>
                    </div>


                </form>
            </div>
        </div>

        <!-- SIMPLIFICAR EN IMG CLASICO? -->
        <div class="cajawapa" style="display: none;">
            <div class="col-xs-3 center-block">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#5a6165;"></rect><text x="50%" y="50%" fill="#777" dy=".3em" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#9d9488;">140x140</text>
                    <image height="140" width="140" xlink:href="https://amaga.es/image/cache/catalog/productos/banderas%20y%20mastiles/banderas%20autonomicas/andalucia-800x800.jpg" clip-path="url(#myCircle)" />
                </svg> elkiwi además de una fruta es un tipo de ave 
                <br>
                <br>
                <div class="guia">
                    <p><b>¡El mítico ahorcado... en andaluz!</b></p>
                    <p>¡Gira la ruleta!</p>
                    <p>Debes adivinar un monumento de esa ciudad andaluza...</p>
                    <p>¡Pero deberás de hacerlo letra a letra!</p>
                    <p>Pulsa en una letra para intentar acertarlo</p>
                    <p>Puedes usar una pista ;)</p>
                </div>
                </p>
            </div>
        </div>

        <script>
            $("#instrucciones").click(function() {
                $(".cajawapa").toggle('slow');
            });
        </script>

        <!-- <div class = "col-lg-1">
        <div>Instrucciones</div>
        </div> -->

    </div>






    <!-- Select con PHP -->


    <style>
        body {
            padding: 100px;
            background-image: url("https://www.visitasevilla.es/sites/default/files/extended_page/img_header/plaza_espana_sevilla_0.jpg");
            background-color: #cccccc;
        }

        .login-form {
            border-radius: 1%;
            border-width: 4px;
            border-style: solid;
            background-color: yellow;
            padding: 50px;
        }

        .cajawapa {
            font-size: 20px;
            border-radius: 1%;
            border-width: 2px;
            border-style: solid;
            background-color: green;
            padding: 50px;
        }

        .form-control {
            font-size: 54px;
        }

        .login-form {
            background-color: greenyellow;
            padding: 30px;
        }

        button {
            height: 150px;
            width: 150px;
        }

        .btn {
            margin-top: 30px;
            padding: 10px 10px;
            font-size: 36px;
            border-radius: 30px;
            width: 300px;
            font-style: bold;
        }

        small {
            font-size: 18px;
            color: red;
            font-style: bold;
        }

        .titular {
            font-size: 54px;
            color: black;
            padding: 15px;
            background-color: black;
            margin-bottom: 30px;
            margin-top: -50px;
            border-radius: 20px;
        }

        .guia {
            font-size: 24px;
            text-align: center;
        }
    </style>

</body>

</html>