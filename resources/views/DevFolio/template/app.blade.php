<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Template 2</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('DevFolio.template.cssTemplate')
</head>

<body>

    @include('DevFolio.template.navbar')

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url({{ asset('/storage/images/' . Auth::user()->portofolio->gambar) }})">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">{{ Auth::user()->username }}</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="{{ Auth::user()->portofolio->status }}"></span></p>
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="title-box text-center">
                    <h1 class="title-a">BIODATA</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="{{ asset('/storage/images/' . Auth::user()->portofolio->gambar) }}" class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p><span class="title-s">Nama: </span> <span>{{ Auth::user()->username }}</span></p>
                                                <p><span class="title-s">Status: </span> <span>{{ Auth::user()->portofolio->status }}</span></p>
                                                <p><span class="title-s">Email: </span> <span>{{ Auth::user()->portofolio->email }}</span></p>
                                                <p><span class="title-s">No HP: </span> <span>{{ Auth::user()->portofolio->no_hp }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p><span class="title-s">TTL: </span> <span>{{ Auth::user()->portofolio->tempat }}, {{ \Carbon\Carbon::parse(Auth::user()->portofolio->tanggal)->isoFormat('D-MMMM-Y') }}</span></p>
                                        <p><span class="title-s">Tinggi Badan : </span> <span>{{ Auth::user()->portofolio->tinggi_badan }}</span></p>
                                        <p><span class="title-s">Berat Badan : </span> <span>{{ Auth::user()->portofolio->berat_badan }}</span></p>
                                        <p><span class="title-s">Agama : </span> <span>{{ Auth::user()->portofolio->agama }}</span></p>

                                        <p class="title-s mt-5"><h4>Pendidikan</h4></p>
                                        <ul>
                                            <li>
                                                <span class="pull-right">{{ Auth::user()->portofolio->sekolah->sd }}</span>
                                            </li>
                                            <li>
                                                <span class="pull-right">{{ Auth::user()->portofolio->sekolah->smp }}</span>
                                            </li>
                                            <li>
                                                <span class="pull-right">{{ Auth::user()->portofolio->sekolah->sma }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Biografi
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            {{Auth::user()->portofolio->biografi->biografi}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Project
                            </h3>
                            <p class="subtitle-a">
                                Ini adalah project yang telah saya kerja
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
               <div class="row">
                @foreach (Auth::user()->portofolio->project as $item)
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="blog-single.html"><img src="{{asset('/storage/images/'.$item->gambar)}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">{{$item->judul}}</h6>
                                </div>
                            </div>
                            <p class="card-description">
                               {{$item->deskripsi}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="{{ asset('/storage/images/' . Auth::user()->portofolio->gambar) }}" alt="" class="avatar rounded-circle">
                                    <span class="author">{{Auth::user()->username}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               </div>
            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{asset('assetsTemplate2/img/overlay-bg.jpg')}})">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Kirim Pesan Kepada Saya
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kamu" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="subjek" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center my-3">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="button button-a button-big button-rouded">Kirim Pesan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Informasi lebih lanjut
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span> {{Auth::user()->portofolio->alamat}}</li>
                                                <li><span class="bi bi-phone"></span> {{Auth::user()->portofolio->no_hp}}</li>
                                                <li><span class="bi bi-envelope"></span> {{Auth::user()->portofolio->email}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>{{Auth::user()->username}}</strong>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('DevFolio.template.jsTempalte')
</body>

</html>
