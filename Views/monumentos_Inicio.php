<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <body>

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-dark">
            <a class="d-flex align-items-center text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <h1 class="col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-light">
                El conejo ahorcado
            </h1>
            <div class="dropdown text-end me-5">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/802/802338.png" alt="mdo" width="52" height="52" class="rounded-circle">
                </a>
                <<<<<<< HEAD <ul class="dropdown-menu fs-3 text-center">
                    <li><a class="dropdown-item" href="index.php?controller=alumnos&action=puntuaciones">Ver puntuación</a></li>
                    </ul>
            </div>
        </header>
        <!-- Formulario Login Kid-->

        <!-- BANDERA -->

        <div class="row me-0">
            <div class="col-md-6">
                <div class="login-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="nombre" style="background-color: white" pattern="[a-Z]" class="form-control text-center" placeholder="Introduce tu nombre" required="required">
                        </div>
                        <div class="form-group">
                            <select name="clase" style="background-color: white" class="form-control text-center" placeholder="Clase..." required="required">
                                <option value="vacio" selected disabled> Elige tu clase </option>
                                <?php foreach ($clases as $clase) : ?>
                                    <option value="<?php echo $clase['id']; ?>"><?php echo $clase['clase']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <small id="emailHelp"><br>* ¡Hay un ranking con las mejores clases! 🥇🥈🥉</small>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="jugar" class="btn btn-danger">JUGAR</button>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="button" id="instrucciones" class="btn btn-primary">INSTRUCCIONES</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- SIMPLIFICAR EN IMG CLASICO? -->


            <div class="col-md-5 center-block cajawapa" style="display: none;">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#5a6165;"></rect><text x="50%" y="50%" fill="#777" dy=".3em" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#9d9488;">140x140</text>
                    <image height="140" width="140" xlink:href="https://amaga.es/image/cache/catalog/productos/banderas%20y%20mastiles/banderas%20autonomicas/andalucia-800x800.jpg" clip-path="url(#myCircle)" />

                </svg>

                <br>
                <br>
                <div class="guia">
                    <p><b>¡El mítico ahorcado... en andaluz!</b></p>
                    <p>¡Gira la ruleta!</p>
                    <p>Debes adivinar un monumento de esa ciudad andaluza...</p>
                    <p>¡Pero deberás de hacerlo letra a letra!</p>
                    <p>Clickea en una letra para intentar acertarlo</p>
                </div>
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
                padding: 0px;
                background-image: url("https://www.visitasevilla.es/sites/default/files/extended_page/img_header/plaza_espana_sevilla_0.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
                scroll-behavior: smooth;
                background-color: #cccccc;
            }

            .login-form {
                border-radius: 1%;
                border-width: 5px;
                border-style: solid;
                background: url('https://upload.wikimedia.org/wikipedia/commons/6/63/Flag_of_Andalusia_%28simple%29.svg');
                padding: 50px;
                margin-left: 30px;
            }

            .cajawapa {
                font-size: 20px;
                border-radius: 1%;
                border-width: 5px;
                border-style: solid;
                background-color: green;
                padding: 50px;

            }

            .form-control {
                font-size: 38px;
                padding: 3px;

            }

            .login-form {
                background-color: greenyellow;
                padding: 30px;
            }


            .btn {
                height: 100px;
                width: 100px;
                margin-top: 30px;
                padding: 10px 10px;
                font-size: 32px;
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