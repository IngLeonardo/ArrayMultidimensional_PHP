<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/jpg" href="./fav.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de notas</title>
</head>
<body>
    <h1>Ingreso de notas de estudiantes</h1>
        <form action="procesa.php" method = "POST">
        <label for="estudiante">Ingrese cod del estudiante:</label>
        <input id="estudiante" type="text" name="estudiante" placeholder ="Ingrese codigo estudiante">
        <label for="tipoNota">Seleccione que nota vas a modificar:</label>
        <select id="tipoNota" name="tipoNota" onchange="elegir_opcion(this);">
            <option value="">Elija un tipo</option>
            <option value="nota1">Nota 1</option>
            <option value="nota2">Nota 2</option>
            <option value="nota3">Nota 3</option>
        </select>

        <label for="valor">Digite valor nota:</label>
        <input id="valor" type="text" name="valor" placeholder ="Ingrese valor de nota">


        <input type="submit" value="Enviar Datos">

    </form>

</body>
</html>

