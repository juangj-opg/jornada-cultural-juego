<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <title>JC 2022 - Ahorcado</title>
</head>

<body>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap" />
            </svg>
        </a>
        <h1 class="col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            El conejo ahorcado
        </h1>
        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-dark me-5">Cerrar sesión</button>
        </div>
    </header>


    <div class="row">
        <!--teclado-->
        <div class="col-12 col-md-6 col-lg-6 text-center mb-4 ">
            <div class="card p-3 mb-4 ">
                <div class="card-body ">
                    <div id="virtual-keyboard">
                        <div class="keyboard-row">
                            <input type="image" src="./images/letras/azul/Letter_Q.png" />
                            <input type="image" src="./images/letras/azul/Letter_W.png" />
                            <input type="image" src="./images/letras/azul/Letter_E.png" />
                            <input type="image" src="./images/letras/azul/Letter_R.png" />
                            <input type="image" src="./images/letras/azul/Letter_T.png" />
                            <input type="image" src="./images/letras/azul/Letter_Y.png" />
                            <input type="image" src="./images/letras/azul/Letter_U.png" />
                            <input type="image" src="./images/letras/azul/Letter_I.png" />
                            <input type="image" src="./images/letras/azul/Letter_O.png" />
                            <input type="image" src="./images/letras/azul/Letter_P.png" />
                        </div>
                        <div class="keyboard-row">
                            <input type="image" src="./images/letras/azul/Letter_A.png" />
                            <input type="image" src="./images/letras/azul/Letter_S.png" />
                            <input type="image" src="./images/letras/azul/Letter_D.png" />
                            <input type="image" src="./images/letras/azul/Letter_F.png" />
                            <input type="image" src="./images/letras/azul/Letter_G.png" />
                            <input type="image" src="./images/letras/azul/Letter_H.png" />
                            <input type="image" src="./images/letras/azul/Letter_J.png" />
                            <input type="image" src="./images/letras/azul/Letter_K.png" />
                            <input type="image" src="./images/letras/azul/Letter_L.png" />                            
                        </div>
                        <div class="keyboard-row">
                            <input type="image" src="./images/letras/azul/Letter_Z.png" />
                            <input type="image" src="./images/letras/azul/Letter_X.png" />
                            <input type="image" src="./images/letras/azul/Letter_C.png" />
                            <input type="image" src="./images/letras/azul/Letter_V.png" />
                            <input type="image" src="./images/letras/azul/Letter_B.png" />
                            <input type="image" src="./images/letras/azul/Letter_N.png" />
                            <input type="image" src="./images/letras/azul/Letter_M.png" />
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!--muñeco-->
        <div class="col-12 col-md-6 col-lg-2 text-center mb-4 ">
            <div class="card p-3 mb-4 ">
                <div class="card-body ">

                </div>
            </div>
        </div>
        <!--palabra-->
        <div class="col-12 col-md-6 col-lg-2 text-center mb-4 ">
            <div class="card p-3 mb-4 ">
                <div class="card-body ">
                    <img class="mb-4 img-fluid" src="https://beatandmix.com/wp-content/uploads/2019/09/we-are-rebels-festival-sevilla-EDMred.jpg" width="200px">
                    <img src="">
                    <h5 class="card-title">REVELS: 5º Aniversario</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Viernes 28 enero 2022</h6>
                    <p class="card-text">30.00 €</p>
                    <button type="button" class="btn btn-secondary">COMPRAR ENTRADAS</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">


    </div>


</body>

</html>