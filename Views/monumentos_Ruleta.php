<html>

<head>
    <title>JC 2022 - Ruleta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Content/Styles/monumentos_Ruleta.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="Scripts/Ruleta.js"></script>
</head>

<body>

    <!-- Cabecera con el título y menú -->
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
                <li> <hr class="dropdown-divider"> </li> <!-- Divisor -->
                <li><a class="dropdown-item" href="index.php">Salir</a></li>
            </ul>
        </div>
    </header>

    
    <!-- Contenido de la ruleta-->
        <!-- Flecha encima de la ruleta-->
    <img id="flechita" src="https://images.vexels.com/media/users/3/177365/isolated/lists/5b3f55baf4232653a76b962443617e32-hoja-de-zanahoria-plana.png" alt="flecha de prueba" width="160">

        <!-- Ruleta -->
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
</body>

</html>ç