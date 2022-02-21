<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Scripts/Ahorcado.js"></script>
    <title>JC 2022 - Ahorcado</title>
</head>
<style>
    body {
        background-image: url("https://w.wallhaven.cc/full/mp/wallhaven-mppr9k.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        scroll-behavior: smooth;
        background-color: #cccccc;
    }

    .muñeco {
        width: 300px;
    }

    .cuadro {
        margin-left: 20%;
        margin-right: 20%;
    }
</style>

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
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php">Salir</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8 col-lg-6 align-self-end text-center text-dark mb-4 ">
                <!--resultado-->
                <div class="card p-5 mb-4 bg-light bg-opacity-70 ">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col">
                                <form method="get" action="index.php?controller=monumentos&action=ruleta">
                                    <button type="submit" class="btn btn-primary me-2 ">Jugar de nuevo</button>
                                </form>
                            </div>
                            <div class="col">
                                <form method="get" action="index.php">
                                    <button type="submit" class="btn btn-primary me-2 ">Ver puntuación</button>
                                </form>
                            </div>
                            <div class="col">
                                <form method="get" action="index.php">
                                    <button type="submit" class="btn btn-dark me-2 ">Salir</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!--palabra-->
                <div class="card p-3 mb-4 bg-light bg-opacity-70">
                    <div class="card-body ">
                        <h2 style="letter-spacing: 7px;" id="palabra"><?php echo $palabra ?> </h2>
                    </div>
                </div>
            </div>
            <!--muñeco-->
            <div class="col-12 col-md-8 col-lg-6 text-center mb-4 ">
                <div class="cuadro card p-3 mb-4 bg-light bg-opacity-50">
                    <div class="card-body">
                        <img id="muñeco" class="muñeco" src="./Content/Images/muñeco/1-suelo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!--teclado-->
            <div class="col-12 col-md-8 col-lg-6 text-center mb-4 ">
                <div class="card p-3 mb-4 bg-light  bg-opacity-50">
                    <div class="card-body">
                        <div id="virtual-keyboard">
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_Q.png" value="Q" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_W.png" value="W" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_E.png" value="E" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_R.png" value="R" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_T.png" value="T" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_Y.png" value="Y" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_U.png" value="U" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_I.png" value="I" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_O.png" value="O" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_P.png" value="P" />
                            </div>
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_A.png" value="A" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_S.png" value="S" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_D.png" value="D" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_F.png" value="F" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_G.png" value="G" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_H.png" value="H" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_J.png" value="J" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_K.png" value="K" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_L.png" value="L" />
                            </div>
                            <div class="keyboard-row">
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_Z.png" value="Z" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_X.png" value="X" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_C.png" value="C" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_V.png" value="V" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_B.png" value="B" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_N.png" value="N" />
                                <input class="letra" type="image" src="./Content/Images/letras/azul/Letter_M.png" value="M" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>