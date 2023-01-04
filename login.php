<!DOCTYPE html>
<html lang="es">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SWEETER NIGHT</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href="images/CAFE-removebg-preview.png" rel="icon" type="image/png">
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <img src="images/CAFE-removebg-preview.png" width="60%">
            </div>
            <div class="encabezado">
                <div class="titulo">
                    <h1>CAFETERÍA SWEETER NIGHT</h1>
                </div>
                <div class="subtitulo">
                    <h2>Café más amargo que el corazón de tu ex</h2>
                </div>
                <a href="index.php"><div class="logout"><h4>CERRAR SESION</h4></div></a> 

            </div>
        </div>
        <div class="Menu">  <!--Nuevo cuadrante Bienvenida dentro de cabecera-->
            <ul class="menu">
                <li><a href="home.php"><h3>HOME</h3></a></li>
                <li><a href="productos.php"><h3>PRODUCTOS</h3></a></li>
                <li><a href="pedidos.php"><h3>PEDIDOS</h3></a></li>
                <li><a href="clientes.php"><h3>CLIENTES</h3></a></li>
                <li><a href="distribuidores.php"><h3>DISTRIBUIDORES</h3></a></li>
           </ul>
        </div>
        <?php 
        //Conexion con la base de datos
            $enlace = mysqli_connect ('127.0.0.1','root','Arturito8a*2000','cafeteriahtml'); //conexion a mysql
            if(!$enlace)
               die("SQLSTATE: Conexion fallida: " . mysql_error());
           else
               echo '<h3 style="color:#00d100;line-height:0;margin-left:5px;">&#x25cf</h3>';
        ?>
        <br><div class="TITULO"><h1 class="font">HOME<br>SESION INICIADA</h1></div>
        <?php 
            $name = $_POST ['user_name'];
            $direccion = $_POST ['user_loc'];
            $tel = $_POST ['user_tel'];
            $mail = $_POST ['user_mail'];
            echo strlen($tel);
            echo ($tel);
            $ssql= "INSERT INTO clientes VALUES (default,'$name','$direccion','$tel','$mail')";
            $resultado = mysqli_query($enlace, $ssql);
            if(!$resultado )
                die("No fue posible insertar los datos.");
        ?>
        
        
    </body>
    <footer>
        <div class="container">
            <div class="FINAL">
                <div class="container"><b><h4>BASES DE DATOS. PROYECTO FINAL</h4></b></div>
                <div class="container"><h4>INTEGRANTES</h4></div>
                <div class="container"><h4>OCHOA MOLINA ELI ARTURO</h4></div>
                <div class="container"><h4>OLIVA MARCO ANTONIO</h4></div>
                <div class="container"><h4>SANCHEZ JOSE RAMON</h4></div>            
            </div>
        </div>
    </footer>
</html>
