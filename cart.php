
    <?php 
        $val=1;
        if(isset($_POST['submit'])){ 
            
            foreach($_POST['cantidad'] as $key => $val) { 
                if($val==0) { 
                    unset($_SESSION['cart'][$key]); 
                }else{ 
                    $_SESSION['cart'][$key]['cantidad']=$val; 
                } 
            } 
            
        } 

        ?>  
        <center><h1>Carrito de compras</h1> 
        <a href="index.php?page=productos">Regresar al catalogo de productos</a> 
        <form method="post" action="index.php?page=cart">   
        <table> 
            <thead>
            <tr> 
                <th>Nombre</th> 
                <th>Cantidad</th> 
                <th>Precio</th> 
                <th>Items Price</th> 
            </tr> 
    </thead>
            <?php 
                $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
                $db= mysqli_select_db($link, "pagina") or die("No se pudo seleccionar la base de datos".mysqli_error());
                $sql="SELECT * FROM peliculas WHERE codigo IN ("; 
                foreach($_SESSION['cart'] as $codigo => $value) { 
                    $sql.=$codigo.","; 
                } 
                $sql=substr($sql, 0, -1).") ORDER BY nombre ASC"; 
                $query=mysqli_query($link,$sql); 
                $totalprice=0; 
                while($row=mysqli_fetch_array($query)){ 
                    $subtotal=$_SESSION['cart'][$row['codigo']]['cantidad']*$row['precio']; 
                    $totalprice+=$subtotal; 
            ?> 
            <tr> 
                <td><?php echo $row['nombre'] ?></td> 
                <td><input type="text" name="cantidad[<?php echo $row['codigo'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['codigo']]['cantidad'] ?>" /></td> 
                <td><?php echo $row['precio'] ?>$</td> 
                <td><?php echo $_SESSION['cart'][$row['codigo']]['cantidad']*$row['precio'] ?>$</td> 
            </tr> 
            <?php 
                } 
            ?> 
            <tr> 
            <td colspan="4">Importe total: <?php echo $totalprice ?></td> 
        </tr> 
    </table><br /> 
    <button type="submit" name="submit" class="boton-iniciar">Actualizar</button> 
    <button type="submit" class="boton-iniciar" onclick="alert('Gracias por tu compra')">Comprar</button> 
</form> 
<br /> <p>Para borrar un producto coloca 0 en cantidad </p></center>


