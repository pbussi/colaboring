<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158794026-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-158794026-1');
  </script>

  <meta charset="utf-8">
  <title>Colaboring - Ingeniería Colaborativa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bootstrap 3 template for corporate business" />
  <!-- css -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('plugins/flexslider/flexslider.css') }}" rel="stylesheet" media="screen" />
  <link href="{{ asset('css/cubeportfolio.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  <!-- Theme skin -->
  <link id="t-colors" href="{{ asset('skins/default.css') }}" rel="stylesheet" />

  <!-- boxed bg -->
  <link id="bodybg" href="{{ asset('bodybg/bg1.css" rel="stylesheet') }}" type="text/css" />

    <!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>
<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="topleft-info">
                            <li><i class="fa fa-phone"></i> +34 666 825641</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div id="sb-search" class="sb-search">
                            <form action="http://www.google.com">
                                <input class="sb-search-input" placeholder="Buscar..." type="text" value="" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search" title="Busqueda"></span>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" alt="" width="199" height="52" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('portfolio')}}">Portfolio</a></li>

                        <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Nosotros <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-rightsidebar.html">Ingenieros</a></li>
                                <li><a href="blog-leftsidebar.html">Abogados</a></li>
                                <li><a href="post-rightsidebar.html">Ciencias Economicas</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contáctenos</a></li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>

                          <ul class="dropdown-menu">
                            <li><a href="blog-rightsidebar.html">Mi cuenta</a>
                            </li>
                            <li><a href="blog-leftsidebar.html">Mis proyectos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</div>
</header>
@include('flash-message')

<!-- end header -->

@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Póngase en contacto</h4>
                    <address>
                        <strong>Salta 1234</strong><br>
                        Santa Fe<br>
                    Argentina</address>
                    <p>
                        <i class="icon-phone"></i> (342) 456-7890 - (39) 555-7891 <br>
                        <i class="icon-envelope-alt"></i> colaboring@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Información</h4>
                    <ul class="link-list">
                        <li><a href="#">Prensa</a></li>
                        <li><a href="#">Terminos y condiciones</a></li>
                        <li><a href="#">Politica de privacidad</a></li>
                        <li><a href="#">Trabaja con nosotros</a></li>
                        <li><a href="#">Contactenos</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Newsletter</h4>
                    <p>Mantengase actualizado con nuestra lista de distribucion</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribirse</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; Colaboring - Todos los derechos reservados</p>
                        <div class="credits">
                                    <!--
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                -->
                Designed by <a href="https://bootstrapmade.com/">Colaboring</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
</div>
</div>
</div>
</footer>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/modernizr.custom.js')}}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('plugins/flexslider/flexslider.config.js')}}"></script>
<script src="{{ asset('js/jquery.appear.js')}}"></script>
<script src="{{ asset('js/stellar.js')}}"></script>
<script src="{{ asset('js/classie.js')}}"></script>
<script src="{{ asset('js/uisearch.js')}}"></script>
<script src="{{ asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{ asset('js/google-code-prettify/prettify.js')}}"></script>
<script src="{{ asset('js/animate.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>


</body>
</html>






