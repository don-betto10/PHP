<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$db = "proyecto";

$enlace = mysqli_connect($servidor, $usuario, $pass, $db);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
</head>
<body>
    <header class="header ">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="Logo" class="logo">
                    Inicio
                </a>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="productos.html">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kfit.html">K-Fit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="encuentranos.html">Encuéntranos</a>
                    </li>
                    </ul>
                </div>
                <div class=>
                    <a href="#" class="navbar-brand" >
                        Super Body
                        <img src="./img/gym.jpg" alt="gym" class="gym" >
                    </a>
                </div>
                </div>
            </nav>
    </header>
    <section class="container-fluid mt-4 ">
        <div class="saludo">
            <h1 class="saludo2"><span style="color: red;">¡BIEN</span><span>VENI</span><span style="color: blue;">DOS!</span></h1>
            <p class="saludo3">VEN Y HAZ PARTE DE NUESTRO EQUIPO. <br>REGÍSTRATE Y RECIBIRÁS NOTICIAS DE NUESTRAS PROMOCIONES Y DESCUENTOS.</p>
        </div>
    </section>
    <section class="form-registro">
        <form action="#" name="formulario" method="post" id="formulario-reg">
                <h4>Únete a K-Fit</h4>
                <input class="controls" type="text" name="nombre" placeholder="Nombre">
                <input class="controls" type="text" name="apellido" placeholder="Apellidos">
                <input class="controls" type="text" name="documento" placeholder="No. Documento">
                <input class="controls" type="text" name="telefono" placeholder="Teléfono">
                <input class="controls" type="email" name="correo" placeholder="Mail">
                <input type="checkbox"> Estoy de acuerdo con <a href="#">Terminos y condiciones.</a>
                <input class="boton" type="submit" name="registro">
                <input class="boton" type="reset">
                <p><a href="#">¡Ya tengo cuenta!</a></p>

        </form>
    </section>
    
</body>
</html>


<?php

if (isset($_POST['registro'])){
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $documento = $_POST ['documento'];
    $telefono = $_POST ['telefono'];
    $mail = $_POST ['correo'];

    $insertarDatos = "INSERT INTO ejemplo VALUES('$nombre', '$apellido', '$documento', '$telefono', '$mail', '' )";

    $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

}

?>