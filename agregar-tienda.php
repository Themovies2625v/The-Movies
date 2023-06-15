<!DOCTYPE html>
<html lang="es">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewpirt" content="width=divice-width, initial-scale=1.0">
    <title>Proyecto final</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body link="#ffffff" vlink="#ffffff">
    
    
<header>
        <div class="barra-superior">          
            <!-- poner boton de menu -->
        	<header class="header">
                <div class="container">
                <div class="btn-menu">
                    <label for="btn-menu">☰</label>
            </header>
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="#"></a>
                    <a href="usuarios.html">Usuarios</a>
                    <a href="administrador.html">Administradores</a>
                    <a href="tienda.html">Tienda</a>
                    <a href="respuestas.php">Respuestas-Encuesta</a>
                    <a href="index0.html">Cerrar sesion</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
        <img src="img/Logo.png" class="logo" align="left" alt="Logo">

        </div>
        <div class="barra-superior2"></div>
        <center><h1><font color = "#FFFFFF"><i>🎬The Movies🎥</i></font></h1></center>
    </header>
    <?php
//se reciben los parametros enviados mediante el Post por el formulario
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$cantidad=$_POST["cantidad"];
$precio=$_POST["precio"];
$imagen=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
//conexion con el servidor
$link = mysqli_connect("localhost","root","") or die('no se pudo conectar con el servidor'.mysqli_error());
//conectamos con la base de datos
$db=mysqli_select_db($link,"pagina") or die("no se pudo seleccionar la base de datos".mysqli_error());

//realizar insert
$query= "INSERT INTO peliculas (`codigo`, `nombre`, `cantidad`, `precio`, `imagen`) VALUES ('$codigo','$nombre','$cantidad','$precio','$imagen')";
//ejecutar script
$result= mysqli_query($link, $query) or die("no se realizo la inserccion".mysqli_error());
echo"<script> alert('El producto ha sido agregado de forma correcta')</script>";
echo" <font color = '#FFFFFF' class='titulo'>Producto Agregado</font> ";
?>
        <footer class="barra-inferior1">
        <div class="">
            <div class="fila2 inline">
                <span class="">Contacto:</span>
                <span class="fila2">22 21 74 82 57</span>
                <span class="fila3">22 15 78 66 23</span>
        </div>
            <center><span class="fila inline">🎬The Movies🎥®</span></center>
            <div class="boton-creditos"><a href="creditos.html">Creditos</a></div>
        </div>
    </footer>
</body>
</html>