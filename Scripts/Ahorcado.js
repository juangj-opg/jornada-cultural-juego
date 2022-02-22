$(document).ready(function () {
    /* Definición de variables necesarias para el ahorcado
    *  - fallos: Nº de fallos que se comete. Si fallas 10 veces, has perdido. A más fallos, las imágenes van cambiando
    *  - palabra: El monumento aleatorio que ha salido aleatoriamente por PHP. Se pasa a minusculas para su uso más adelante.
    *  - palabraCaps: Es el monumento aleatorio de nuevo, sin pasarlo en minuscula o cambiarle alguno de sus caracteres.
    *  - La cookie de puntos: Es la puntuación base que recibirá el jugador que lo juegue. A más fallos, menos puntos recibirá el jugador.
    */
    fallos = 0;
    palabra = getCookie("monumento")
    palabraCaps = palabra;
    palabra = palabra.toLowerCase();
    document.cookie = "puntos=10";

    /* Evento click de JQuery a la clase '.letra'
    *  - Este evento que activa una función es cada vez que haces
    *    click en uno de los botones del teclado del ahorcado.
    * 
    *  - Esta función recoge la letra pulsada, compara que esté 
    *    la palabra del monumento y si está, cambiará los guiones
    *    por la letra pulsada y en caso de error, sumará un error
    *    hasta que gaste todas sus vidas.
    */
    $(".letra").click(function () {

        // Convierte la letra en minúsculas y comprueba la acentuación de las vocales para cambiarlos
        letra = $(this).val().toLowerCase();
        if (letra == "á" || letra == "é" || letra == "í" || letra == "ó" || letra == "ú")
            letra = remplazarLetra(letra);

        // Comprueba que la letra esté incluida en el monumento 
        if (palabra.includes(letra)) {  
            // En caso que esté, pondrá la letra como verde (correcto),
            // y desactivará el botón de forma que no se pueda volver a pulsar
            src = './Content/Images/letras/verde/Letter_' + letra.toUpperCase() + '_green.png'
            $(this).attr('src', src);
            $(this).prop('disabled', true);

            // Llamará a una función para transformar los guiones en las letras correctas
            transformaGuiones(letra)

            // Y comprobará si la palabra que estaba con los guiones, está resuelta
            // - De estarlo, desactivaría todos los botones y mostraría una pantalla de que has ganado
            palabra_act = $("#palabra").text();
            if(comprobarPalabra(palabra_act, palabraCaps)){
                $(".letra").prop('disabled', true);
                $(".resultado").text("¡HAS GANADO!");
                clearInterval(intervalo);
                $(".model").removeClass("invisible").addClass("visible").css("background-color", "rgba(8, 122, 14, 0.75)");
            }

        } else {
            // En caso de que la letra no esté en la palabra, la letra se pondrá en roja, se desactivará y sumará un fallo
            src = './Content/Images/letras/rojo/Letter_' + letra.toUpperCase() + '_red.png'
            $(this).attr('src', src);
            $(this).prop('disabled', true);
            fallos++;
            $(".vidas").text(getCookie('puntos')-1);
        }
        
        /* 
        * Este switch, que se activa cada vez que una letra es pulsada,
        * mirará los fallos que hay, a más fallos, la imagenes cambiarán
        * y dará menos puntos.
        * 
        * En caso de fallar 10 veces, habrás perdido, mostrando
        * una pantalla de que has perdido y se desactivan todos
        * los botones del teclado.
        */
        switch (fallos) {
            case 0:
                $url = "./Content/Images/muñeco/1-suelo.png"
                $("#muñeco").attr('src', $url);
                break;
            case 1:
                $url = "./Content/Images/muñeco/2-poster.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=9";
                break;
            case 2:
                $url = "./Content/Images/muñeco/3-soporte.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=8";
                break;
            case 3:
                $url = "./Content/Images/muñeco/4-soga.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=7";
                break;
            case 4:
                $url = "./Content/Images/muñeco/5-cabeza.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=6";
                break;
            case 5:
                $url = "./Content/Images/muñeco/6-cuerpo.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=5";
                break;
            case 6:
                $url = "./Content/Images/muñeco/7-brazoIzq.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=4";
                break;
            case 7:
                $url = "./Content/Images/muñeco/8-brazoDer.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=3";
                break;
            case 8:
                $url = "./Content/Images/muñeco/9-pieIzq.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=2";
                break;
            case 9:
                $url = "./Content/Images/muñeco/10-pieDer.png"
                $("#muñeco").attr('src', $url);
                document.cookie = "puntos=1";
                break;
            case 10:
                $url = "./Content/Images/muñeco/11-conejoCompleto.png"
                $("#muñeco").attr('src', $url);
                $(".letra").prop('disabled', true);
                document.cookie = "puntos=0";
                $(".resultado").text("¡HAS PERDIDO!");
                clearInterval(intervalo);
                $(".model").removeClass("invisible").addClass("visible").css("background-color", "rgba(146, 44, 44, 0.75)");
                break;
        }
    });

    /* Función remplazarLetra(letra)
    *  - Esta función reemplaza una letra acentuada como 'á'
    *    para transformarlo en 'a'.
    * 
    *  - Su uso es para que no de fallos a la hora 
    *    de compararlo con el teclado.
    */
    function remplazarLetra(letra) {
        var letra;

        var tildes = [
            /[\300-\306]/g, /[\340-\346]/g,  // A, a
            /[\310-\313]/g, /[\350-\353]/g,  // E, e
            /[\314-\317]/g, /[\354-\357]/g,  // I, i
            /[\322-\330]/g, /[\362-\370]/g,  // O, o
            /[\331-\334]/g, /[\371-\374]/g,  // U, u
            /[\321]/g, /[\361]/g, // N, n
            /[\307]/g, /[\347]/g, // C, c
        ];
    
        var chars = ['A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n', 'C', 'c'];
    
        for (var i = 0; i < tildes.length; i++) {
            letra = letra.replace(tildes[i], chars[i]);
        }
        return letra;
    }

    // Modificación de la función replaceAt
    // - Esta modificación es para reemplazar segun el indice del string y por el caracter que quieras cambiarlo
    String.prototype.replaceAt = function (index, replacement) {
        return this.substr(0, index) + replacement + this.substr(index + replacement.length);
    }

    /* Función transformaGuiones(letra)
    * - La función reemplaza los guiones por la letra pulsada
    *
    * - Va recorriendo cada letra de la palabra original para saber 
    *   la ubicación (index) de la palabra y darle el cambiazo.
    */
    function transformaGuiones(letra) {
        var palabra_actual = $("#palabra").text()
        for (let i = 0; i < palabra.length; i++) {
            // Cambiador de tildes por letra normales
            if (palabra.substr(i, 1) == "á") palabra = palabra.replaceAt(i, "a");
            if (palabra.substr(i, 1) == "é") palabra = palabra.replaceAt(i, "e");
            if (palabra.substr(i, 1) == "í") palabra = palabra.replaceAt(i, "i");
            if (palabra.substr(i, 1) == "ó") palabra = palabra.replaceAt(i, "o");
            if (palabra.substr(i, 1) == "ú") palabra = palabra.replaceAt(i, "u");

            if (palabra.substr(i, 1) == letra) {
                palabra_actual = palabra_actual.replaceAt(i, palabraCaps.substr(i, 1));
                $("#palabra").text(palabra_actual)
            }
        }
    }

    /* Función getCookie(name)
    *  - Esta función solo devuelve el valor de la cookie con el nombre que
    *    se le haya dado en el argumento name.
    */
    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    /* Función comprobarPalabra(palabra_act, palabraCaps)
    *  - Esta función es la que decide si has resuelto el ahorcado o no.
    *  - Va comparando el nombre del monumento con la 
    *    la palabra de los guiones, y en caso de estar
    *    correcto, devolverá true.
    */
    function comprobarPalabra(palabra_act, palabraCaps){
        palabra_act = palabra_act.replace(/\s/g, '');
        palabraCaps = palabraCaps.replace(/\s/g, ''); 
        if(palabra_act == palabraCaps) 
            return true
        else 
            return false;
    }

    /* Función temporizador()
    * - Esta función es un temporizador de 1 minuto, que va dismuyendo.
    * - *NO IMPLEMENTADO* En caso de llegar a 0:00, mostrará el mensaje de que has perdido. 
    */
    function temporizador(){
        let h1 = document.querySelector(".tiempo");
        let centesimas = 0;
        let segundos = 5;

        function run() {
            if ((centesimas == 0) && (segundos == 0)) {
                h1.innerHTML = '0' + segundos + ':' + '0' + centesimas;
                $url = "./Content/Images/muñeco/11-conejoCompleto.png"
                $("#muñeco").attr('src', $url);
                $(".letra").prop('disabled', true);
                document.cookie = "puntos=0";
                $(".resultado").text("¡HAS PERDIDO!");
                $(".vidas").text("0");
                $(".model").removeClass("invisible").addClass("visible");
            } else {
                if (segundos < 20){
                    h1.style.color = 'red';
                }                
                if (centesimas == 0) {
                    --segundos;
                    centesimas = 99;
                } else {
                    --centesimas;
                }

                if (segundos < 10) {
                    h1.innerHTML = '0' + segundos + ':' + centesimas;
                } else {
                    h1.innerHTML = segundos + ':' + centesimas;
                }
            }
        }

        // Prueba parpadeos
        function redCountdown () {
            if (segundos < 10){
                $(h1).fadeOut("fast");
                $(h1).fadeIn("medium");
            }  
        }



        intervalo = setInterval(run, 10);
        intervaloRed = setInterval(redCountdown, 10)
    }
    temporizador();
});