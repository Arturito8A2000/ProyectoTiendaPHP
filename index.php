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
        <link href="CAFE-removebg-preview.png" rel="icon" type="image/png">
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <img src="CAFE-removebg-preview.png" width="60%">
            </div>
            <div class="encabezado">
                <div class="titulo">
                    <h1>CAFETERÍA SWEETER NIGHT</h1>
                </div>
                <div class="subtitulo">
                    <h2>Café más amargo que el corazón de tu ex</h2>
                </div>
            </div>
        </div>
        
        <div class="Menu">  <!--Nuevo cuadrante Bienvenida dentro de cabecera-->
            <ul class="menu">
                <li><h3>HOME</h3></li>
                <li><h3>PASTELERIA</h3></li>
                <li><h3>CAFES</h3></li>
                <li><h3>PEDIDOS</h3></li>
                <li><h3>CLIENTES</h3></li>
           </ul>
        </div>
        <?php 
           //Conexion con la base de datos
            $enlace = mysqli_connect ('127.0.0.1','root','Arturito8a*2000','cafeteriahtml'); //conexion a mysql
            if(!$enlace){
               die("SQLSTATE: Conexion fallida: " . mysql_error());
           }
           else{
               echo "SQLSTATE: Conexion exitosa";
           }
        ?>
        <div class="TITULO"><h1 class="font">BIENVENID@</h1></div>
        <div class="TITULO"><h1 class="font">REGISTRATE AQUI</h1></div>
        <form action="home.php" method="post">
            <ul>
                <li>
                    <label for="name">Nombre:</label>
                    <input type="text" id="user_name" name="user_name">
                </li><br>
                <li>
                    <label for="apellido">Direccion:</label>
                    <input type="text" id="user_loc" name="user_loc">
                </li><br>
                <li>
                    <label for="mail">Telefono:</label>
                    <input type="tel" id="user_tel" name="user_tel" maxlength="10" minlength="10">
                </li><br>
                <li>
                    <label for="mail">Correo electrónico:</label>
                    <input type="email" id="mail" name="user_mail">
                </li>
            </ul>
            <div class="button">
                <button type="submit">Registrarse</button>
            </div>
        </form>
    </body>
    <footer>
        <div class="container">
            <div class="FINAL">
                <div class="container"><b><h4>BASES DE DATOS. PRACTICA 2</h4></b></div>
                <div class="container"><h4>INTEGRANTES</h4></div>
                <div class="container"><h4>OCHOA MOLINA ELI ARTURO</h4></div>
                <div class="container"><h4>OLIVA MARCO ANTONIO</h4></div>
                <div class="container"><h4>SANCHEZ JOSE RAMON</h4></div>            
            </div>
        </div>
    </footer>
</html>