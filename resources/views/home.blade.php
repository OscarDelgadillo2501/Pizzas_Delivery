@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizzas</title>

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Vendor CSS Files -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

          <h1 class="logo mr-auto">Pizzas Delivery</h1>
          <a href="{{ url('/welcome') }}" class="logo mr-auto"><img src="img/favicon.png" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#hero">Inicio</a></li>
              <li><a href="#about">Acerca de Nosotros</a></li>
              <li><a href="#menu">Menú</a></li>
              <li><a href="#events">Eventos</a></li>
              <li><a href="#chefs">Chefs</a></li>
              <li><a href="#contact">Contacto</a></li>
            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-8">
              <h1>Bienvenido a <span>Pizzas Delivery</span></h1>
              <h2>Compra desde la seguridad de tu hogar</h2>

              <div class="btns">
                @if (Route::has('login'))
                  @auth
                    <a href="{{ url('/welcome') }}" class="btn-menu animated fadeInUp scrollto">Compra</a>
                  @else
                    <a href="{{ route('login') }}" class="btn-book animated fadeInUp scrollto">Iniciar Sesión</a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-book animated fadeInUp scrollto">Crear Cuenta</a>
                  @endif
                  @endauth
                @endif
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
              <a href="https://www.youtube.com/watch?v=ywrLSeDVH5U" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
            </div>

          </div>
        </div>
      </section><!-- End Hero -->
      <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container" data-aos="fade-up">

            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                  <img src="assets/img/about.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Ahora las pizzas están a un toque</h3>
                <p class="font-italic">
                  Compra las pizzas que se te antojen de manera segura desde tu hogar
                </p>
                <ul>
                  <li><i class="icofont-check-circled"></i> #QuédateEnCasa</li>
                </ul>
              </div>
            </div>

          </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>¿Por qué Nosotros?</h2>
              <p>Pizza Delivery</p>
            </div>

            <div class="row">

              <div class="col-lg-4">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <span>01</span>
                  <h4>Calidad</h4>
                  <p>Todas nuestras pizzas son hechas de manera artesanal con la más alta higiene y los productos de mayor calidad</p>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="200">
                  <span>02</span>
                  <h4>Seguridad</h4>
                  <p>Te entregamos la pizza en la puerta de tu casa con todas las medidas de bioseguridad</p>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                  <span>03</span>
                  <h4>Entrega Rápida</h4>
                  <p>Si tardamos más de 45 minutos, ¡Pagas 50% Menos!</p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Menú</h2>
              <p>Dale un vistazo a nuestro variado Menú</p>
            </div>

            foreach ($variable as $key => $value) {
              // code...
            endforeach;

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-6 menu-item filter-starters">
                <img src="img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                <div class="menu-content">
                  <a href="#">Lobster Bisque</a><span>$5.95</span>
                </div>
                <div class="menu-ingredients">
                  Lorem, deren, trataro, filede, nerada
                </div>
              </div>
            </div>

          </div>
        </section><!-- End Menu Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Eventos</h2>
              <p>Organiza tus eventos en nuestra pizzería!</p>
            </div>

            <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Fiestas de Cumpleaños</h3>
                  <div class="price">
                    <p><span>Bs 500</span></p>
                  </div>
                  <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>

              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Fiestas Privadas</h3>
                  <div class="price">
                    <p><span>Bs 800</span></p>
                  </div>
                  <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>

              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Fiestas Temáticas</h3>
                  <div class="price">
                    <p><span>Bs 500</span></p>
                  </div>
                  <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Events Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Comentarios</h2>
              <p>Qué dicen los clientes de nosotros!</p>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>

              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>

            </div>

          </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Chefs</h2>
              <p>Nuestros Chefs</p>
            </div>

            <div class="row">

              <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="img/chefs/Alex.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Alex Martinez</h4>
                      <span>Master Chef</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <img src="img/chefs/Alvaro.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Alvaro Reynolds</h4>
                      <span>Master Pasta</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <img src="img/chefs/Oscar.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Oscar Delgadillo</h4>
                      <span>Master Complementos</span>
                    </div>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Contacto</h2>
              <p>Contáctanos</p>
            </div>
          </div>

          <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2666.5891371905486!2d-65.25423756683149!3d-19.058173990881965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcf74d05848b5759!2sUniversidad%20Privada%20Domingo%20Savio%20Sucre!5e0!3m2!1ses!2sbo!4v1596066292584!5m2!1ses!2sbo" frameborder="0" allowfullscreen></iframe>
          </div>

          <div class="container" data-aos="fade-up">

            <div class="row mt-5">

              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="icofont-google-map"></i>
                    <h4>Ubicación:</h4>
                    <p>Calle Cacique Titu #526</p>
                  </div>

                  <div class="open-hours">
                    <i class="icofont-clock-time icofont-rotate-90"></i>
                    <h4>Horario de atención:</h4>
                    <p>
                      Lunes a Sábado:<br>
                      06:00 PM - 12:00 PM
                    </p>
                  </div>

                  <div class="email">
                    <i class="icofont-envelope"></i>
                    <h4>Correo:</h4>
                    <p>pizzas@delivery.com</p>
                  </div>

                  <div class="phone">
                    <i class="icofont-phone"></i>
                    <h4>Llámanos:</h4>
                    <p>+591 65877777</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Deja tu mensaje aquí" placeholder="Message"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Cargando...</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Tu mensaje ha sido enviado, gracias!</div>
                  </div>
                  <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>

              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->
    </body>

@endsection
