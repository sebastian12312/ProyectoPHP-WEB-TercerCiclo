<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/enviar.css">
    <link rel="stylesheet" href="css/Style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li><a href="login.html">Contacto</a></li>
          </ul>
          <div class="icon menu-btn">
            <i class="fa fa-bars"></i>
          </div>
        </div>
      </nav>
    <br><br><br><br><br><br><br><br><br><br>



    <?php

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $fecha = $_POST['fecha'];
        $producto = $_POST['producto'];
        $dni = $_POST['dni'];
        $mensaje = $_POST['mensaje'];

    ?>
    <div class="centro">
    <table>
        
            <tr>
                <td>Nombre</td>
                <td><?php echo strtoupper($nombre); ?></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><?php echo strtoupper($apellido); ?></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><?php echo strtolower($email); ?></td>
            </tr>
            <tr>
                <td>celular</td>
                <td><?php 
                   if($celular > 899999999 && $celular < 1000000000){
                       echo $celular  ." 'Numero Peruano'"; 
                   } else {
                       echo $celular  ." 'Numero Extranjero'";
                   }
                    ?></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td><?php echo $fecha; ?></td>
            </tr>
            <tr>
               <td>Nombre Del producto</td>
              <td><?php 
                switch($producto){
                    case "01": echo "Tesla Model S";
                    break;
                    case "02": echo "Tesla Model 3";
                    break;
                    case "03": echo "Tesla Model X";
                    break;
                    case "04": echo "Tesla Model Y";
                    break;
                    case "05": echo "Ferrari 1";
                    break;
                    case "06": echo "Ferrari 2";
                    break;
                    case "07": echo "Ferrari 3";
                    break;
                    case "08": echo "Ferrari 4 ";
                    break;
                    case "09": echo "Audi 1";
                    break;
                    case "10":  echo "Audi 2";
                    break;
                    case "11":  echo "Audi 3";
                    break;
                    case "12":  echo "Audi 4";
                    break;
                    case "13": echo "Lamborghini 1";
                    break;
                    case "14": echo "Lamborghini 2";
                    break;
                    case "15": echo "Lamborghini 3";
                    break;
                    case "16": echo "Lamborghini 4";
                    break; 
                    default:echo "Error codigo no encontrado";
                    break;
                }
                ?></td>
            </tr>
            <tr>
                <td>Precio del producto</td>
                <td><?php 
                     switch($producto){
                        case "01": echo "$30,000";
                        break;
                        case "02":  echo "$130,000";
                        break;
                        case "03":  echo "$320,000";
                        break;
                        case "04":  echo "$300,000";
                        break;
                        case "05":  echo "$230,000";
                        break;
                        case "06":  echo "$930,000";
                        break;
                        case "07":  echo "$530,000";
                        break;
                        case "08":  echo "$730,000";
                        break;
                        case "09": echo "$306,000";
                        break;
                        case "10":   echo "$317,000";
                        break;
                        case "11":   echo "$20,000";
                        break;
                        case "12":  echo "$10,000";
                        break;
                        case "13":  echo "$870,000";
                        break;
                        case "14":  echo "$301,000";
                        break;
                        case "15":  echo "$311,000";
                        break;
                        case "16":  echo "$190,000";
                        break; 
                        default:echo "Error codigo no encontrado";
                        break;
                    }
                    ?>
                </td>
            </tr>


            <tr>
                <td>DNI</td>
                <td><?php 
                    if($dni >9999999 && $dni < 100000000){
                        echo $dni ."  'Peruano'";
                    } else {
                        echo $dni ."  'Extranjero'";
                    }

                    ?></td>
            </tr>
            <tr>
                <td>mensaje</td>
                <td><?php echo strtolower($mensaje); ?></td>
            </tr>
            <tr>
               <td>Regresar</td>
               <td><a href="login.html ">Return</a></td>
           </tr> 
        </table>
            </div>
<br><br><br><br><br><br><br><br><br><br>
        <footer>   
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