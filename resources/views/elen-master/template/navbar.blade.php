{{-- <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a> --}}
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="{{url('biodata')}}">{{$user->username}}<span>.</span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="colorlib-active"><a href="{{url('/portofolio/'.$user->username)}}">Biodata</a></li>
            <li><a href="{{url('#pendidikan')}}">Pendidikan</a></li>
            <li><a href="{{url('#project')}}">Project</a></li>
        </ul>
    </nav>

    <div class="colorlib-footer">
        <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by  {{$user->username}}</a>
    </div>
</aside> <!-- END COLORLIB-ASIDE -->
