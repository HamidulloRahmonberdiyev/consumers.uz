<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend') }}/assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Rapid</a></h1>

      <x-layouts.frontend.navbar></x-layouts.frontend.navbar>

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2><span>Rapid</span><br>bilan o'z biznesingizni kuchaytiring</h2>
          <div>
            <a href="{{ route('informations') }}" class="btn-get-started scrollto">Boshlash</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('frontend') }}/assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">    

    {{ $slot }}

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>Rapid</h3>
                  <p>Platforma orqali siz o'z biznesingizni yanda kuchaytirishingiz va ishlaringizni onsonlashtirishingiz mumkin bo'ladi. Biz siz uchun qayg'uramiz.</p>
                </div>

                <div class="footer-newsletter">
                  <h4>Obuna bo'lish</h4>
                  <p>Platformaga a'zo bo'ling!</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Obuna bo'lish">
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Sahifalar</h4>
                  <ul>
                    <li><a href="/">Bosh sahifa</a></li>
                    <li><a href="{{ route('posts') }}">Biz haqimizda</a></li>
                    <li><a href="{{ route('informations') }}">Ma'lumot olish</a></li>
                    <li><a href="{{ route('rates') }}">Tariflar</a></li>
                    <li><a href="#contact">Bog'lanish</a></li>
                    <li><a href="{{ route('register') }}">Ro'yhatdan o'tish</a></li>
                    <li><a href="{{ route('login') }}">Kirish</a></li>
                    @auth
                    <li style="margin-left:-12px">
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn" style="font-size:15px;color:#696592">Chiqish</button>
                      </form>
                    </li>
                    @endauth
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Biz bilan bog'lanish</h4>
                  <p>
                    Navoiy viloyat <br>
                    Xatirchi tuman<br>
                    Yangirabod shahri <br>
                    <strong>Telefon:</strong> +998 91 250-07-60<br>
                    <strong>Email:</strong> hamidullo0760@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Taklif va murojatlaringizni bizga yo'llang!</h4>
              <p>Sizni qiziqatirgan savol yoki murojatlaringizni bizga yo'llang mutaxasislarimiz ko'rib chiqib sizga aloqaga chiqishadi.</p>

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz">
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Sarlavha">
                </div>
                <div class="form-group mt-3 mb-5">
                  <textarea class="form-control" name="message" rows="5" placeholder="Xabar matni"></textarea>
                </div>

                <div class="text-center"><button type="submit" title="Send Message">Yuborish</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
      </div>
      <div class="credits">
         Platforma asoschisi  <a href="https://t.me/hamidullo_rahmonberidyev/">Hamidullo Rahmonberdiyev</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

</body>

</html>