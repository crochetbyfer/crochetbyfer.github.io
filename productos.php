<?php



?>


<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="copyright" content="ig_crochet_by_fer">
        <meta name="robots" content="noindex, nofollow">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/productos.css">
        <link rel="icon" href="imagenes/logo.ico">

        <title>crochet_by_fer</title>
    </head>
    
    <body>
        <div>
            <header>
                <h1>Crochet_by_fer</h1>
            </header>

            <nav class="navigation">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="productos.php" class="redict_tienda">Productos</a></li>
                    <li><a href="clientes_felices.php" class="redict_clientes_felices">Clientes Felices</a></li>
                    <li><a href="#" class="$">Cuenta</a></li>
                </ul>
                <div class="hide">
                    <i class="fa fa-bars" aria-hidden="true"></i> Menu
                </div>                        
            </nav>

            

            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script>
                $(".hide").on('click', function() {
                  $("nav ul").toggle('slow');
                })
            </script>
        </div>
        
        <div class="contenedor">
                <article>
                    <h2 class="titulo_productos">Productos</h2>

                    <section class="Productos_Chalecos">
                    <h4>Chalecos</h4>
                    <img src="imagenes/productos/chaleco_1.png" alt="chalecos_1" title="chalecos_1">
                    <img src="imagenes/productos/chaleco_2.png" alt="chalecos_2" title="chalecos_2">
                    </section>

                    <section class="Productos_Bandanas">
                    <h4>Bandana</h4>
                    <img src="imagenes/productos/Bandana_1.png" alt="bandanas_1" title="bandanas_1">
                    </section>

                    <section class="productos_Bolsos">
                    <h4>Bolsos</h4>
                    <img src="imagenes/productos/Bolso_1.png" alt="bolsos_1" title="bolsos_1">
                    <img src="imagenes/productos/Bolso_2.png" alt="bolsos_2" title="bolsos_2">
                    </section>

                    <section class="Productos_Tops">
                    <h4>Tops</h4>
                    <img src="imagenes/productos/top_1.png" alt="tops_1" title="tops_1">
                    <img src="imagenes/productos/top_2.png" alt="tops_2" title="tops_2">
                    </section>
                </article>
                
                <footer>
                    <div class="container">
                        <h4>Copyright - Derechos reservador por "crochet_by_fer"</h4>
                        <p>Puedes seguirme en:</p>
                        <a href="https://www.instagram.com/crochet_by_fer/" target="_BLANK" class="link_footer">Instagram</a>
                    </div>
                </footer>
                </div>
    </body>
</html>