


<html>

<head>
    <title>Movie Selector</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>

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
                <li><a class="dropdown-item" href="#">Jugar de nuevo</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Ver puntuación</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
        </div>
    </header>

    <!--Contenedor Ruleta-->
    <div class = "container">
        
            <div id="mainbox" class="mainbox text-center">
            <div id="box" class="box">

                <!-- parte occidental -->
                <div class="box1">
                    <span class="span1"><b>SEVILLA</b></span>
                    <span class="span2"><b>CÁDIZ</b></span>
                    <span class="span3"><b>CÓRDOBA</b></span>
                    <span class="span4"><b>HUELVA</b></span>
                </div>

                <!-- parte oriental -->
                <div class="box2">
                    <span class="span2"><b>MÁLAGA</b></span>
                    <span class="span1"><b>JAÉN</b></span>
                    <span class="span3"><b>GRANADA</b></span>
                    <span class="span4"><b>ALMERÍA</b></span>
                </div>
            </div>
            <button class="spin" id="girar" onclick="myfunction()">GIRAR</button>
        </div>  
    </div>


    <script src="script.js"></script>
</body>

</html>

<script>
    function myfunction() {

        document.getElementById("girar").removeAttribute("onclick");

        var x = 1080; //min value is 3 vueltas
        var y = 1440; // max value is 4 vueltas

        var deg = Math.floor(Math.random() * (x - y)) + y;
        var gradosFinales = deg - 1080;

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
        background-size: cover;
    }

    /*Forma de la ruleta*/
    .mainbox {
        position: relative;
        width: 500px;
        height: 500px;
        
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

    .box1 .span3 b {
        transform: translate(-50%, -50%) rotate(-270deg);
    }

    .box1 .span1 b,
    .box2 .span1 b {
        transform: translate(-50%, -50%) rotate(185deg);
    }

    .box2 .span3 b {
        transform: translate(-50%, -50%) rotate(90deg);
    }

    .box1 .span4 b,
    .box2 .span4 b {
        transform: translate(-50%, -50%) rotate(-85deg);
    }

    .box2 {
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
        animation: animateArrow 0.7s ease infinite;
    }

    @keyframes animateArrow {
        50% {
            right: -40px;
        }
    }
</style>