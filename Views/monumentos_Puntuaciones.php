<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC 2022 - Puntuaciones</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }

        td{
            width: 120px;
        }
    </style>
</head>
<body>
    <h2>Modificar esto al estilo de la página</h2>
    <h4>Y cambiarle estilo, ponerle bordes, etc. </h4>
    <table> 
        <tr><th>Clase</th><th>Puntuación</th></tr>
        <?php foreach($clases as $clase):?>
        <tr><td><?php echo $clase['clase']; ?></td><td><?php echo $clase['puntuacion']; ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>