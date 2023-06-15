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
                    <a href="contaminacion.html">Contaminación</a>
                    <a href='index.php'>Catalogo</a>
                    <a href="generos.html">Generos:</a>
                    <a href="encuesta.html">Encuesta</a>
                    <a href="index0.html">Cerrar sesion</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
        <img src="img/Logo.png" class="logo" align="left" alt="Logo">
        <div class="barra-superior2"></div>
        <center><h1><font color = "#FFFFFF"><i>🎬The Movies🎥</i></font></h1></center>
    </header>
      
    <?php
//se reciben los parametros enviados mediante el Post por el formulario
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$c_p5=$_POST["c-p5"];
$p6=$_POST["p6"];
$p_p6=$_POST["p-p6"];
$p7=$_POST["p7"];
$p_p7=$_POST["c-p7"];
$p8=$_POST["p8"];
$p9=$_POST["p9"];
$p10=$_POST["p10"];
//conexion con el servidor
$link = mysqli_connect("localhost","root","") or die('no se pudo conectar con el servidor'.mysqli_error());
//conectamos con la base de datos
$db=mysqli_select_db($link,"pagina") or die("no se pudo seleccionar la base de datos".mysqli_error());

//realizar insert
$query= "INSERT INTO cuestionario (`pregunta-1`, `pregunta-2`, `pregunta-3`, `pregunta-4`, `pregunta-5`, `pregunta-5-c`, `pregunta-6`, `pregunta-6-r`, `pregunta-7`, `pregunta-7-r`, `pregunta-8`, `pregunta-9`, `pregunta-10`) VALUES ('$p1','$p2','$p3','$p4','$p5','$c_p5','$p6','$p_p6','$p7','$p_p7','$p8','$p9','$p10')";
//ejecutar script
$result= mysqli_query($link, $query) or die("no se realizo la inserccion".mysqli_error());
echo"<h1><font color='white'><i>Gracias por tu opinion</i></font></h1>";
?>
        
    </main>
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
