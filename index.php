<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        
    <meta name="keywords" content="diseño web, programacion, analista y programador, desarrollador web, html5, jquery, css3, javacript, Maria Lujan Vaira">
    <meta name="description" content="Soy una estudiante de 2do Año en el Instituto Superior Manuel Belgrano, con el objetivo de obtener el titulo ANALISTA y PROGRAMADOR en Sistema .| Desarrollador Web |"> 
    <meta name="author" content="Maria Lujan Vaira - Analista y Programador Web">
    <meta name="owner" content="Maria Lujan Vaira">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Maria Lujan Vaira| Analista y Programador en Sistema</title>
    <link rel="shorcut icon"  type="image/x.icon" href="imagenes/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <nav class="menu">
                <a href="#Sobremi">Sobre mi</a>
                <a href="#trabajo">Trabajos</a>
                <a href="#Contacto">Contacto</a>
            </nav>
            <div class="contenedor-texto">
                <div class="texto">
                    <h1 class="nombre">Maria Lujan Vaira</h1>
                    <h2 class="profesion"><i>Analista y Programador Web</i></h2>
                </div>
            </div>
        </div>
    </header>

    <section class="main" id="Sobremi">
        <section class="acerca-de">
            <div class="contenedor">
                <div class="foto">
                    <img src="img/yo.jpg" width="115" height="115" alt="Maria Lujan Vaira" title="Maria Lujan Vaira">
                </div>

                <div class="texto">
                    <h3 class="titulo">Sobre mi</h3>
                    <p>Soy una estudiante de 2do Año en el Instituto Superior Manuel Belgrano, con el objetivo de obtener el titulo <em>ANALISTA y PROGRAMADOR en Sistema . <em>| Desarrollador Web |</em> </p>
                    <a href="document/María Lujan Vaira.docx" target="_black">CURRICULUM VITAE</a>
                </div>
            </div>
        </section>
        <section class="trabajos" id="trabajo">
            <div class="contenedor">
                <h3 class="titulo">Trabajos</h3>
                <div class="contenedor-trabajos">
                    <div class="trabajo">
                        <div class="thumb">
                            <a href="https://basadoensuenos.com" target="black" alt="www.basadoensuenos.com" title="www.basadoensuenos.com"><img src="img/2.png"></a>
                        </div>
                        <div class="descripcion">
                            <p class="nombre"><b>Pagina Web de Terrenos</b></p>
                            <p class="categoria"><i>HTML5 - CSS3 - PHP - JQUERY</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
    <footer>
        <section class="contacto" id="Contacto">
                
            <?php
                if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>
   
               <h3 class="texto">La consulta se envio correctamente. Me contactare a la brevedad.</h3>
   
            <?php
               } else{
                ?>
            
                <div class="contenedor">
                    <h3 class="titulo">Contacto</h3>
                        <form class="formulario" action="envio-formulario.php" method="post" enctype="multipart/form-data">
                            <input type="text" placeholder="Nombre" name="nombre" required>
                            <input type="email" placeholder="Correo" name="correo" required>
                            <textarea name="mensaje" placeholder="Mensaje:" required></textarea>
                            <input type="submit" class="boton" value="Enviar">
                        </form>
                </div>
            <?php } ?> 
                
        </section>

        <section class="redes-sociales">
            <div class="contenedor">
                <a href="https://www.facebook.com/marialujan.vaira" target="_black" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/vairalujan_/?hl=es-la" target="_black" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=542612521950" target="_black" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
            </div>
        </section>
        
    </footer>
</body>
</html>