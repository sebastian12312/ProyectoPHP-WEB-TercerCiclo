<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="intranet.css">

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

?>
<!--Contenido-->
<div class="row">
    <div class="col-12">
      <a href="clienteSel.php">Tabla de clientes</a>
      <a href="clienteAct.php">Agregar Cliente</a>
      <a href="clienteSel.php">Eliminar Cliente</a>
      <a href="clienteAct.php">Editar cliente</a>
    </div>
</div>
    <p class="centro">Opcion de administrador</p>
    <div class="img">
        <img class="img" src="https://www.masgamers.com/wp-content/uploads/2017/11/giphy.gif" alt="">
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
