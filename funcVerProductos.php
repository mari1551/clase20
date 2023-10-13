<?php
include 'conexion.php'; // Incluye el archivo de conexion

function obtenerProductos() {
    global $conn;

    $consulta_sql = "SELECT * FROM productos";
    $resultado = $conn->query($consulta_sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo '<div class="producto">';
            echo '<h3> ID: '.$row['id']." Nombre: ".$row['nombre'].'</h3>';
            echo '<p>Precio: $'.$row['precio'].'</p>';
            echo '</div>';
        }
    } else {
        echo 'No hay productos disponibles.';
    }
}
?>
