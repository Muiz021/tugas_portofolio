@extends('template.app')

@section('title', 'Template 1')

@section('template1')
    <div id="colorlib-main">
        <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('assetsTemplate1/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">
                    {{-- @dd($user->biodata->gambar); --}}
                    <div class="img mb-4" style="background-image: url({{ asset('assetsTemplate1/images/person_1.jpg') }});"></div>
                    <div class="desc">
                        <h2 class="subheading">Hello I'm</h2>
                        <h1 class="mb-4">Muiz Muharram</h1>
                        <p class="mb-4">aku adalah seorang pelajar yang ingin mahir dalam dunia back end. aku selalu mengingat kata - kata ini : lakukan sesuatu sesuai kadar kemampuanmu.</p>
                    </div>
                </div>
            </div>
        </div>

        <section id="biodata">
            <h2 class="text-center my-3" style="font-weight: bold">Biodata</h2>
            <div class="row">
                <div class="col-md-6">
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Nama :</span>
                        <span>Muiz Muharram</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">TTL :</span>
                        <span style="">Luwuk, 18 Maret 2002</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Jenis Kelamin :</span>
                        <span>Pria</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Agama :</span>
                        <span>Islam</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Tinggi Badan :</span>
                        <span>170 cm</span>
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <span style="font-weight: bold;color:#000;">Berat Badan :</span>
                        <span>50 kg</span>
                    </p>
                    <p>
                        <span style="font-weight: bold;color:#000;">Alamat :</span>
                        <span>Belakang Kafe Mokula, Romangpolong, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92113</span>
                    </p>
                    <p>
                        <span style="font-weight: bold;color:#000;">No HP :</span>
                        <span>081343671284</span>
                    </p>
                    <p>
                        <span style="font-weight: bold;color:#000;">Email :</span>
                        <span>muis.mm021@gmail.com</span>
                    </p>
                </div>
            </div>
        </section>

        <section id="pendidikan" style="background-image: url({{ asset('assetsTemplate1/images/bg_4.jpg') }})">
            <h2 class="text-center my-3" style="font-weight: bold">Pendidikan</h2>
            <div class="row">
                <div class="col-12 text-center fw-bolder">
                    <h4>SD Negeri 8 Luwuk</h4>
                    <h4>SMP Negeri 2 Luwuk</h4>
                    <h4>SMA Negeri 3 Luwuk</h4>
                </div>
            </div>
        </section>

        <section id="project">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                        <h2 class="mt-5 mb-2">Project</h2>
                        <p>Ini adalah Project yang telah saya buat</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url({{asset('assetsTemplate1/images/image_1.jpg')}});"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="#">Technology</a></span>
                                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url({{asset('assetsTemplate1/images/image_2.jpg')}});"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="#">Travel</a></span>
                                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url({{asset('assetsTemplate1/images/image_3.jpg')}});"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="#">Fashion</a></span>
                                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url({{asset('assetsTemplate1/images/image_4.jpg')}});"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="#">Travel</a></span>
                                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url({{asset('assetsTemplate1/images/image_5.jpg')}});"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="#">Travel</a></span>
                                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry ftco-animate fadeInUp ftco-animated">
                            <a href="#" class="img img-2" style="background-image: url({{asset('assetsTemplate1/images/image_6.jpg')}});"></a>
                            <div class="text text-2 pt-2 mt-3">
                                <span class="category mb-3 d-block"><a href="#">Travel</a></span>
                                <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container px-md-5">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Silahkan Hubungi</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">Belakang mokula, Romangpolong, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92113</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">081343671284</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">muis.mm021@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Muiz Muharram</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- END COLORLIB-MAIN -->

@endsection
