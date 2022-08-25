<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/autos.css">
    <link rel="stylesheet" href="css/enviar.css">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/autos.js" type="text/javascript"></script>
    <title>AutoCity &copy;</title>
  
</head>
<body>
   
    <nav class="navbar" >
        <div class="content">
          <div class="logo">
            <a href="index.html"><img src="img/logos/LOGO-2.png" width="250" height="100"></a>
          </div>
          <ul class="menu-list">
            <div class="icon cancel-btn">
              <i class="fas fa-times"></i>
            </div>
            <li><a href="tesla.html">Tesla</a></li>
            <li><a href="lamborgini.html">Lamborghini</a></li>
            <li><a href="ferrari.html">Ferrari</a></li>
            <li href="audi.html"><a >Audi</a></li>
          </ul>
          <div class="icon menu-btn">
            <i class="fa fa-bars"></i>
          </div>
        </div>
      </nav>
<br><br><br><br><br><br><br><br><br><br>
<?php 
     $nombres = $_POST['nombres'];
     $cod = $_POST['cod'];
     $tarjeta = $_POST['tarjeta'];
     $mes = $_POST['mes'];
     $año = $_POST['año'];
     $cvv = $_POST['cvv'];
     $cuotas = $_POST['cuotas'];
?>
<?php
 $aleatorio = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
 $al ="";   
    for($i=0;$i<10;$i++){
        $al .=substr($aleatorio, rand(0,61),1);
    }

?>

<div class="centro">
    <table>
    
             <tr>
               <td>Codigo De compra</td>
               <td><?php echo $al; ?></td>
           </tr>
           <tr>
               <td>Nombre Completo</td>
               <td><?php echo strtoupper($nombres); ?></td>
           </tr>
           <tr>
               <td>Nombre Del producto</td>
               <td><?php 
                switch($cod){
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
               <td>Codigo de tarjeta</td>
               <td><?php 
                    if($tarjeta < 9999999999999999 && $tarjeta > 999999999999999){
                        echo $tarjeta;
                    } else {
                        echo "El numero de tarjeta debe ser 16 digitos";
                    }
             ?></td>
           </tr>
           <tr>
               <td>fecha de tarjeta</td>
               <td><?php
                if($mes < 13) {
                    echo $mes;
                } else {
                        echo "error";
                }
                ?>/<?php 
                if($año > 21){
                    echo $año;
                } else {
                    echo "El año debe ser mayor al actual";
                }
                ?></td>
           </tr> 
           <tr>
               <td>CVV</td>
               <td><?php
                if($cvv < 999){
                    echo $cvv;
                } else {
                    echo " CVV invalido Maximo 3 digitos";
                }
                ?></td>
           </tr>    
           <tr>
               <td>Cantidad de cuotas <?php echo $cuotas ?></td>
               <td>$<?php
                    switch($cod){
                        case "01":
                            $total = 30000/$cuotas; 
                             echo round($total);
                        break;
                        case "02":
                            $total = 130000/$cuotas; 
                            echo round($total);
                        break;
                        case "03":
                            $total = 320000/$cuotas; 
                            echo round($total);
                        break;
                        case "04":
                            $total = 300000/$cuotas; 
                            echo round($total);
                        break;
                        case "05":
                            $total = 230000/$cuotas; 
                            echo round($total);
                        break;
                        case "06":
                            $total = 930000/$cuotas; 
                            echo round($total);
                        break;
                        case "07":
                            $total = 530000/$cuotas; 
                            echo round($total);
                        break;
                        case "08":
                            $total = 730000/$cuotas; 
                            echo round($total);
                        break;
                        case "09":
                            $total = 306000/$cuotas; 
                            echo round($total);
                        break;
                        case "10":
                            $total = 3170000/$cuotas; 
                            echo round($total);
                        break;
                        case "11":
                            $total = 20000/$cuotas; 
                            echo round($total);
                        break;
                        case "12":
                            $total = 10000/$cuotas; 
                            echo round($total);
                        break;
                        case "13":
                            $total = 870000/$cuotas; 
                            echo round($total);
                        break;
                        case "14":
                            $total = 301000/$cuotas; 
                            echo round($total);
                        break;
                        case "15":
                            $total = 311000/$cuotas; 
                            echo round($total);
                        break;
                        case "16":
                            $total = 190000/$cuotas; 
                            echo round($total);
                        break;
                        default:echo "Error codigo no encontrado";
                        break;
                    }
                ?> Mensual</td>
           </tr>
           <tr>
               <td>Regresar</td>
               <td><a href="pagar.html ">Return</a></td>
           </tr>     
     </table>
            </div>
           
<footer  >           
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
            <p>&copy;2021 Desarrollado por <span>Grupo 1</span></p>
        </div>
    </footer>
</body>
</html>