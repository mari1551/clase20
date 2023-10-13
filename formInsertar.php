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
    <div id="DivInsertar">
        <h2>Insertar un producto a la base de datos</h2>
        <form id="formInsertar" method="post" action="funcInsertar.php">
            nombre del producto: <input type="text" name="nombre" id="nombreP"><br>
            precio del producto: <input type="number" name="precio" id="precioP"><br>
            <input type="submit" value="Insertar" id="btn_insertar">
        </form>
    </div>
    <footer>
        <p>Realizado por: Mariana Delgado - Clase 20 - 12 de octubre de 2023- Argentina Programa</p>
    </footer>
</body>
</html>
