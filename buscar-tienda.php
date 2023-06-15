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
                    <div><a href="index2.html"><img src="img/casa-web.png"  height="30"  width="30"/></a></div>
                    <a href="usuarios.html">Usuarios</a>
                    <a href="administrador.html">Administradores</a>
                    <a href="tienda.html">Tienda</a>
                    <a href="respuestas.php">Respuestas-Encuesta</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
        <img src="img/Logo.png" class="logo" align="left" alt="Logo">
        </div>
        <div class="barra-superior2"></div>
        <center><h1><font color = "#FFFFFF"><i>🎬The Movies🎥</i></font></h1></center>
    </header>
    <center>
<table class='table'>
    <thead>
    <tr>
        <th>Codigo</th> <th>Nombre</th> <th>Candidad</th> <th>Precio</th> <th>Imagen</th>
    </tr>
</thead>
<?php
//Recibimos los parametros enviados mediante Post por el formulario
$c=$_POST["codigo"];
//conexion con el servidor
$link = mysqli_connect("localhost","root","") or die('no se pudo conectar con el servidor'.mysqli_error());
//conexion con la base de datos
$db=mysqli_select_db($link,"pagina") or die("no se pudo seleccionar la base de datos".mysqli_error());
//realiza la consulta con mysql
$query ="SELECT * FROM  peliculas where codigo=".$c;
$result= mysqli_query($link, $query) or die("consulta fallida".mysqli_error());
if(mysqli_num_rows($result)>0){
    echo" <font color = '#FFFFFF' class='titulo'>Producto Encontrado</font> ";
    $line = mysqli_fetch_assoc($result);
    echo "<tr>
    <td>".$line['codigo']."</td>
    <td>".$line['nombre']."</td>
    <td>".$line['cantidad']."</td>
    <td>".$line['precio']."</td>
    <td>"."<img height='70px' src='data:image/jpg;base64,".base64_encode($line['imagen'])."'/>"."</td>
    </tr>";
}
else{
    echo"<font color = '#FFFFFF' class='titulo'>El producto no existe</font>";
}

    ?>
    </table></center>
    
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