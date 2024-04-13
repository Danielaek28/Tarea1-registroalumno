<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Materias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Verificar si se han enviado datos del formulario de selección de materias
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Procesar las materias seleccionadas
        $materias = $_POST["materia"];
        
        // Mostrar las materias seleccionadas
        echo "<br5><h2>Materias Seleccionadas:</h2>"."<br5>";
       
        if (!empty($materias)) {
            echo "<ul>";
            foreach ($materias as $materia) {
                echo "<li>$materia</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se seleccionaron materias</p>";
        }
    } else {
        // Si se accede directamente a esta página sin enviar datos, redireccionar a la página de registro
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>


