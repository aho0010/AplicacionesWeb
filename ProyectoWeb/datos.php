<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Datos recibidos:</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($_POST['nombre']) . "</p>";
    echo "<p><strong>Apellidos:</strong> " . htmlspecialchars($_POST['apellidos']) . "</p>";
    echo "<p><strong>Ciudad:</strong> " . htmlspecialchars($_POST['ciudad']) . "</p>";
    
    if (isset($_POST['preferencias'])) {
        echo "<p><strong>Preferencias:</strong> " . implode(", ", $_POST['preferencias']) . "</p>";
    } else {
        echo "<p><strong>Preferencias:</strong> Ninguna seleccionada.</p>";
    }
} else {
    echo "<p>No se han enviado datos.</p>";
}
?>
