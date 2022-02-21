<html>

<head>
    <title>JC 2022 - Ruleta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Content/Styles/monumentos_Ruleta.css">
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

    <img id="flechita" src="https://images.vexels.com/media/users/3/177365/isolated/lists/5b3f55baf4232653a76b962443617e32-hoja-de-zanahoria-plana.png" alt="flecha de prueba" width="160">


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