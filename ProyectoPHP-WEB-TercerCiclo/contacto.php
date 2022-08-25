
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoCity &copy;</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/Style.css">
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

    <br>  <br>  <br> <br>  <br>  <br> <br>  
    <div class="content">

        <h1 class="logo">Contacto</h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contacto</h3>
                <form method="POST" action="clienteGrabar.php">
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="nombre" required>
                    </p>
                    <p>
                        <label>Apellido</label>
                        <input type="text" name="apellido" required>
                    </p>
                    <p>
                        <label>Correo Electronico</label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Numero de Celular</label>
                        <input type="number" name="celular" required>
                    </p>
                    <p>
                        <label>Fecha</label>
                        <input type="date" name="fecha" required>
                    </p>
                    <p>
                        <label>ID producto</label>
                        <input type="text" name="producto" required>
                    </p>
                    <p>
                        <label>DNI</label>
                        <input type="number" name="dni" required>
                    </p>
                    <p class="block">
                       <label>Mensaje o Consulta</label> 
                        <textarea name="mensaje" rows="3"></textarea>
                    </p>
                    
                    <p class="block">
                        <button >
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Mas informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Ubicacion</li>
                    <li><i class="fas fa-phone"></i> 999 999 999</li>
                    <li><i class="fas fa-envelope-open-text"></i> contacto@gmail.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Autocity.comm</p>
            </div>
        </div>

    </div>

<br>  <br>  <br> <br> 


    <footer >           
        <div class="footer-content">
            <h3>AutoCity</h3>
                <p class="parrafo-1">Lorem ipsum dolor sit amet consectetur adipiscing elit quis sollicitudin, 
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