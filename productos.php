
    <?php 
  if(isset($_GET['action']) && $_GET['action']=="add"){ 
    $codigo=intval($_GET['codigo']); 
    if(isset($_SESSION['cart'][$codigo])){ 
        $_SESSION['cart'][$codigo]['cantidad']++; 
    }
    else{ 
        $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
        $db= mysqli_select_db($link, "pagina") or die("No se pudo seleccionar la base de datos".mysqli_error());
        $sql_s="SELECT * FROM peliculas WHERE codigo={$codigo}"; 
        $query_s=mysqli_query($link, $sql_s);
        if(mysqli_num_rows($query_s)!=0){ 
            $row_s=mysqli_fetch_array($query_s); 
            $_SESSION['cart'][$row_s['codigo']]=array( "cantidad" => 1, "precio" => $row_s['precio'] ); 
        }
        else{ 
            $message="Codigo de producto no válido"; 
        }       
    }  
}      
?> 
    <center><font color="white"><i><h1>Lista de productos</h1></i></font> </center>
    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
    <center>
    <table> 
        <thead>
        <tr> 
            <th>Codigo</th> 
            <th>Nombre</th> 
            <th>Capacidad</th> 
            <th>Precio</th> 
            <th>Imagen</th>
            <th>Accion</th> 
        </tr> 
    </thead>
          
        <?php 
          
            $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
            $db= mysqli_select_db($link, "pagina") or die("No se pudo seleccionar la base de datos".mysqli_error());
            $sql="SELECT * FROM peliculas ORDER BY nombre ASC"; 
            $query=mysqli_query($link, $sql) or die("Consulta fallida: ". mysqli_error());
              
            while ($row=mysqli_fetch_array($query)) { 
                  
        ?> 
            <tr> 
                <td><?php echo $row['codigo'] ?></td> 
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['cantidad'] ?></td> 
                <td><?php echo $row['precio'] ?>$</td>
               <?php echo"<td> <img height='70px' src='data:image/jpg;base64,".base64_encode($row['imagen'])."'/></td>" ?>;
                <td><a href="index.php?page=productos&action=add&codigo=<?php echo $row['codigo'] ?>"><font color="black">Agregar al carrito<font></a></td> 
            </tr> </center>
        <?php 
                  
            } 
          
        ?> 
         </table> 
