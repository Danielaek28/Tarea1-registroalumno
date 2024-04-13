<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $edad = $_POST["edad"];
        $cuatrimestre = $_POST["cuatrimestre"];
        $matricula = $_POST["matricula"];
        
       
        echo "<br5><h2>Datos del Alumno Registrado:</h2>"."<br5>";
        
        echo "Nombre:". $nombre ."<br>";
        echo "Apellidos:". $apellidos ."<br>";
        echo "Edad:" . $edad ."<br>";
        echo "Cuatrimestre:" . $cuatrimestre."<br>";
        echo "Matrícula: ". $matricula."<br>";
    ?>
                <div id="loginMaterias">
            <h2>Seleccionar Materias</h2>
            <form id="materiasForm" action="materias.php" method="post">
                <label><input type="checkbox" name="materia[]" value="Programacion de sitios web"> Programacion de sitios web</label><br>
                <label><input type="checkbox" name="materia[]" value="Seminario de Invetigacion"> Seminario de Invetigacion</label><br>
                <label><input type="checkbox" name="materia[]" value="Desarrollo sustentable"> Desarrollo sustentable</label><br>
                <label><input type="checkbox" name="materia[]" value="Contabilidad"> Contabilidad</label><br>
                <label><input type="checkbox" name="materia[]" value="Aplicaciones movides"> Aplicaciones movides</label><br>
                <label><input type="checkbox" name="materia[]" value="Administracion"> Administracion</label><br>
                <button type="submit">Agregar Materias</button>
            </form>
        </div>

    <?php
    } else {
    ?>
        <div id="registro">
            <h1>Registro de Alumnos</h1>
            <form id="registroForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required><br>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required><br>
                <label for="cuatrimestre">Cuatrimestre:</label>
                <input type="number" id="cuatrimestre" name="cuatrimestre" required><br>
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" required><br>
                <button type="submit" id="btnRegistro">Registrar</button>
            </form>
        </div>
    <?php
    }
    ?>
</body>
</html>
