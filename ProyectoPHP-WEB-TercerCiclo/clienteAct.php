<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="actualizar.css">
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
$rotulo = "AGREGAR";
$Clientes1 = null;
include_once './bd/lib_mysql.php';
if (isset($_GET["id"])) {
    $rotulo = "ACTUALIZAR";
    $id = $_GET["id"];
    $sql = "SELECT * FROM cliente WHERE id = $id";
    try {
        bd_conectar();
    } catch (Exception $e) {
        die($e->getMessage());
    }
    $registros = bd_consultar($sql);
    $Clientes = $registros[0];
}

?>
<!--Contenido-->
<div class="row">
    <div class="col-12">
        <form action="clienteGrabar.php" method="POST">
            
                <legend class="titulo"><?= $rotulo ?> CLIENTE</legend>
                <input class="cuadro"type="hidden" name="id" 
                       value="<?= $Clientes1['id'] ?>"/>
                <input class="cuadro" type="text" placeholder="Nombre"
                       value="<?= $Clientes1['nombre'] ?>"
                       name="nombre" required/>
                <br/><br/>
                <input class="cuadro" type="text" placeholder="apellido"
                       value="<?= $Clientes1['apellido'] ?>"
                       name="apellido" required/>
                <br/><br/><br/>
                <input class="cuadro" type="text" placeholder="celular"
                       value="<?= $Clientes1['celular'] ?>"
                       name="celular" required/>
                       <br/><br/><br/>
            <input class="cuadro" type="text" placeholder="email"
                       value="<?= $Clientes1['email'] ?>"
                       name="email" required/>
                 <br/><br/><br/>
                 <input class="cuadro" type="text" placeholder="dni"
                       value="<?= $Clientes1['dni'] ?>"
                       name="dni" required/>
                 <br/><br/><br/>
                 <input class="cuadro"  width="30px"  type="text" placeholder="mensaje"
                       value="<?= $Clientes1['mensaje'] ?>"
                       name="mensaje" required/>
                 <br/><br/><br/>


                <input class="boton" type="submit" value="<?= $rotulo ?>"/>
                <br/>
          
            
        </form>
        <p class="regresar" style="text-align: center;">
                <a  href="clienteSel.php">Regresar</a>
            </p>
    </div>
</div>
<?php
?>
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