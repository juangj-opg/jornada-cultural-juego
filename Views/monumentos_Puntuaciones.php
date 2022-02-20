<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <title>JC 2022 - Puntuaciones</title>
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

        .muñeco {
            width: 300px;
        }

        .cuadro {
            margin-left: 20%;
            margin-right: 20%;
        }

        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }

        td {
            width: 120px;
        }

        .ancho {
            width: 300px;
        }
    </style>
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
                <li><a class="dropdown-item" href="index.php?controller=monumentos&action=ruleta">Jugar de nuevo</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php?controller=monumentos&action=puntuaciones">Ver puntuación</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php">Salir</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="row">

            <table class="bg-light align-items-center">
                <tr>
                    <th class="bg-success">
                        <h1>Nombre</h1>
                    </th>
                    <th class="bg-success">
                        <h1>Curso</h1>
                    </th>
                    <th class="ancho bg-success">
                        <h1>Puntuación</h1>
                    </th>
                </tr>
                <?php foreach ($clases as $clase) : ?>
                    <tr>
                        <td><?php echo $clase['nombre']; ?></td>
                        <td><?php echo $clase['clase']; ?></td>
                        <td><?php echo $clase['puntuaciones']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>