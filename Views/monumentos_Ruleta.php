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

    <img id="flechita" src="./Content/Images/Arrow.png" alt="flecha de prueba" width="100" height="100">


    <!--Contenedor Ruleta-->

    <!-- <div class="col-12 col-md-auto mb-2 justify-content-center">  CSS APLICA EN VEZ BOOTSTRAP PARA ENCAJARLA -->

    <div id="mainbox" class="mainbox">
        <div id="box" class="box">
            <!-- provincias occidentales -->
            <div class="ruleta1">
                <span class="span1"><b>SEVILLA</b></span>
                <span class="span2"><b>CÁDIZ</b></span>
                <span class="span3"><b>CÓRDOBA</b></span>
                <span class="span4"><b>HUELVA</b></span>
            </div>
            <!-- provincias orientales -->
            <div class="ruleta2">
                <span class="span2"><b>MÁLAGA</b></span>
                <span class="span1"><b>JAÉN</b></span>
                <span class="span3"><b>GRANADA</b></span>
                <span class="span4"><b>ALMERÍA</b></span>
            </div>
        </div>
        <button class="spin" id="girar" onclick="girarRuleta()">GIRAR</button>
    </div>
    <script src="script.js"></script>
</body>

</html>
<script>
    function girarRuleta() {
        $("button").css("background-color", "grey");
        $("button").css("color", "black");
        $("button").text("·");
        $("button").toggleClass('clicked');
        $(flechita).toggleClass('flechita');
        document.getElementById("girar").removeAttribute("onclick");

        var x = 1080; // 3 vueltas de 360º
        var y = 1440; // 4 vueltas de 360º
        var deg = Math.floor(Math.random() * (x - y)) + y;
        var gradosFinales = deg - 1080 + 22; // -- El 22º es el punto central del primer triángulo
        console.log(gradosFinales);

        // Almacenamos en cookie -> id Provincia
        if (gradosFinales >= 0 && gradosFinales < 45) {
            // alert("Huelva!");
            document.cookie = "provincia=4";
        } else if (gradosFinales >= 45 && gradosFinales < 90) {
            // alert("Málaga!");
            document.cookie = "provincia=5";
        } else if (gradosFinales >= 90 && gradosFinales < 135) {
            // alert("Sevilla!");
            document.cookie = "provincia=2";
        } else if (gradosFinales >= 135 && gradosFinales < 180) {
            // alert("Almería!");
            document.cookie = "provincia=6";
        } else if (gradosFinales >= 180 && gradosFinales < 225) {
            // alert("Córdoba!");
            document.cookie = "provincia=3";
        } else if (gradosFinales >= 225 && gradosFinales < 270) {
            // alert("Jaén!");
            document.cookie = "provincia=8";
        } else if (gradosFinales >= 270 && gradosFinales < 315) {
            // alert("Cádiz!");
            document.cookie = "provincia=7";
        } else {
            // alert("Granada!");
            document.cookie = "provincia=1";
        }

        // Animaciones
        document.getElementById('box').style.transition = "all ease 2s";
        document.getElementById('box').style.transform = "rotate(" + deg + "deg)";
        var element = document.getElementById('mainbox');

        element.classList.remove('animate');
        setTimeout(function() {
            element.classList.add('animate');
        }, 1000);

        const myTimeout = setTimeout(cambioBoton, 2100);

        // Cambia a "jugar"
        function cambioBoton() {
            $("button").css("background-color", "red");
            $("button").css("color", "white");
            $("button").text("JUGAR");
            document.getElementById("girar").setAttribute("onclick", "cambioJugar()");
        }
    }

    function cambioJugar() {
        location.href = "index.php?controller=monumentos&action=ahorcado";
    }
</script>

<style>
    body {
        background-image: url("https://www.visitasevilla.es/sites/default/files/extended_page/img_header/plaza_espana_sevilla_0.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        scroll-behavior: smooth;
        background-color: #cccccc;
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
</style>