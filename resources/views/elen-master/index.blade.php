@extends('elen-master.template.app')

@section('title', 'Template 1')

@section('template1')
    <div id="colorlib-main">
        <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('assetsTemplate1/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">
                    {{-- @dd($user->biodata->gambar); --}}
                    <div class="img mb-4" style="background-image: url({{ asset('/storage/images/' . $user->portofolio->gambar) }});"></div>
                    <div class="desc">
                        <h2 class="subheading">Hello I'm</h2>
                        <h1 class="mb-4">{{ $user->username }}</h1>
                        <p class="mb-4">{{ $user->portofolio->biografi->biografi }}</p>
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
                        <span>{{ $user->username }}</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">TTL :</span>
                        <span style="">{{ $user->portofolio->tempat }}, {{ \Carbon\Carbon::parse($user->portofolio->tanggal)->isoFormat('D-MMMM-Y') }}</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Jenis Kelamin :</span>
                        <span>{{ $user->portofolio->jenis_kelamin }}</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Agama :</span>
                        <span>{{ $user->portofolio->agama }}</span>
                    </p>
                    <p style="margin-left:20px;">
                        <span style="font-weight: bold;color:#000;">Tinggi Badan :</span>
                        <span>{{ $user->portofolio->tinggi_badan }} cm</span>
                    </p>

                </div>
                <div class="col-md-6">
                    <p>
                        <span style="font-weight: bold;color:#000;">Berat Badan :</span>
                        <span>{{ $user->portofolio->berat_badan }} kg</span>
                    </p>
                    <p>
                        <span style="font-weight: bold;color:#000;">Alamat :</span>
                        <span>{{ $user->portofolio->alamat }}</span>
                    </p>
                    <p>
                        <span style="font-weight: bold;color:#000;">No HP :</span>
                        <span>{{ $user->portofolio->no_hp }}</span>
                    </p>
                    <p>
                        <span style="font-weight: bold;color:#000;">Email :</span>
                        <span>{{ $user->portofolio->email }}</span>
                    </p>
                </div>
            </div>
        </section>

        <section id="pendidikan" style="background-image: url({{ asset('assetsTemplate1/images/bg_4.jpg') }})">
            <h2 class="text-center my-3" style="font-weight: bold">Pendidikan</h2>
            <div class="row">
                <div class="col-12 text-center fw-bolder">
                    <h4>{{ $user->portofolio->sekolah->sd }}</h4>
                    <h4>{{ $user->portofolio->sekolah->smp }}</h4>
                    <h4>{{ $user->portofolio->sekolah->sma }}</h4>
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
                    @foreach ($user->portofolio->project as $item)
                        <div class="col-md-4">
                            <div class="blog-entry ftco-animate">
                                <a href="#" class="img img-2" style="background-image: url({{ asset('/storage/images/'.$item->gambar) }});"></a>
                                <div class="text text-2 pt-2 mt-3">
                                    <span class="category mb-3 d-block"><a href="#">{{ $item->judul }}</a></span>
                                    <p class="mb-4">{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                    <li><span class="icon icon-map-marker"></span><span class="text">{{ $user->portofolio->alamat }}</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $user->portofolio->no_hp }}</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $user->portofolio->email }}</span></a></li>
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
                            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by {{ $user->username }}</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- END COLORLIB-MAIN -->

@endsection
