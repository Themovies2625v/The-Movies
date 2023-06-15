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
                    <a href="generos.html">Generos:</a>
                    <a href="encuesta.html">Encuesta</a>
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
session_start(); 
if(isset($_GET['page'])){ 
     $pages=array("productos", "cart"); 
       if(in_array($_GET['page'], $pages)) { 
         $_page=$_GET['page']; 
     }else{  
          $_page="productos"; 
     }   
  }else{ 
     $_page="productos";  
  } 
?> 
    <div id="contenedor"> 
        <div id="principal"> 
            <?php require($_page.".php"); ?>
        </div>
        <div id="barra">
        </div>
    </div>
    <center>
    <h1><font color="white">Carrito</font></h1> 
    <?php 
        if(isset($_SESSION['cart'])){ 
            $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
            $db= mysqli_select_db($link, "pagina") or die("No se pudo seleccionar la base de datos".mysqli_error());
            $sql="SELECT * FROM peliculas WHERE codigo IN ("; 
            foreach($_SESSION['cart'] as $codigo => $value) { 
                $sql.=$codigo.","; 
            } 
            $sql=substr($sql, 0, -1).") ORDER BY nombre ASC"; 
            $query=mysqli_query($link,$sql); 
            while($row = mysqli_fetch_array($query)){   
    ?> 
            <p><font color="white"><?php echo $row['nombre'] ?> x <?php echo $_SESSION['cart'][$row['codigo']]['cantidad'] ?></font></p> 
    <?php     
            } 
    ?> 
        <hr /> <a href="index.php?page=cart">Ir al carrito</a> 
    <?php      
        }else{  
            echo "<p>Carro Vacío. Agrega productos por favor.</p></center>"; 
         } 
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
