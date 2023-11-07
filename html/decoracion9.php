<?php
 include '../usuarios.php';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" href="../css/decoracion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="imagen2">
            <a href="../index.html" class="enlace">
                <img src="../fotos/logos.png" alt="" class="logo">
            </a>
            </div>s
            <ul class="menu">
                <li class="back"><a class="active" href="../index.php">Inicio</a></li>
                <li class="back"> <a class="active" href="../zapatillas.php">Zapatillas</a></li>
                <li class="back"><a class="active" href="../ropa.php">Ropa</a></li>
                <li class="back"><a class="active" href="../contacto.php">Login</a></li>
                <li class="back"><a class="active" href="../contacto.php"> 
                    <?php
                    
                    if (isset($_SESSION['user_email'])) {
                        $user_email = $_SESSION['user_email']; // Obtiene el correo almacenado en la variable de sesión
                        echo '<li class="back">' . $user_email . '</li>';
                    }
                    ?>
                </li>
                </a>
                <li class="submenu">
                    <img class="img-cesta" src="../fotos/cesta.png">
                    <div id="cesta">
                        <table id="lista-cesta">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            </tbody>  
                        </table>
                        <p id="total">Total: 0.00 €</p>

                    </div>
                </li>
            </ul>
        </nav> 
    </header>
    <main>
        <div class="conteiner1">
            <div class="image-container">
                <div class="small-image">
                    <img src="../fotos/zapatilla9/2.jpg" class="imagen-2">
                    <img src="../fotos/zapatilla9/3.jpg" class="imagen-2">
                    <img src="../fotos/zapatilla9/4.jpg" class="imagen-2">
                </div>
                <div class="big-imagen">
                    <img src="../fotos/zapatilla9/1.jpg" class="imagen-1">
                </div>
                <div class="content">
                    <h2>Air Jordan 1 Black and Smoke Grey</h2>
                    <br>
                    <p class="precio">179,99 €</p>
                    <br>
                    <p>El ante gris, la piel blanca y los llamativos detalles en negro son atemporales. Es una de esas combinaciones que elevan el look en cualquier ocasión. Puedes ponerte estas zapatillas con un jogger para dar un paseo e ir informal pero elegante, o llevarlas en un evento de etiqueta. Las opciones son infinitas, tú eliges.
                    </p>
                    <div class="talla">
                    <table>
                          <tbody>
                            <tr>
                              <td>EU 38</td>
                              <td>EU 38.5</td>
                            </tr>
                            <tr>
                              <td>EU 39</td>
                              <td>EU 40</td>
                            </tr>
                            <tr>
                              <td>EU 40.5</td>
                              <td>EU 41</td>
                            </tr>
                            <tr>
                              <td>EU 42</td>
                              <td>EU 42.5</td>
                            </tr>
                            <tr>
                              <td>EU 43</td>
                              <td>EU 44</td>
                            </tr>
                            <tr>
                              <td>EU 44</td>
                              <td>EU 44.5</td>
                            </tr>
                            <tr>
                              <td>EU 45</td>
                              <td>EU 45.5</td>
                            </tr>
                            <tr>
                              <td>EU 46</td>
                              <td>EU 47</td>
                            </tr>
                            <tr>
                              <td>EU 47.5</td>
                              <td>EU 48.5</td>
                            </tr>
                          </tbody>
                        </table>
                 </div>
                 <div class="pago">
                 <button class="button2" data-nombre="Air Jordan 1 Black and Smoke Grey" data-precio="179.00" data-imagen="../fotos/zapatilla9/4.jpg" onclick="agregarAlCarrito(this)">Comprar 179,99 €</button>
                 </div>
                </div>
                
             </div>
        </div>
    </main>
    <div class="footer-dark">
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-3 item">
                      <h3>Services</h3>
                      <ul>
                          <li><a href="#">Web design</a></li>
                          <li><a href="#">Development</a></li>
                          <li><a href="#">Hosting</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-6 col-md-3 item">
                      <h3>About</h3>
                      <ul>
                          <li><a href="#">Company</a></li>
                          <li><a href="#">Team</a></li>
                          <li><a href="#">Careers</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6 item text">
                      <h3>X227</h3>
                      <p>Es tu destino para la moda urbana. Ofrecemos una amplia gama de zapatillas y ropa de alta calidad con diseños innovadores que combinan estilo y comodidad. Estamos comprometidos con la calidad y la sostenibilidad en cada paso de nuestra producción. ¡Únete a nuestra comunidad de estilo hoy mismo!"</p>
                  </div>
                  <div class="col item social"><a href="#"><i class="icon ion-social-youtube"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
              </div>
              <p class="copyright">X227 © 2023</p>
         </div>
     </footer>
    </div>
    <script src="../java/productos.js"></script>
    <script src="../java/cesta.js"></script>
</body>
</html>