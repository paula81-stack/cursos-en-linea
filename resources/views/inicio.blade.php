<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"></i>V-Cooking</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Acerca de</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cursos</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="pollobroaster.html" class="dropdown-item">Pollo Broaster</a>
                        <a href="lasañacasera.html" class="dropdown-item">Lasaña</a>
                        <a href="silpancho.html" class="dropdown-item">Silpancho</a>
                    </div>
                </div>
                <a href="contacto.html" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Únete ahora<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

        <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="imagenes/cocinero1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Los mejores cursos de cocina</h5>
                                <h1 class="display-3 text-white animated slideInDown">La platáforma de V-Cooking</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Descubre los secretos culinarios desde la comodidad de tu hogar con nuestros cursos online de cocina. Aprende recetas gourmet, técnicas de chef y trucos de cocina que te convertirán en un experto culinario en poco tiempo.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Unéte ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="imagenes/cocinero2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Los mejores cursos de cocina</h5>
                                <h1 class="display-3 text-white animated slideInDown">Explora el mundo de la cocina desde la comodidad de tu hogar</h1>
                                <p class="fs-5 text-white mb-4 pb-2">¡Conviértete en el chef que siempre has querido ser con nuestros cursos online de cocina!, te ofrecemos una gama de clases diseñadas para todos los niveles. ¡Empieza hoy mismo y sorprende a tus seres queridos con tus habilidades culinarias mejoradas!.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Unéte ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<style>


        /* Estilo específico para la clase special-heading */
        .special-heading {
            color: blue; /* Cambiar el color del texto a azul para esta clase */
        }
    </style>

  <div class="container">
    <div class="course">
      <h2>Pollo Broaster Crujiente</h2>
      <p>En nuestro curso de "Secretos de Pollo Broaster", aprenderás los pasos exactos y los secretos de esta deliciosa receta. Desde la selección adecuada de piezas de pollo hasta el empanizado perfecto y la fritura precisa, te guiaremos en cada paso del camino para que puedas preparar un pollo broaster crujiente y delicioso en la comodidad de tu hogar. ¡No te pierdas la oportunidad de convertirte en un experto en esta especialidad culinaria!.</p>
      <p>Precio: $99</p>
     <button type="button" class="btn btn-primary" onclick="sendWhatsAppMessage('Pollo Broaster Crujiente')">Comprar</button>
     <button type="button" class="btn btn-primary" onclick="redirectToWebsite('pollobroaster.html')" >Ver</button>
    </div>
    <div class="course">
      <h2>Lasaña Casera</h2>
      <p>Nuestro curso de "Lasaña Casera" te llevará a través de todos los pasos necesarios para crear una lasaña deliciosa y reconfortante desde cero. Desde la preparación de la salsa de carne hasta el montaje y horneado perfectos, aprenderás todas las técnicas y trucos para hacer la lasaña perfecta que dejará a todos tus invitados pidiendo más. ¡No te pierdas la oportunidad de dominar este clásico de la cocina italiana!</p>
      <p>Precio: $79</p>
      <button type="button" class="btn btn-primary" onclick="sendWhatsAppMessage('Lasaña Casera')">Comprar</button>
      <button type="button" class="btn btn-primary" onclick="redirectToWebsite('lasañacasera.html')" >Ver</button>
    </div>
    <div class="course">
      <h2>Silpancho Boliviano</h2>
      <p>Únete a nuestro curso "Sabor Boliviano: Silpancho" y descubre los sabores auténticos de Bolivia. Aprende a preparar el famoso plato de silpancho, una delicia boliviana que combina carne empanizada con arroz, papas y una refrescante ensalada. Con nuestras instrucciones detalladas y consejos útiles, te convertirás en un experto en esta especialidad culinaria boliviana y podrás disfrutar de su sabor único en la comodidad de tu hogar. ¡No te lo pierdas!</p>
      <p>Precio: $129</p>
      <button type="button" class="btn btn-primary" onclick="sendWhatsAppMessage('Silpancho Boliviano')">Comprar</button>
      <button type="button" class="btn btn-primary" onclick="redirectToWebsite('silpancho.html')" >Ver</button>
    </div>
  </div>



      <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Enlace rápido</h4>
                    <a class="btn btn-link" href="">Sobre nosotros</a>
                    <a class="btn btn-link" href="">Contáctenos</a>
                    <a class="btn btn-link" href="">Política de privacidad</a>
                    <a class="btn btn-link" href="">Términos y condiciones</a>
                    <a class="btn btn-link" href="">Preguntas frecuentes y ayuda</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contacto</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Santa Cruz, Bolivia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+591 62124725</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sinarviveros@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galería</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="imagenes/cocinero2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="imagenes/silpancho.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="imagenes/pollobroaster.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="imagenes/lasaña.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="imagenes/cocinero1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="imagenes/maps.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Boletín</h4>
                    <p>Regístrate para recibir la información.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Tú email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Regístrate</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">V-Cooking</a>, Todos los derechos reservados.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Inicio</a>
                            <a href="">Cookies</a>
                            <a href="">Ayuda</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer End -->

<script>
function sendWhatsAppMessage(curso) {
    // Número al que deseas enviar el mensaje (incluyendo el código de país sin el +)
    var phoneNumber = '59162124725';
    // Mensaje que deseas enviar
    var message = 'Hola, quiero comprar el curso de '+curso;
    // Codificación del mensaje para URL
    var encodedMessage = encodeURIComponent(message);
    // Construcción de la URL
    var whatsappUrl = 'https://wa.me/'+phoneNumber+'?text='+message;
    // Redireccionamiento a la URL para enviar el mensaje
    window.open(whatsappUrl, '_blank');
}

function redirectToWebsite(url) {
        // Redirecciona al usuario a la URL especificada
        window.location.href = url;
    }

</script>




</body>

</html>