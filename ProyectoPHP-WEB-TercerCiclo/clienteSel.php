<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="sel.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <title>AutoCity &copy;</title>
  
</head>
<body>

    <nav class="navbar" >
        <div class="content">
          <div class="logo">
            <a href="#"><img src="img/logos/LOGO.png" width="250" height="100"></a>
          </div>
          <ul class="menu-list">
            <div class="icon cancel-btn">
              <i class="fa fa-times"></i>
            </div>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="productos.html">Producto</a></li>
            <li><a href="nosotros.html">Sobre nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="login.php">administrador</a></li>
          </ul>
          <div class="icon menu-btn">
            <i class="fa fa-bars"></i>
          </div>
        </div>
      </nav>


    <br>  <br>  <br>  <br>   <br> <br> <br> <br> <br> <br> 
<?php
session_start();
if ($_SESSION["acceso"] != "74hdfjhd7328dsjhsd###") {
    session_destroy();
    header("location: login.php");
}
$titulo = "Intranet";
$estilos = "";
include_once './bd/lib_mysql.php';
try {
    bd_conectar();
} catch (Exception $e) {
    die($e->getMessage());
}

$sql = "SELECT * FROM cliente";
$registros = bd_consultar($sql);
//var_dump($registros);
?>
<!--Contenido-->
<div class="row">
    <div class="col-12">
        <a href="clienteAct.php" class="agregar">Agregar Cliente </a>
        <table border="1" style="border-collapse: collapse; width: 100%;" class="table">
            <tr class="encabezado">
                <th>ID</th>
                <th>Nombre<span>↑↓</span></th>
                <th>Apellido</th>
                <th>celular</th>
                <th >correo</th>
                <th>DNI</th>
                <th >Mensaje</th>
                <th colspan="2">Accion</th>
            </tr>
            <?php
            if ($registros == null) {
                ?>
                <tr>
                    <th colspan="5">Sin datos</th>
                </tr>
                <?php
            } else {
                foreach ($registros as $clientes) {
                    ?>
                    <tr class="espacio">
                        <th><?= $clientes["id"] ?></th>
                        <td><?= $clientes["nombre"] ?></td>
                        <td><?= $clientes["apellido"] ?></td> 
                        <td><?= $clientes["celular"] ?></td> 
                        <td><?= $clientes["correo"] ?></td>   
                        <td><?= $clientes["DNI"] ?></td>                      
                        <td><?= $clientes["Mensaje"] ?></td> 
                        
              
                        <td>
                            <a class="accion"href="clienteAct.php?id=<?= $clientes["id"] ?>">
                                Editar
                            </a>
                        </td>                       
                        <td>
                            <a class="accion" href="clienteElim.php?id=<?= $clientes["id"] ?>"
                               onclick="return confirm('¿Seguro que deseas eliminar?');">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            bd_desconectar();
            ?>
        </table>
    </div>
</div>
<?php
?>
<div class="img">
        <p><img class="img"src="http://www.gifde.com/gif/otros/informatica-computadoras/programadores/programadores-042.gif" alt=""></p>
        </div>

<br>  <br>  <br>  <br>   <br> <br> <br> <br> <br> <br> 
<br>  <br>  <br>  <br>   <br> <br> <br> <br> <br> <br> 
<footer >   
        <br>        
            <div class="footer-content">
                <h3>AutoCity</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit quis sollicitudin, 
                         rhoncus condimentum faucibus dui bibendum sapien tristique ut lectus vulputate, accumsan scelerisqu
                        eleifend ridiculus justo diam purus augue.
                    </p>
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
            </div>
            <div class="footer-bottom">
                <p > &copy;2021 Desarrollado por <span>Grupo 1</span></p>
            </div>
        </footer>
    </body>
 </html>