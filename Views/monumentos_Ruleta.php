<html>

<head>
    <title>Movie Selector</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<<<<<<< HEAD
=======
    <!-- Formulario Login Kid-->

<<<<<<< HEAD
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap" />
            </svg>
        </a>
        <h1 class="col-12 col-md-auto mb-2 justify-content-center mb-md-0">
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
                <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
        </div>
    </header>
=======
    <!-- BANDERA -->
>>>>>>> 44c8b8074892a24e93bce484f8880bb22d849efb

    <div class="row">
        <div class="col-md-6">
            <div class="login-form">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <input type="text" style = "background-color: white" pattern="[a-Z]" class="form-control text-center" placeholder="Introduce tu nombre" required="required">
                    </div>

                    <div class="form-group">
                        <select name="clase" style = "background-color: white"  class="form-control text-center" placeholder="Clase..." required="required">
                            <option value="vacio" selected disabled> Elige tu clase </option>
                            <?php foreach($clases as $clase):?>
                            <option value="<?php echo $clase['id']; ?>"><?php echo $clase['clase']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small id="emailHelp"><br>* ¡Hay un ranking con las mejores clases! 🥇🥈🥉</small>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" id="jugar" class="btn btn-danger">JUGAR</button>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" id="instrucciones" class="btn btn-primary">INSTRUCCIONES</button>
                    </div>
                </form>
            </div>
        </div>
>>>>>>> 23f64c369127e3f5dbc2e0d782dc4d301f76ad8f

    <h1> Which movie should I watch?</h1>
    <br>
    <br>

    <div id="mainbox" class="mainbox">
        <div id="box" class="box">
            <div class="box1">
                <span class="span1"><b>SEVILLA</b></span>
                <span class="span2"><b>HUELVA - CÁDIZ</b></span>
                <span class="span3"><b>GRANADA - MÁLAGA</b></span>
                <span class="span4"><b>JAÉN - ALMERÍA</b></span>
            </div>
            <div class="box2">
                <span class="span1"><b>SEVILLA - CORDOBA</b></span>
                <span class="span2"><b>HUELVA - CÁDIZ</b></span>
                <span class="span3"><b>GRANADA - MÁLAGA</b></span>
                <span class="span4"><b>JAÉN - ALMERÍA</b></span>
            </div>
        </div>

        <button class="spin" onclick="myfunction()">SPIN</button>
    </div>


    <script src="script.js"></script>
</body>

</html>

<script>
    function myfunction() {


        var x = 1024; //min value
        var y = 9999; // max value

        var deg = Math.floor(Math.random() * (x - y)) + y;

        document.getElementById('box').style.transform = "rotate(" + deg + "deg)";

        var element = document.getElementById('mainbox');
        element.classList.remove('animate');
        setTimeout(function() {
            element.classList.add('animate');
        }, 1000); //5000 = 5 second
    }
</script>

<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        outline: none;
    }

    b {
        font-size: 16px;
    }


    body {
        font-family: Open Sans;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        overflow: hidden;
        background-image: url("https://www.visitasevilla.es/sites/default/files/extended_page/img_header/plaza_espana_sevilla_0.jpg");
        background-color: #cccccc;
    }

    .mainbox {
        position: relative;
        width: 500px;
        height: 500px;
    }

    .mainbox:after {
        position: absolute;
        content: '';
        width: 32px;
        height: 32px;
        background: url('arrow-left.png') no-repeat;
        background-size: 32px;
        right: -30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .box {
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 50%;
        border: 10px solid #fff;
        overflow: hidden;
        transition: all ease 5s;
    }

    span {
        width: 50%;
        height: 50%;
        display: inline-block;
        position: absolute;
    }

    .span1 {
        clip-path: polygon(0 92%, 100% 50%, 0 8%);
        background-color: #fffb00;
        top: 120px;
        left: 0;
    }

    .span2 {
        clip-path: polygon(100% 92%, 0 50%, 100% 8%);
        background-color: #ff4fa1;
        top: 120px;
        right: 0;
    }

    .span3 {
        clip-path: polygon(50% 0%, 8% 100%, 92% 100%);
        background-color: #ffaa00;
        bottom: 0;
        left: 120px;
    }

    .span4 {
        clip-path: polygon(50% 100%, 92% 0, 8% 0);
        background-color: #22ff00;
        top: 0;
        left: 120px;
    }


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
        font-size: px;
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
        width: 75px;
        height: 75px;
        border-radius: 50%;
        border: 4px solid #fff;
        background-color: #001aff;
        color: #fff;
        box-shadow: 0 5px 20px #000;
        font-weight: bold;
        font-size: 22px;
        cursor: pointer;
    }

    .spin:active {
        width: 70px;
        height: 70px;
        font-size: 20px;
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