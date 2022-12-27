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
                <a href="index.php"><div class="logout"><h4>CERRAR SESION</h4></div></a> 

            </div>
        </div>
        <div class="Menu">
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
            if(!$enlace){
               die("SQLSTATE: Conexion fallida: " . mysql_error());
           }
           else{
               echo "SQLSTATE: Conexion exitosa";
           }

            $name = $_POST ['user_name'];
            $direccion = $_POST ['user_loc'];
            $tel = $_POST ['user_tel'];
            $mail = $_POST ['user_mail'];
            $ssql= "INSERT INTO distribuidor VALUES (default,'$name','$direccion','$tel','$mail')";
            $resultado = mysqli_query($enlace, $ssql);
            if(!$resultado )
                die("No fue posible insertar los datos.");
        ?>

        <div class="TITULO"><h1 class="font">REGISTROS INSERTADOS</h1></div>
        <div class="TITULO"><h1 class="font">DISTRIBUIDORES</h1></div>

        <?php
            $ssql = "SELECT * FROM distribuidor";
            $resultado = mysqli_query($enlace, $ssql );
        ?><br>
        <table align="center" border=1 width=70%>
        <tr>
            <th>id_distribuidor</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
        </tr>
        <?php 
            //Mostrar los registros
            while($renglon=mysqli_fetch_array($resultado, MYSQLI_BOTH))
                echo "<tr><td>".$renglon[0]."</td>"."<td>".$renglon[1]."</td>"."<td>".$renglon[2]."</td>"."<td>".$renglon[3]."</td>"."<td>".$renglon[4]."</td></tr>";
                    mysqli_free_result($resultado);
            echo "</table>";
        ?><br>
        <div class="container">
            <form action="" method="post" >
                <ul>
                    <li>
                        <label for="name">id_distribuidor:</label>
                        <input type="text" id="id_distr" name="id_distr" size="20%">
                    </li><br>
                    <li>
                        <label for="apellido">Nombre:</label>
                        <input type="text" id="name" name="user_name" size="30%">
                    </li><br>
                    <li>
                        <label for="direccion">Direccion:</label>
                        <input type="text" id="direccion" name="user_loc" size="25%">
                    </li><br>
                    <li>
                        <label for="telefono">Telefono (10 digitos):</label>
                        <input type="tel" id="tel" name="user_tel" minlength="10" maxlength="10" size="17%">
                    </li><br>
                    <li>
                        <label for="mail">Correo:</label>
                        <input type="email" id="mail" name="user_mail" size="30%">
                    </li>
                </ul>
                <div class="button">
                    <button type="submit" >Añadir</button>
                </div>
            </form>
        </div>

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