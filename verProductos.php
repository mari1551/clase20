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
    <h2 style="color:#304773; margin-top:20px; margin-bottom:20px;text-align:center;">Listado de Productos</h2>
    <br>
        
    <div id="DivProductos">

        <?php
            include 'funcVerProductos.php'; // Incluye el archivo para obtener los productos
            obtenerProductos(); // Llama a la función para obtener y mostrar los productos
        ?>

    </div>
    <footer>
        <p>Realizado por: Mariana Delgado - Clase 20 - 12 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>
