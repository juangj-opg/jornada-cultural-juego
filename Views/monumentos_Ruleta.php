<html>

<head>
    <title>Movie Selector</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <h1>Listado de Provincias</h1>
    <br>
    <br>

    <div id="mainbox" class="mainbox">
        <div id="box" class="box">
            <!-- OCCIDENTAL EXAMPLE -->
            <div class="box1">
                <span class="span1"><b>SEVILLA</b></span>
                <span class="span2"><b>CÁDIZ</b></span>
                <span class="span3"><b>CÓRDOBA</b></span>
                <span class="span4"><b>HUELVA</b></span>

            </div>
            <!-- ORIENTAL EXAMPLE -->
            <div class="box2">
                <span class="span2"><b>MÁLAGA</b></span>
                <span class="span1"><b>JAÉN</b></span>
                <span class="span3"><b>GRANADA</b></span>
                <span class="span4"><b>ALMERÍA</b></span>

            </div>
        </div>

        <button class="spin" id="girar" onclick="myfunction()">GIRAR</button>
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
        border: 10px solid black;
        overflow: hidden;
        transition: all ease 3s;
    }

    span {
        width: 50%;
        height: 50%;
        display: inline-block;
        position: absolute;
    }

    .span1 {
        clip-path: polygon(0 92%, 100% 50%, 0 8%);
        background-color: green;
        top: 120px;
        left: 0;

    }

    .span2 {
        clip-path: polygon(100% 92%, 0 50%, 100% 8%);
        background-color: darkgreen;
        top: 120px;
        right: 0;
    }

    .span3 {
        clip-path: polygon(50% 0%, 8% 100%, 92% 100%);
        background-color: greenyellow;
        bottom: 0;
        left: 120px;
    }

    .span4 {
        background-color: lime;
        clip-path: polygon(50% 100%, 92% 0, 8% 0);
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