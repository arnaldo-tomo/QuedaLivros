<html lang="en">

<head>
    <title>{{ config('root.TITULO') }} - Dashboard</title>
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

                                <li class="active active-menu"><a href="{{ route('AdminDashboard') }}"><i
                                            class="las la-house-damage"></i>Dashboard</a></li>

                                <li><a href="{{ route('categoria') }}"><i class="ri-function-line"></i>Livros
                                        Categoria</a>
                                </li>

                                <li><a class="active active-menu" href="{{ route('autor') }}"><i
                                            class="ri-book-line"></i>Autor</a></li>
                                <li><a href="{{ Route('livro') }}"><i class="ri-file-pdf-line"></i>Livros</a></li>
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
                        <h5 class="mb-0">Dashbord</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashbord</li>
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

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i>
                                </div>
                                <div class="text-left ml-3">
                                    <h2 class="mb-0"><span class="counter">5000</span></h2>
                                    <h5 class="">Usuario</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i>
                                </div>
                                <div class="text-left ml-3">
                                    <h2 class="mb-0"><span class="counter">4.8</span>k</h2>
                                    <h5 class="">Livros</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon bg-warning"><i
                                        class="ri-shopping-cart-2-line"></i>
                                </div>
                                <div class="text-left ml-3">
                                    <h2 class="mb-0"><span class="counter">1.2</span>k</h2>
                                    <h5 class="">Conta Primium</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i>
                                </div>
                                <div class="text-left ml-3">
                                    <h2 class="mb-0"><span class="counter">690</span></h2>
                                    <h5 class="">Orders</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Daily Sales</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="iq-sale-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Summary</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="list-inline p-0 mb-0">
                                <li>
                                    <div class="iq-details mb-2">
                                        <span class="title">Income</span>
                                        <div class="percentage float-right text-primary">95 <span>%</span></div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-primary">
                                                <span class="bg-primary" data-percent="90"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="iq-details mb-2">
                                        <span class="title">Profit</span>
                                        <div class="percentage float-right text-warning">72 <span>%</span></div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-warning">
                                                <span class="bg-warning" data-percent="75"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="iq-details mb-2">
                                        <span class="title">Expenses</span>
                                        <div class="percentage float-right text-info">75 <span>%</span></div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-info">
                                                <span class="bg-info" data-percent="65"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <h4 class="text-uppercase text-black mb-0">Session(Now)</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-size-80 text-black">12</div>
                                <div class="text-left">
                                    <p class="m-0 text-uppercase font-size-12">1 Hours Ago</p>
                                    <div class="mb-1 text-black">1500<span class="text-danger"><i
                                                class="ri-arrow-down-s-fill"></i>3.25%</span></div>
                                    <p class="m-0 text-uppercase font-size-12">1 Day Ago</p>
                                    <div class="mb-1 text-black">1890<span class="text-success"><i
                                                class="ri-arrow-down-s-fill"></i>1.00%</span></div>
                                    <p class="m-0 text-uppercase font-size-12">1 Week Ago</p>
                                    <div class="text-black">1260<span class="text-danger"><i
                                                class="ri-arrow-down-s-fill"></i>9.87%</span></div>
                                </div>
                            </div>
                            <div id="wave-chart-7"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Open Invoices</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                        data-toggle="dropdown">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton5">
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Client</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Invoice</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">atatus</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ira Membrit</td>
                                            <td>18/10/2019</td>
                                            <td>20156</td>
                                            <td>$1500</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Paid</div>
                                            </td>
                                            <td>Copy</td>
                                        </tr>
                                        <tr>
                                            <td>Pete Sariya</td>
                                            <td>26/10/2019</td>
                                            <td>7859</td>
                                            <td>$2000</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Paid</div>
                                            </td>
                                            <td>Send Email</td>
                                        </tr>
                                        <tr>
                                            <td>Cliff Hanger</td>
                                            <td>18/11/2019</td>
                                            <td>6396</td>
                                            <td>$2500</td>
                                            <td>
                                                <div class="badge badge-pill badge-danger">Past Due</div>
                                            </td>
                                            <td>Before Due</td>
                                        </tr>
                                        <tr>
                                            <td>Terry Aki</td>
                                            <td>14/12/2019</td>
                                            <td>7854</td>
                                            <td>$5000</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Paid</div>
                                            </td>
                                            <td>Copy</td>
                                        </tr>
                                        <tr>
                                            <td>Anna Mull</td>
                                            <td>24/12/2019</td>
                                            <td>568569</td>
                                            <td>$10000</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Paid</div>
                                            </td>
                                            <td>Send Email</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
