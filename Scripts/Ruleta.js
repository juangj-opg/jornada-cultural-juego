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