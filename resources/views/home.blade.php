<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">--}}

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}">

    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

    <!-- Modernizer for Portfolio -->
    <script type="text/javascript" src="{{ asset('js/modernizer.js') }}"></script>

    <title>Document</title>
</head>
<body>
    <body class="host_version"> 

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body customer-box">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                        <li><a href="#Registration" data-toggle="tab">Registro</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email1" placeholder="Nombre" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                            Enviar
                                        </button>
                                        <a class="for-pwd" href="javascript:;">Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" placeholder="Nombre" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="mobile" placeholder="Movil" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="password" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <div class="row">							
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Guardar &amp; Continuar
                                        </button>
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    
        <!-- LOADER -->
        <div id="preloader">
            <div class="loader-container">
                <div class="progress-br float shadow">
                    <div class="progress__item"></div>
                </div>
            </div>
        </div>
        <!-- END LOADER -->	
        
        <!-- Start header -->
        <header class="top-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> -->
                        <img src="https://placeholder.pics/svg/270x50/888888/EEE/TestLogo" alt="..." height="36">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbars-host">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">Sobre Nosotros</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Productos</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                    <a class="dropdown-item" href="course-grid-2.html">NavBar item Grid 2 </a>
                                    <a class="dropdown-item" href="course-grid-3.html">NavBar item Grid 3 </a>
                                    <a class="dropdown-item" href="course-grid-4.html">NavBar item Grid 4 </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                    <a class="dropdown-item" href="blog.html">Noticias </a>
                                    <a class="dropdown-item" href="blog-single.html">Noticias single</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="teachers.html">Profesionales</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing.html">Precios</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Acceder</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End header -->
        
        <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2><strong>Todo </strong> sobre el Sol</h2>
                                            <p class="lead">Tu portal online donde encontraras todo sobre el sol. </p>
                                                <a href="#" class="hover-btn-new"><span>Contacto</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="hover-btn-new"><span>Leer mas</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->            
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight">Todo <strong>sobre el sol</strong></h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Tu portal online donde encontraras todo sobre el sol.. </p>
                                                <a href="#" class="hover-btn-new"><span>Contacto</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="hover-btn-new"><span>Leer mas</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->            
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight"><strong>Todo</strong>sobre el sol</h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Tu portal online donde encontraras todo sobre el sol..</p>
                                                <a href="#" class="hover-btn-new"><span>Contacto</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="hover-btn-new"><span>Leer mas</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->            
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <!-- Left Control -->
                <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
    
                <!-- Right Control -->
                <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        
        <div id="overviews" class="section wb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Titulo</h3>
                        <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                    </div>
                </div><!-- end title -->
            
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h4>2022 todo sobre el sol</h4>
                            <h2>Bienvenido a todosobreelsol.com</h2>
                            <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
    
                            <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>
    
                            <a href="#" class="hover-btn-new orange"><span>Leer mas</span></a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                    
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                    
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
                            <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>
    
                            <a href="#" class="hover-btn-new orange"><span>Leer mas</span></a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    
        <section class="section lb page-section">
            <div class="container">
                 <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Nuestra Historia</h3>
                        <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                    </div>
                </div><!-- end title -->
                <div class="timeline">
                    <div class="timeline__wrap">
                        <div class="timeline__items">
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-01">
                                    <h2>2022</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-02">
                                    <h2>2020</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-03">
                                    <h2>2014</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-04">
                                    <h2>2012</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-01">
                                    <h2>2010</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-02">
                                    <h2>2007</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-03">
                                    <h2>2004</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content img-bg-04">
                                    <h2>2002</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="section cl">
            <div class="container">
                <div class="row text-left stat-wrap">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
                        <p class="stat_count">12000</p>
                        <h3>Usuarios</h3>
                    </div><!-- end col -->
    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
                        <p class="stat_count">240</p>
                        <h3>Productos</h3>
                    </div><!-- end col -->
    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
                        <p class="stat_count">55</p>
                        <h3>Titulo_3</h3>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    
        <div id="plan" class="section lb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Elige tu Plan</h3>
                    <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div><!-- end title -->
    
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="message-box">
                            <ul class="nav nav-pills nav-stacked" id="myTabs">
                                <li><a class="active" href="#tab1" data-toggle="pill">Subscripcion Mensual</a></li>
                                <li><a href="#tab2" data-toggle="pill">Subscripcion Anual</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div>
    
                <hr class="invis">
    
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active fade show" id="tab1">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1">
                                                <h2>45€</h2>
                                                <h3>por mes</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-features">
                                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Title1 pricing</p>
                                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong>Title2 pricing</p>
                                                <p><i class="fa fa-database"></i> <strong>140</strong> Title3 pricing</p>
                                                <p><i class="fa fa-link"></i> <strong>60</strong> Title4 pricing</p>
                                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Soporte</strong> Ilimitado</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="hover-btn-new orange"><span>Solicitar ahora</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1">
                                                <h2>59€</h2>
                                                <h3>por mes</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-features">
                                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Title1 pricing</p>
                                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong>Title2 pricing</p>
                                                <p><i class="fa fa-database"></i> <strong>140</strong> Title3 pricing</p>
                                                <p><i class="fa fa-link"></i> <strong>60</strong> Title4 pricing</p>
                                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Soporte</strong> Ilimitado</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="hover-btn-new orange"><span>Solicitar ahora</span></a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1">
                                                <h2>85€</h2>
                                                <h3>por mes</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-features">
                                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Title1 pricing</p>
                                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong>Title2 pricing</p>
                                                <p><i class="fa fa-database"></i> <strong>140</strong> Title3 pricing</p>
                                                <p><i class="fa fa-link"></i> <strong>60</strong> Title4 pricing</p>
                                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Soporte</strong> Ilimitado</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="hover-btn-new orange"><span>Solicitar ahora</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end pane -->
    
                            <div class="tab-pane fade" id="tab2">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1">
                                                <h2>477€</h2>
                                                <h3>Anual</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-features">
                                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Title1 pricing</p>
                                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong>Title2 pricing</p>
                                                <p><i class="fa fa-database"></i> <strong>140</strong> Title3 pricing</p>
                                                <p><i class="fa fa-link"></i> <strong>60</strong> Title4 pricing</p>
                                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Soporte</strong> Ilimitado</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="hover-btn-new orange"><span>Solicitar ahora</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1">
                                                <h2>485€</h2>
                                                <h3>Anual</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-features">
                                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Title1 pricing</p>
                                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong>Title2 pricing</p>
                                                <p><i class="fa fa-database"></i> <strong>140</strong> Title3 pricing</p>
                                                <p><i class="fa fa-link"></i> <strong>60</strong> Title4 pricing</p>
                                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Soporte</strong> Ilimitado</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="hover-btn-new orange"><span>Solicitar ahora</span></a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1">
                                                <h2>500€</h2>
                                                <h3>Anual</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-features">
                                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Title1 pricing</p>
                                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong>Title2 pricing</p>
                                                <p><i class="fa fa-database"></i> <strong>140</strong> Title3 pricing</p>
                                                <p><i class="fa fa-link"></i> <strong>60</strong> Title4 pricing</p>
                                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Soporte</strong> Ilimitado</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="hover-btn-new orange"><span>Solicitar ahora</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end pane -->
                        </div><!-- end content -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    
        <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Testimonios</h3>
                    <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div><!-- end title -->
    
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_01.png" alt="" class="img-fluid">
                                    <h4>James Fernando </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
    
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_02.png" alt="" class="img-fluid">
                                    <h4>Jacques Philips </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
    
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_03.png" alt="" class="img-fluid ">
                                    <h4>Venanda Mercy </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_01.png" alt="" class="img-fluid">
                                    <h4>James Fernando </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
    
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_02.png" alt="" class="img-fluid">
                                    <h4>Jacques Philips </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
    
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="images/testi_03.png" alt="" class="img-fluid">
                                    <h4>Venanda Mercy </h4>
                                </div>
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                                <!-- end testi-meta -->
                            </div><!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    
        <div class="parallax section dbcolor">
            <div class="container">
                <div class="row logos">
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>Sobre Nosotros</h3>
                            </div>
                            <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>   
                            <div class="footer-right">
                                <ul class="footer-links-soi">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul><!-- end links -->
                            </div>						
                        </div><!-- end clearfix -->
                    </div><!-- end col -->
    
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>Links de informacion</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Precio</a></li>
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul><!-- end links -->
                        </div><!-- end clearfix -->
                    </div><!-- end col -->
                    
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>Detalles de contacto</h3>
                            </div>
    
                            <ul class="footer-links">
                                <li><a href="mailto:#">info@yoursite.com</a></li>
                                <li><a href="#">www.todosobreelsol.com</a></li>
                                <li>C/ Sin Nombre 666</li>
                                <li>+34 666 66 66</li>
                            </ul><!-- end links -->
                        </div><!-- end clearfix -->
                    </div><!-- end col -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->
    
        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-center">                   
                        <p class="footer-company-name">Todos los derechos. &copy; 2022</p>
                        <p class="footer-company-name"><a href="#">www.todosobreelsol.com</a></p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
    
        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


    {{--<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>--}}
    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('js/timeline.min.js')}}"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>

</body>
</html>
