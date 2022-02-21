<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JC 2022 - Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Content/Styles/monumentos_Inicio.css">
    
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
                <ul class="dropdown-menu fs-3 text-center">
                    <li><a class="dropdown-item" href="index.php?controller=alumnos&action=puntuaciones">Ver puntuación</a></li>
                    <li>

                </ul>
            </div>
        </header>


        <!-- Bandera-->

        <div class="row me-0">
            <div class="col-md-6">
                <div class="login-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="nombre"  pattern="[a-Z]" class="form-control text-center bg-light" placeholder="Introduce tu nombre" required="required">
                        </div>
                        <div class="form-group">
                            <select name="clase" class="form-control text-center bg-light" placeholder="Clase..." required="required">
                                <option value="vacio" selected disabled> Elige tu clase </option>
                                <?php foreach ($clases as $clase) : ?>
                                    <option value="<?php echo $clase['id']; ?>"><?php echo $clase['clase']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <small><br>* ¡Hay un ranking con las mejores clases! 🥇🥈🥉</small>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="jugar" class="btn btn-success">JUGAR</button>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="button" id="instrucciones" class="btn btn-light">INSTRUCCIONES</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--Instrucciones-->
            <div class="col-md-5 center-block cajawapa bg-success" style="display: none;">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#5a6165;"></rect><text x="50%" y="50%" fill="#777" dy=".3em" data-darkreader-inline-fill="" style="--darkreader-inline-fill:#9d9488;">140x140</text>
                    <image height="140" width="140" xlink:href="https://amaga.es/image/cache/catalog/productos/banderas%20y%20mastiles/banderas%20autonomicas/andalucia-800x800.jpg" clip-path="url(#myCircle)" />
                </svg>
                <span class="ms-5"><b>¡El mítico ahorcado... en andaluz!</b></span>

                <br>
                <br>
                <div class="guia text-light">
                    <p>¡Gira la ruleta!</p>
                    <p>Debes adivinar un monumento de esa provincia andaluza...</p>
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

    </body>

</html>