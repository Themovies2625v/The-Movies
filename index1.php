
    
    
        <?php
        //Recibimos los parametros enviados mediante Post por el formulario
        $n=$_POST["nombre"];
        $c=$_POST["c"];
        //conexion con el servidor
        $link = mysqli_connect("localhost","root","") or die('no se pudo conectar con el servidor'.mysqli_error());
        //conexion con la base de datos
        $db=mysqli_select_db($link,"pagina") or die("no se pudo seleccionar la base de datos".mysqli_error());
        //realiza la consulta con mysql
        $query ="SELECT * FROM  usuarios where nombre= '".$n."' AND pasword= '".$c."'";
        $result= mysqli_query($link, $query) or die("consulta fallida".mysqli_error());
        if(mysqli_num_rows($result) > 0){
            echo"
                 <!DOCTYPE html>
<html lang='es'>
    

<head>
    <meta charset='UTF-8'>
    <meta name='viewpirt' content='width=divice-width, initial-scale=1.0'>
    <title>Proyecto final</title>
    <link rel='stylesheet' href='css/estilos.css'>
    <link rel='stylesheet' href='css/style.css'>

</head>
<body link='#ffffff' vlink='#ffffff'>
    
    
    <header>
        <div class='barra-superior'>          
            <!-- poner boton de menu -->
        	<header class='header'>
                <div class='container'>
                <div class='btn-menu'>
                    <label for='btn-menu'>☰</label>
            </header>
        <input type='checkbox' id='btn-menu'>
        <div class='container-menu'>
            <div class='cont-menu'>
                <nav>
                    <a href='#'></a>
                    <a href='contaminacion.html'>Contaminación</a>
                    <a href='index.php'>Catalogo</a>
                    <a href='generos.html'>Generos:</a>
                    <a href='encuesta.html'>Encuesta</a>
                    <a href='index0.html'>Cerrar sesion</a>
                </nav>
                <label for='btn-menu'>✖️</label>
            </div>
        </div>
        <img src='img/Logo.png' class='logo' align='left' alt='Logo'>
        </div>
        <div class='barra-superior2'></div>
        <center><h1><font color = '#FFFFFF'><i>🎬The Movies🎥</i></font></h1></center>
        <center><h2><i>Bienvenido $n</i></h2></center>;
    </header>
    <main>
    <font color = '#FFFFFF'><h2><i> ¿Que puedes encontar?</i></h2></font>
    <hr width='95%' align='center'>
    <div class='informacion'>
    <div class='box'>
      <img src='img/peliculas.jpg' class='menu-inferior'>
      <h3>Peliculas</h3>
      <p>Busca cualquier pelicula de tu interes y conoce datos que antes no conocias </p>
    </div>
    <div class='box'>
      <img src='img/carrito.jpg' class='menu-inferior'>
      <h3>Carrito</h3>
      <p>Compra las pelichicieron interesantes o llamaron tu atencionron tu atencion</p>
    </div>
    <div class='box'>
      <img src='img/basura-pelicula.jpg' class='menu-inferior'>
      <h3>La contaminacion y el cine </h3>
      <p>Descubre como es que el cine esta relacionado con la contaminación </p>
    </div>
</main>
<footer class='barra-inferior1'>
        <div>
            <div class='fila2 inline'>
                <span >Contacto:</span>
                <span class='fila2'>22 21 74 82 57</span>
                <span class='fila3'>22 15 78 66 23</span>
            </div>
            <center><span class='fila inline'>🎬The Movies🎥®</span></center>
            <div class='boton-creditos'><a href='creditos.html'>Creditos</a></div>
        </div>
    </footer>
</body>
</html>

                 ";

            }
            else{
            echo"<!DOCTYPE html>
            <html lang='es'>
                
            
            <head>
                <meta charset='UTF-8'>
                <meta name='viewpirt' content='width=divice-width, initial-scale=1.0'>
                <title>Proyecto final</title>
                <link rel='stylesheet' href='css/estilos.css'>
            
            </head>
            <body link='#ffffff' vlink='#ffffff'>
                
                
                <header>
                    <div class='barra-superior'>          
                    <img src='img/Logo.png' class='logo' align='left' alt='Logo'>
                    </div>
                    <div class='barra-superior2'></div>
                    <center><h1><font color = '#FFFFFF'><i>🎬The Movies🎥</i></font></h1></center>
                </header>
                <center>
                <div class='encuesta'>
            <div class='preguntas'>
            <center><h2><i>contraseña o usuario incorrectos $n</i></h2></center>
               <span>Volver a iniciar sesion:</span><br><br>
               <button class='boton-iniciar'><a href='iniciarSesion3.html'>Iniciar Sesión</a></button><br>
               <span>Regresar al inicio:</span><br><br>
               <button class='boton-iniciar'><a href='index0.html'>Inicio</a></button></div>
               </div></center>

                
               <footer class='barra-inferior'>
               <div class=''>
                   <div class='fila2 inline'>
                       <span class=''>Contacto:</span>
                       <span class='fila2'>22 21 74 82 57</span>
                       <span class='fila3'>22 15 78 66 23</span>
               </div>
                   <center><span class='fila inline'>🎬The Movies🎥®</span></center>
                   <div class='boton-creditos'><a href='creditos.html'>Creditos</a></div>
               </div>
           </footer>
            </body>
            </html>  
            ";
            }
?>

