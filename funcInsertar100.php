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
    <h2 style="color:#304773; margin-top:20px; margin-bottom:20px;text-align:center;">Insertando registros</h2>
    <br>
    <?php
        include 'conexion.php'; // Incluye el archivo de conexión
        $cont=0;
        for ($i = 1; $i <= 2; $i++) {  //cambiar a 100 loops
            
            //asigna datos ficticios en cada registro
            $nombre = "Producto $i";
            $precio =  $i*1000;  //rand(1000, 2000); // Precio aleatorio entre 1000 y 2000

            // Consulta sqlquery para insertar
            $consulta_sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";

            if ($conn->query($consulta_sql) !== TRUE) {
                echo "Error al insertar el producto $i: " . $conn->error;
            }else{
                $cont++;
                echo '<div id="listadoInsercion">';
                echo "$i - Se inserto producto: ".$nombre." precio: ".$precio."<br>";
                echo '</div>';
            }
        }

        // Cerrar la conexión a la base de datos
        $conn->close();

        echo "<br>Se insertaron $cont productos en la base de datos.<br>";
    ?>   
     <footer>
        <p>Realizado por: Mariana Delgado - Clase 20 - 12 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>