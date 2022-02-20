<html>

<head>
    <title>Movie Selector</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

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
    <br>
    <br>

    <img id="flechita" src="./Views/images/Arrow.png" alt="flecha de prueba" width="100" height="100">


    <!--Contenedor Ruleta-->

    <!-- <div class="col-12 col-md-auto mb-2 justify-content-center">  CSS APLICA EN VEZ BOOTSTRAP PARA ENCAJARLA -->

    <div id="mainbox" class="mainbox">
        <div id="box" class="box">
            <!-- parte occidental -->
            <div class="ruleta1">
                <span class="span1"><b>SEVILLA</b></span>
                <span class="span2"><b>CÁDIZ</b></span>
                <span class="span3"><b>CÓRDOBA</b></span>
                <span class="span4"><b>HUELVA</b></span>
            </div>

            <!-- parte oriental -->
            <div class="ruleta2">
                <span class="span2"><b>MÁLAGA</b></span>
                <span class="span1"><b>JAÉN</b></span>
                <span class="span3"><b>GRANADA</b></span>
                <span class="span4"><b>ALMERÍA</b></span>
            </div>
        </div>
        <button class="spin" id="girar" onclick="myfunction()">GIRAR</button>
    </div>

    <!-- </div> -->


    <script src="script.js"></script>
</body>

</html>

<script>
    function myfunction() {

        $("button").css("background-color", "grey");
        $("button").css("color", "black");
        $("button").text("·");

        $("button").toggleClass('clicked');
        $(flechita).toggleClass('flechita');

        document.getElementById("girar").removeAttribute("onclick");


        var x = 1080; //min value is 3 vueltas
        var y = 1440; // max value is 4 vueltas

        var deg = Math.floor(Math.random() * (x - y)) + y;
        var gradosFinales = deg - 1080 + 22; // -- El 22 es el punto central del primer triángulo

        console.log(gradosFinales);

        // Matemática en grados
        // Recogemos la ciudad o id para el juego

        // Almacenamos provincias por cookies:

        if (gradosFinales >= 0 && gradosFinales < 45) {
            alert("Huelva!");
            document.cookie = "provicia=4";
        } else if (gradosFinales >= 45 && gradosFinales < 90) {
            alert("Málaga!");
            document.cookie = "provicia=5";
        } else if (gradosFinales >= 90 && gradosFinales < 135) {
            alert("Sevilla!");
            document.cookie = "provicia=2";
        } else if (gradosFinales >= 135 && gradosFinales < 180) {
            alert("Almería!");
            document.cookie = "provicia=6";
        } else if (gradosFinales >= 180 && gradosFinales < 225) {
            alert("Córdoba!");
            document.cookie = "provicia=3";
        } else if (gradosFinales >= 225 && gradosFinales < 270) {
            alert("Jaén!");
            document.cookie = "provicia=8";
        } else if (gradosFinales >= 270 && gradosFinales < 315) {
            alert("Cádiz!");
            document.cookie = "provicia=7";
        } else {
            alert("Granada!");
            document.cookie = "provicia=1";
        }

        // La ruleta empieza en 22º!

        //enviar ciudades  con _POST  ajax

        //evento gira ruleta 
        document.getElementById('box').style.transition = "all ease 2s";
        document.getElementById('box').style.transform = "rotate(" + deg + "deg)";
        var element = document.getElementById('mainbox');

        element.classList.remove('animate');
        setTimeout(function() {
            element.classList.add('animate');
        }, 1000); //5000 = 5 second
    }
</script>

<style>
    /* * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        outline: none;
    }*/


    body {
        background-image: url("https://www.visitasevilla.es/sites/default/files/extended_page/img_header/plaza_espana_sevilla_0.jpg");
        background-color: #cccccc;
        background-size: cover;
    }

    /*Forma de la ruleta*/
    .mainbox {
        position: relative;
        width: 500px;
        height: 500px;
        margin: auto;
    }


    /* Flecha */
    #flechita {
        display: block;
        position: relative;
        opacity: 0.85;
        margin-left: auto;
        margin-right: auto;
    }

    .flechita {
        animation: animar;
        animation-duration: 1.75s;

    }

    .box {
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 50%;
        border: 10px solid black;
        overflow: hidden;

    }

    /*Opciones de provincias*/
    span {
        width: 50%;
        height: 50%;
        display: inline-block;
        position: absolute;
    }

    /*Opciones Jaén y Sevilla */
    .span1 {
        clip-path: polygon(0 92%, 100% 50%, 0 8%);
        background-color: green;
        top: 120px;
        left: 0;

    }

    /*Opciones Cádiz y Málaga*/
    .span2 {
        clip-path: polygon(100% 92%, 0 50%, 100% 8%);
        background-color: darkgreen;
        top: 120px;
        right: 0;
    }

    /*Opciones Amlería y Huelva*/
    .span3 {
        clip-path: polygon(50% 0%, 8% 100%, 92% 100%);
        background-color: greenyellow;
        bottom: 0;
        left: 120px;
    }

    /*Opciones Granada y Córdoba*/
    .span4 {
        background-color: lime;
        clip-path: polygon(50% 100%, 92% 0, 8% 0);
        top: 0;
        left: 120px;
    }

    /*Rotaciones de texto*/

    .ruleta1 .span3 b {
        transform: translate(-50%, -50%) rotate(-270deg);
    }

    .ruleta1 .span1 b,
    .ruleta2 .span1 b {
        transform: translate(-50%, -50%) rotate(185deg);
    }

    .ruleta2 .span3 b {
        transform: translate(-50%, -50%) rotate(90deg);
    }

    .ruleta1 .span4 b,
    .ruleta2 .span4 b {
        transform: translate(-50%, -50%) rotate(-85deg);
    }

    .ruleta2 {
        width: 100%;
        height: 100%;
        transform: rotate(-135deg);
    }

    span b {
        font-size: 24px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .spin {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 95px;
        height: 95px;
        border-radius: 50%;
        border: 4px solid black;
        background-color: #001aff;
        color: #fff;
        box-shadow: 0 5px 20px #000;
        font-weight: bold;
        font-size: 24px;
        cursor: pointer;
    }

    .spin:active {
        width: 70px;
        height: 70px;
        font-size: 18px;
    }

    .mainbox.animate:after {
        animation: animar 0.5s ease infinite;
    }

    @keyframes xml_parse {
        50% {
            right: -20px;
            left: -20px;
        }
    }

    @keyframes animar {

        0% {
            transform: rotate(0deg) scale(1);
        }

        10% {
            transform: rotate(10deg) scale(1);
        }

        20% {
            transform: rotate(-10deg) scale(1);
        }

        30% {
            transform: rotate(10deg) scale(1);
        }

        40% {
            transform: rotate(-10deg) scale(1);
        }

        50% {
            transform: rotate(10deg) scale(1);
        }

        60% {
            transform: rotate(-10deg) scale(1);
        }

        70% {
            transform: rotate(10deg) scale(1);
        }

        80% {
            transform: rotate(-10deg) scale(1);
        }

        90% {
            transform: rotate(10deg) scale(1);
        }

        100% {
            transform: rotate(0deg) scale(1);
        }
    }

    .botonBloqueado {
        background-color: gray;
    }

    .runrun {
        display: block;
        position: absolute;
        margin-left: 45%;
        margin-right: auto;
        width: 50%;
    }
</style>