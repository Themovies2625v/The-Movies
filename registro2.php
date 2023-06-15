
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
<div class="barra-superior">          
        <img src="img/Logo.png" class="logo" align="left" alt="Logo">
        </div>
        <div class="barra-superior2"></div>
        <center><h1><font color = "#FFFFFF"><i>🎬The Movies🎥</i></font></h1></center>    

        <img src="img/Logo.png" class="logo" align="left" alt="Logo">

      
        </div>
    </header>
    <?php
//se reciben los parametros enviados mediante el Post por el formulario
$n=$_POST["nombre"];
$c_e=$_POST["c_e"];
$c=$_POST["c"];
$celular=$_POST["celular"];
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
//conexion con el servidor
$link = mysqli_connect("localhost","root","") or die('no se pudo conectar con el servidor'.mysqli_error());
//conectamos con la base de datos
$db=mysqli_select_db($link,"pagina") or die("no se pudo seleccionar la base de datos".mysqli_error());

//realizar insert
$query= "INSERT INTO usuarios (`nombre`, `correo`, `pasword`, `celular`, `perfil`) VALUES ('$n','$c_e','$c','$celular','$foto')";
//ejecutar script
$result= mysqli_query($link, $query) or die("no se realizo la inserccion".mysqli_error());
echo"<div class='encuenta'>
<div class='preguntas'><center><h1><font color='white'><i>Bienvenid@ $n</i></font></h1></center>";
echo"<center><button name = 'boton' class='boton-iniciar'><a href='iniciarSesion3.html'>Iniciar sesion</a></button></center></div></div>";
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