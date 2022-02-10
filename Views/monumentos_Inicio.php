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
    Pendiente de Modificar.
    <!-- Pantalla de Login fp -->

    <div class="row">

        <div class="col-lg-6">
            <div class="login-form" style="border: solid black 1px;">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <input type="text" pattern="[a-Z]" class="form-control" placeholder="Introduce tu nombre" required="required">
                        <small id="emailHelp" class="form-text text-muted">* No es necesario apellido</small>
                    </div>
                    <div class="form-group">
                        <select name="clase" class="form-control" placeholder="Clase.." required="required">
                        <small id="rankingHelp" class="form-text text-muted">* ¡Hay ranking de los mejores!</small>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"><div id = "play">JUGAR</div></button>

                    </div>

                </form>
                <p class="text-center"><a href="#"></a></p>
            </div>

            <p><a class="btn btn-outline-success" href="#">View details »</a></p>
        </div>

        <!-- SIMPLIFICAR EN IMG CLASICO? -->
        <div class = "cajawapa">
        <div class="col-lg-3">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">                
                <rect width="100%" height="100%" fill="#777" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#5a6165;"></rect><text x="50%" y="50%" fill="#777" dy=".3em" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#9d9488;">140x140</text>
                <image height="140" width="140" xlink:href="https://amaga.es/image/cache/catalog/productos/banderas%20y%20mastiles/banderas%20autonomicas/andalucia-800x800.jpg" clip-path="url(#myCircle)" />                
            </svg>
            <p>¡El ahorcado andaluz!</p>
            <p>Este juego tiene una palabra pensada, relacionada con una provincia andaluza...</p>
            <p>¡Pero deberás de adivinarla!</p>
            <p>Puedes usar una pista</p>
            </p>
        </div>
</div>

        <!-- <div class = "col-lg-1">
        <div>Instrucciones</div>
        </div> -->

    </div>






    <!-- Select con PHP -->


    <style>
        body {
            padding: 100px;
            background-image: url("https://wallpaperaccess.com/full/1631263.jpg");
            background-color: #cccccc;
        }

        .login-form {
            padding: 10px;
            border-radius: 1%;
        }

        .cajawapa {
            border-radius: 1%;
            border-width: 2px;
            border-style: solid;
            padding: 50px;
        }

        .form-control {
            font-size: 48px;
        }

        .login-form {
            background-color: greenyellow;
            padding: 30px;
        }

        button {
            height: 150px;
            width: 150px;
        }

        #play {
            font-size: 48px;
        }
    
    </style>

</body>

</html>