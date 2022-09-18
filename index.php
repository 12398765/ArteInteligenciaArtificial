<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arte con Inteligencia Artificial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" id="menu_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imgPrincipal/ia.jpg" class="IA">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="material-icons-outlined" style="color:white">
                    menu
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <a href="#nosotros" id="goUp" class="position-fixed bottom-0">
        <span class="material-icons-outlined">
            expand_less
        </span>
    </a>

    <div class="container-fluid">
        <div class="nosotros p-3 m-3" id="nosotros">
            <div class="row d-flex justify-content-around align-items-center contentNosotros">
                <h3 class="text-center mb-4"><b>Nosotros</b></h3>
                <div class="col-12 col-md-6 imgNosotros">
                    <img class="rounded-circle imgImgPrincipal" src="imgPrincipal/ia.jpg">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <p class="mt-3">Somos una empresa tecnológica que se centra en la creación de páginas web y
                        proyectos de desarrollo de software.
                        Utilizamos tecnologías como HTML, CSS, JS, Bootstrap5, php e implementamos una Inteligencia
                        Artificial.</p>
                </div>
            </div>
        </div>


        <div class="Objetivos p-3 m-3">
            <h3 class="text-center">OBJETIVOS Y METAS</h3>
            <div class="row contentObj mt-3">
                <div class="col-12 col-md-6 imgObj">
                    <img class="rounded-circle imgImgPrincipal" src="imgPrincipal/arteDigital.jfif">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <p class="mt-3">
                        Día a día surgen nuevas tecnologías e innovaciones en el mundo que facilitan las tareas de
                        nosotros como humanos, pero también son usadas estas
                        tecnologías para nuestra satisfacción. <br>
                        arte inteligencia artificial.com tiene como objetivo crear pinturas o imágenes acorde a tus
                        gustos y placeres, implementando para ello una Inteligencia
                        Artificial con la capacidad de entender lo que buscas.
                    </p><br>
                </div>
                <span style="color:red" class="text-center">arte inteligencia artificial.com diseña y crea arte, pero
                    solo tú pones los límites.</span>
            </div>
        </div>

        <h3 class="text-center mt-5">SERVICIOS</h3>
        <div class="servicios p-3 mt-3" id="servicios">
            <div class="text-center">
                <p>Ofrecemos arte creada con Inteligencia Artificial a un excelente precio! <br>
                    Lleva 10 imágenes + 1 cuadro gratis de 50 x 33 cm <br> No esperes más, <a href="#contacto"
                        style="color:red; text-decoration:none">Contáctanos</a> ya!!<br>
                    Creamos también páginas web para tu negocio a un precio económico. <br>
                    A continuación te muestro algunas imágenes creadas con IA.</p>
            </div>
            <div class="carousel__contenedor mt-5">
                <div class="carousel__lista">
                    <?php
                    foreach (new DirectoryIterator('Assets/IMG') as $file) { 
                        if ($file->isFile()) { 
                            print "
                            <div class='carousel__elemento'>
                            <img src='Assets/IMG/{$file->getFileName()}' 
                            alt='arte creado por IA en http://arteinteligenciaartificial.com/'>
                            </div>
                            ";
                        } 
                    }
                    ?>
                </div>
                <img src="imgPrincipal/flechaLeft.png" alt="Flecha anterior" id="flechaAnt" aria-label="Anterior"
                    class="carousel__anterior">

                <img src="imgPrincipal/flechRight.png" alt="Flecha siguiente" id="flechaSig" aria-label="Siguiente"
                    class="carousel__siguiente">
            </div>
        </div>

        <h3 class="text-center mt-5">CONTACTO</h3>
        <div class="Contacto m-5 p-3" id="contacto">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.9483453560188!2d-103.37556118557937!3d20.67168040524926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0efcb11f25%3A0x8d38476596f0fd46!2sAv%20Uni%C3%B3n%20235%2C%20Col%20Americana%2C%20Lafayette%2C%2044160%20Guadalajara%2C%20Jal.!5e0!3m2!1ses!2smx!4v1661645683280!5m2!1ses!2smx"
                class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="mt-3">Agenda tu cita al número +52 3327541028 o manda un correo a <br>andrew@landscapegenie.com
            </p>
            <br>
            <p class="text-center">Síguenos en Instagram</p>
            <div style="margin:0 auto">
                <a target="_blank" href="https://www.instagram.com/arte.inteligenciaartificial/"><img
                        src="imgPrincipal/logoInsta.jfif" style="margin:auto;
        width:50px; heig:50px"></a>
            </div>
        </div>


    </div>
    <div class="footer" style="position:relative; margin-top:100px">
        <img style="width:130px; height:130px; border-radius:50%; position:absolute; left:50%; margin-top:-65px; margin-left:-65px"
            src="imgPrincipal/ia.jpg">
        <br><br><br><br>
        <p class="text-center" style="color: white;">© Derechos Reservados</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script>
        new Glider(document.querySelector(".carousel__lista"), {
            slidesToShow: 1,    //número de elementos a mostrar
            slidesToScroll: 1,  //Número de elementos al hacer scroll
            draggable: true,
            arrows: {
                prev: '.carousel__anterior',
                next: '.carousel__siguiente'
            },
            responsive: [
                {
                    // screens greater than >= 615px
                    breakpoint: 615,
                    settings: {
                        // Set to `auto` and provide item width to adjust to viewport
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        itemWidth: 150,
                        duration: 0.25
                    }
                }, {
                    breakpoint: 885,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        itemWidth: 150,
                        duration: 0.25
                    }
                }, {
                    // screens greater than >= 1024px
                    breakpoint: 1110,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        itemWidth: 150,
                        duration: 0.25
                    }
                }
            ]
        });

    </script>
</body>

</html>