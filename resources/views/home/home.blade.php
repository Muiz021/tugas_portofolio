<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Nova - Bootstrap 5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assetsHome/css/bootstrap-5.0.0-beta1.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsHome/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsHome/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsHome/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsHome/css/lindy-uikit.css') }}" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

        <!-- ========================= header-6 start ========================= -->
        <header class="header header-6">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="index.html">
                                    <img src="{{ asset('assetsHome/img/logo/logo.svg') }}" alt="Logo" />
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                                    <ul id="nav6" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a href="#home">Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#feature">Template</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#footer">About</a>
                                        </li>
                                        @if (Auth::user() != true)
                                            <li class="nav-item">
                                                <a href="{{ url('login') }}">Login</a>
                                            </li>
                                        @else
                                            @if (Auth::user()->portofolio != null && Auth::user()->portofolio->sekolah != null && Auth::user()->portofolio->project != null && Auth::user()->portofolio->biografi != null)
                                                <li class="nav-item">
                                                    <a href="{{ url('portofolio/' . Auth::user()->username) }}">Profilku</a>
                                                </li>
                                            @endif
                                            <li class="nav-item">
                                                <a href="{{ url('biodata') }}">{{ Auth::user()->username }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('logout') }}">Logout</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>
        <!-- ========================= header-6 end ========================= -->

        <!-- ========================= hero-5 start ========================= -->
        <div class="hero-section hero-style-5 img-bg" style="background-image: url('assetsHome/img/hero/hero-5/hero-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content-wrapper">
                            <h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Membuat Portofoliomu Sendiri</h2>
                            <p class="mb-30 wow fadeInUp" data-wow-delay=".4s">Meningkatkan Peluang Dalam Pengajuan Kerja Anda</p>
                            <a href="{{ url('login') }}" class="button button-lg radius-50 wow fadeInUp" data-wow-delay=".6s">Get Started <i class="lni lni-chevron-right"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="hero-image wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{ asset('assetsHome/img/hero/hero-5/hero-img.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================= hero-5 end ========================= -->

    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
  @if (! Auth::user())
  <section id="feature" class="feature-section feature-style-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-8">
                <div class="section-title text-center mb-60">
                    <h3 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Template</h3>
                    <p class="wow fadeInUp" data-wow-delay=".4s">Merupakan Template Terbaik</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                    <a href="{{url('/template1')}}">
                        <div class="icon">
                            <img src="{{ asset('assets/image/template1.png') }}"  width="250px" alt="">
                        </div>
                        <div class="content mt-5">
                            <h5>Template 1</h5>
                            <p style="color:black;">tampilan yang indah dan elegan</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                    <a href="{{url('/template1')}}">
                        <div class="icon">
                            <img src="{{ asset('assets/image/template1.png') }}"  width="250px" alt="">
                        </div>
                        <div class="content mt-5">
                            <h5>Template 2</h5>
                            <p style="color:black;">tampilan yang indah dan elegan</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
  @endif
    <!-- ========================= feature style-5 end ========================= -->

    <!-- ========================= footer style-4 start ========================= -->
    <footer class="footer footer-style-4" id="footer">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="logo">
                                <a href="#0"> <img src="{{ asset('assetsHome/img/logo/logo.svg') }}" alt=""> </a>
                            </div>
                            <p class="desc">Web pembuatan portofolio terbaik untuk anda</p>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
                            <h6>Akses Cepat</h6>
                            <ul class="links">
                                <li> <a href="#0">Dashboard</a> </li>
                                <li> <a href="#0">Template</a> </li>
                                <li> <a href="#0">About</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
                            <h6>Hubungi</h6>
                            <ul class="links">
                                <li> <a href="#0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp text-success me-3" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>WhatsApp</a> </li>
                                <li> <a href="#0"><i class="lni lni-facebook-filled text-primary me-3"></i>Facebook</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrapper wow fadeInUp" data-wow-delay=".2s">
                <p>@CopyRight by muiz </a></p>
            </div>
        </div>
    </footer>
    <!-- ========================= footer style-4 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->


    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assetsHome/js/bootstrap-5.0.0-beta1.min.js') }}"></script>
    <script src="{{ asset('assetsHome/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assetsHome/js/wow.min.js') }}"></script>
    <script src="{{ asset('assetsHome/js/main.js') }}"></script>
</body>

</html>
