<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase20</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>  
    <header>
        <div id="titulo">
            <h1>Ejercicios Clase 20</h1>
        </div>             
    </header>
    <nav>
        <?php
            include 'opciones.php'
        ?>
    </nav>
    <h2 style="color:#304773; margin-top:20px; margin-bottom:20px;text-align:center;">Eliminando ID Impares</h2>
    <br>
        
    <?php
        include 'conexion.php';

        global $conn;

        $consulta_todos="SELECT * FROM productos";
        $resultado_todo=$conn->query($consulta_todos);
        $cont=0;

        if($resultado_todo->num_rows>0){

            while ($row = $resultado_todo->fetch_assoc()) {
                $id = $row['id'];

                if($id % 2 !=0){
                    
                    $consulta_eliminar="DELETE FROM productos WHERE id=$id";

                    if ($conn->query($consulta_eliminar) !== TRUE) {
                        echo "Error al eliminar el registro con ID $id: " . $conn->error;
                    } else {
                        echo '<div id="listadoEliminacion">';
                        echo "Registro con ID $id eliminado correctamente.<br>";
                        echo '</div>';
                        $cont++;

                    }

                }
            }
        }
        // Cerrar la conexión a la base de datos
        $conn->close();
        echo "Se eliminaron $cont productos en la base de datos<br>";
    ?>
    <footer>
        <p>Realizado por: Mariana Delgado - Clase 20 - 12 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>




