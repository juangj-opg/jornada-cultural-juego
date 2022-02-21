$(document).ready(function () {
    // Lo que se podría hacer, es pasar por Ajax las palabras (monumento) o meterlo en cookies y de esa manera usarlo ya sea con Javascript o PHP.
    fallos = 0;
    palabra = getCookie("monumento")
    palabraCaps = palabra;
    palabra = palabra.toLowerCase();
    document.cookie = "puntos=10";

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
        console.log("prueba")
        console.log(letra);
        return letra;
    }

    $(".letra").click(function () {
        //alert($(this).val());
        letra = $(this).val().toLowerCase();
        console.log(letra);
        if (letra == "á" || letra == "é" || letra == "í" || letra == "ó" || letra == "ú")
            letra = remplazarLetra(letra);


        if (palabra.includes(letra)) {
            src = './Content/Images/letras/verde/Letter_' + letra.toUpperCase() + '_green.png'
            $(this).attr('src', src);
            $(this).prop('disabled', true);
            transformaGuiones(letra)

        } else {
            src = './Content/Images/letras/rojo/Letter_' + letra.toUpperCase() + '_red.png'
            $(this).attr('src', src);
            $(this).prop('disabled', true);
            fallos++;
        }

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
                break;
        }

    });

    String.prototype.replaceAt = function (index, replacement) {
        return this.substr(0, index) + replacement + this.substr(index + replacement.length);
    }

    function transformaGuiones(letra) {
        var palabra_actual = $("#palabra").text()
        for (let i = 0; i < palabra.length; i++) {
            console.log(palabraCaps.substr(i, 1));
            // Cambiador de tildes por letra normales
            if (palabra.substr(i, 1) == "á") palabra = palabra.replaceAt(i, "a");
            if (palabra.substr(i, 1) == "é") palabra = palabra.replaceAt(i, "e");
            if (palabra.substr(i, 1) == "í") palabra = palabra.replaceAt(i, "i");
            if (palabra.substr(i, 1) == "ó") palabra = palabra.replaceAt(i, "o");
            if (palabra.substr(i, 1) == "ú") palabra = palabra.replaceAt(i, "u");

            if (palabra.substr(i, 1) == letra) {
                console.log("Coincide");
                palabra_actual = palabra_actual.replaceAt(i, palabraCaps.substr(i, 1));
                $("#palabra").text(palabra_actual)
            }
        }
    }

    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
});