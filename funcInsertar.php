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
    <h2 style="color:#304773; margin-top:20px; margin-bottom:20px;text-align:center;">Ingreso de Productos</h2>
    <br>
    <?php
        include 'conexion.php'; //incluir archivo de conexion a la base de datos

        if($_SERVER['REQUEST_METHOD']=='POST'){ //recuperar datos del formulario            

            $nombre= $_POST['nombre'];
            $precio= $_POST['precio'];
            

            //consulta sql para insertar el id es autoincremental 
            $consulta_sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
            $resultado = $conn->query($consulta_sql);  
            
            if ($resultado) {
                echo "Registro insertado correctamente. ".$nombre." ".$precio;
            } 
            else {
                echo "Error al insertar el registro: " . $conn->Error;
            }        
            // Cierra la conexión a la base de datos
            mysqli_close($conn);
        }
    ?>
     <footer>
        <p>Realizado por: Mariana Delgado - Clase 20 - 12 de octubre de 2023- Argentina Programa</p>
    </footer> 
</body>
</html>