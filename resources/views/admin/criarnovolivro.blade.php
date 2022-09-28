<title>{{ config('root.TITULO') }} - Livros</title>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
</head>


<body>

    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="{{ route('AdminDashboard') }}" class="header-logo">
                    <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                    <div class="logo-title">
                        <span class="text-primary text-uppercase">{{ config('root.TITULO') }}</span>
                    </div>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active active-menu">
                            <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                                    class="ripple rippleEffect"></span><i
                                    class="las la-home iq-arrow-left"></i><span>Admin</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>

                            <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">

                                <li><a href="{{ route('AdminDashboard') }}"><i
                                            class="las la-house-damage"></i>Dashboard</a></li>

                                <li><a href="{{ route('categoria') }}"><i class="ri-function-line"></i>Livros
                                        Categoria</a>
                                </li>

                                <li><a class="active active-menu" href="{{ route('autor') }}"><i
                                            class="ri-book-line"></i>Autor</a></li>
                                <li class="active active-menu"><a href="{{ Route('livro') }}"><i
                                            class="ri-file-pdf-line"></i>Livros</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse"
                                aria-expanded="false"><span class="ripple rippleEffect"></span><i
                                    class="las la-user-tie iq-arrow-left"></i><span>Usuario</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle"
                                style="">
                                <li><a href="{{ route('perfil') }}"><i class="las la-id-card-alt"></i>Usario
                                        Perfil</a></li>
                                <li><a href="{{ route('usuariover') }}"><i class="las la-th-list"></i>Ver Usarios</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                                <div class="logo-title">
                                    <span class="text-primary text-uppercase">{{ config('root.TITULO') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0">Livros</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Adcionar livros</li>
                            </ul>
                        </nav>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-search-line"></i>
                                </a>
                                <form action="#" class="search-box p-0">
                                    <input type="text" class="text search-input"
                                        placeholder="Type here to search...">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </form>
                            </li>



                            <li class="line-height pt-3">
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <img src="images/user/1.jpg" class="img-fluid rounded-circle mr-3"
                                        alt="user">
                                    <div class="caption">
                                        <h6 class="mb-1 line-height">{{ session('usuario') }}</h6>
                                    </div>
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">{{ session('usuario') }}
                                                </h5>
                                                <span class="text-white font-size-12">Desponivel</span>
                                            </div>
                                            <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Meu Perfil</h6>
                                                        <p class="mb-0 font-size-12">Ver detalhes do perfil pessoal.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-profile-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Editar perfil</h6>
                                                        <p class="mb-0 font-size-12">Modifique seus dados pessoais.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-account-box-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Configurações da conta</h6>
                                                        <p class="mb-0 font-size-12">Gerencie os parâmetros da sua
                                                            conta.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-lock-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Configurações de privacidade</h6>
                                                        <p class="mb-0 font-size-12">Controle seus parâmetros de
                                                            privacidade.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="{{ Route('sair') }}"
                                                    role="button">Sair<i class="ri-login-box-line ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    {{-- Conteudo --}}

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Quedar Um Livro</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ route('salvarlivro') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nome do livro:</label>
                                    <input type="text" name="livroNome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Categoria do lirvo:</label>
                                    <select class="form-control" valeu="" name="livroCategoria"
                                        id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Categorias</option>
                                        <option value="General Books">General Books</option>
                                        <option value="History Books">History Books</option>
                                        <option value="Horror Story">Horror Story</option>
                                        <option value="Arts Books">Arts Books</option>
                                        <option value="Film & Photography">Film & Photography</option>
                                        <option value="Business & Economics">Business & Economics</option>
                                        <option value="Comics & Mangas">Comics & Mangas</option>
                                        <option value="Computers & Internet">Computers & Internet</option>
                                        <option value="Sports<"> Sports</option>
                                        <option value="Travel & Tourism"> Travel & Tourism</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Autor Do Livro:</label>
                                    <select class="form-control"n name="livroAutor" id="exampleFormControlSelect2">
                                        <option selected="" disabled="">Autor do Livro</option>
                                        @foreach ($autor as $dado)
                                            <option>{{ $dado->autorNome }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Imagen Do livro:</label>
                                    <div class="custom-file">
                                        <input type="file" name="livroImagen" class="custom-file-input"
                                            accept="image/png, image/jpeg">
                                        <label class="custom-file-label">Escolha A imagen do livro</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>PDF So livro:</label>
                                    <div class="custom-file">
                                        <input type="file" name="livroPdf" class="custom-file-input"
                                            accept="application/pdf, application/vnd.ms-excel">
                                        <label class="custom-file-label">Escolha o PDF Do livro</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Livro:</label>

                                    <select class="form-control" valeu="" name="tipo"
                                        id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Tipo de livro</option>
                                        <option value="Gratis">Gratis</option>
                                        <option value="Primium">Primium</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Descricao do livro:</label>
                                    <textarea class="form-control" name="livroDescricao" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Quedar</button>
                                <button type="reset" class="btn btn-danger">Limbar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->


    {{-- Conteudo --}}
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="js/worldLow.js"></script>
    <!-- Raphael-min JavaScript -->
    <script src="js/raphael-min.js"></script>
    <!-- Morris JavaScript -->
    <script src="js/morris.js"></script>
    <!-- Morris min JavaScript -->
    <script src="js/morris.min.js"></script>
    <!-- Flatpicker Js -->
    <script src="js/flatpickr.js"></script>
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/{{ config('root.TITULO') }}/html/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 11:31:42 GMT -->

</html>
