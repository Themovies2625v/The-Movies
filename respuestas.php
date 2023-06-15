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
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
        <img src="img/Logo.png" class="logo" align="left" alt="Logo">
        </div>
        <div class="barra-superior2"></div>
        <center><h1><font color = "#FFFFFF"><i>🎬The Movies🎥</i></font></h1></center>
    </header>
        <center><table class="table">
            <thead>
            <tr>
                <th>correo</th> 
                <th>Nombre</th> 
                <th>Opinion</th> 
                <th>Contenido buscado</th>
                <th>Informacion faltante</th>
                <th>Cual?</th>
                <th>Dificultades</th>
                <th>Porque?</th>
                <th>Anomalias</th>
                <th>Cuales</th>
                <th>Consideraciones</th>
                <th>¿Nos recomienda?</th>
                <th>Evaluacion</th>

</tr>
</thead></center>
<?php
//conexiones con el servidor
$link = mysqli_connect("localhost","root","") or die('no se pudo conectar con el servidor'.mysqli_error());
//conexiones de la base de datos
$db=mysqli_select_db($link,"pagina") or die("no se pudo seleccionar la base de datos".mysqli_error());
//realizar  el insert
$query ="SELECT * FROM  cuestionario";
$result= mysqli_query($link, $query) or die("consulta fallida".mysqli_error());
while($line = mysqli_fetch_assoc($result)){
    echo "<center><tr>
    <td>".$line['pregunta-1']."</td>
    <td>".$line['pregunta-2']."</td>
    <td>".$line['pregunta-3']."</td>
    <td>".$line['pregunta-4']."</td>
    <td>".$line['pregunta-5']."</td>
    <td>".$line['pregunta-5-c']."</td>
    <td>".$line['pregunta-6']."</td>
    <td>".$line['pregunta-6-r']."</td>
    <td>".$line['pregunta-7']."</td>
    <td>".$line['pregunta-7-r']."</td>
    <td>".$line['pregunta-8']."</td>
    <td>".$line['pregunta-9']."</td>
    <td>".$line['pregunta-10']."</td>
    </tr></center>";}
    //liberar resultados
    mysqli_free_result($result);
    //cerrar la conexion
    mysqli_close($link);
    ?>
    </table>
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