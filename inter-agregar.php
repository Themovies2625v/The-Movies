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
        <div class="encuesta">
          <div class="preguntas">
            <h3>Registro</h3>
            <form class="registro" action="agregar-admin.php" method="post" enctype="multipart/form-data">
  						<div>
  							<label>Nombre</label><br><br>
  							<input type="text" placeholder="Nombre de usuario" name="nombre" required>
  						</div>
                          <br>
  						<div>
  							<label>Correo electronico</label><br><br>
  							<input type="email" placeholder="correo electronico" name="c_e" required>
  						</div>
                          <br>
                          <div>
  							<label>Contraseña</label><br><br>
  							<input type="text" placeholder="10 caracteris maximo" name="c" required>
  						</div>
                          <br>
  						<div>
  							<label>Telefono celular:</label><br><br>
  							<input type="text" placeholder="telefono celular" name="celular" required>
  						</div>
                          <br>
                        <div>
  							<label>Foto de perfil: img.jpg</label><br><br>
  							<input type = "file" name="foto" id = "foto" required>
  						</div><br>
  						<input class="boton-iniciar" type="submit" name="boton" value="ingresar">
					</form>
          </div>
        </div></center>
        
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
