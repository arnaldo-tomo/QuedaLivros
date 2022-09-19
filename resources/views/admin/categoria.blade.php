<title>{{ config('root.TITULO') }} - Categorias</title>



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

                                <li class="active active-menu"><a href="{{ route('categoria') }}"><i
                                            class="ri-function-line"></i>Livros
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
                        <h5 class="mb-0">Categoria</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categoria</li>
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
                                                        <p class="mb-0 font-size-12">Modifique seus dados pessoais.
                                                        </p>
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
                                                <a class="bg-primary iq-sign-btn" href="{{ Route('logout') }}"
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
                <div class="col-lg-12">
                    <div class="iq-card-transparent mb-0">
                        <div class="d-block text-center">
                            <h2 class="mb-3">Search by Book Name</h2>
                            <div class="w-100 iq-search-filter">
                                <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                    <li class="search-menu-opt">
                                        <div class="iq-dropdown">
                                            <div class="form-group mb-0">
                                                <select class="form-control form-search-control bg-white border-0"
                                                    id="exampleFormControlSelect1">
                                                    <option selected="">All</option>
                                                    <option>A Books</option>
                                                    <option>the Sun</option>
                                                    <option>Harsh book</option>
                                                    <option>People book</option>
                                                    <option>the Fog</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="search-menu-opt">
                                        <div class="iq-dropdown">
                                            <div class="form-group mb-0">
                                                <select class="form-control form-search-control bg-white border-0"
                                                    id="exampleFormControlSelect2">
                                                    <option selected="">Genres</option>
                                                    <option>General</option>
                                                    <option>History</option>
                                                    <option>Horror</option>
                                                    <option>Fantasy</option>
                                                    <option>Literary</option>
                                                    <option>Manga</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="search-menu-opt">
                                        <div class="iq-dropdown">
                                            <div class="form-group mb-0">
                                                <select class="form-control form-search-control bg-white border-0"
                                                    id="exampleFormControlSelect3">
                                                    <option selected="">Year</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                    <option>2017</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="search-menu-opt">
                                        <div class="iq-dropdown">
                                            <div class="form-group mb-0">
                                                <select class="form-control form-search-control bg-white border-0"
                                                    id="exampleFormControlSelect4">
                                                    <option selected="">Author</option>
                                                    <option>Milesiy Yor</option>
                                                    <option>Ira Membrit</option>
                                                    <option>Anna Mull</option>
                                                    <option>John Smith</option>
                                                    <option>David King</option>
                                                    <option>Kusti Franti</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="search-menu-opt">
                                        <div class="iq-search-bar search-book d-flex align-items-center">
                                            <form action="#" class="searchbox">
                                                <input type="text" class="text search-input"
                                                    placeholder="search here...">
                                                <a class="search-link" href="#"><i
                                                        class="ri-search-line"></i></a>
                                            </form>
                                            <button type="submit"
                                                class="btn btn-primary search-data ml-2">Search</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/01.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">A Hunger knut book</h6>
                                                        <p class="font-size-13 line-height mb-1">Gurt Mistrioty</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$99</span>
                                                        <h6><b>$89</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/02.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">In Cold Blood Book..</h6>
                                                        <p class="font-size-13 line-height mb-1">Anna Mull</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$129</span>
                                                        <h6><b>$99</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/03.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Truman Capite</h6>
                                                        <p class="font-size-13 line-height mb-1">Ira Membrit</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$79</span>
                                                        <h6><b>$70</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/04.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">A Book Of Thinner</h6>
                                                        <p class="font-size-13 line-height mb-1">Pete Sariya</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <h6><b>$129</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/05.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Book of Texi Driver</h6>
                                                        <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$129</span>
                                                        <h6><b>$120</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/06.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">A man with those Faces</h6>
                                                        <p class="font-size-13 line-height mb-1">Bob Frapples</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$89</span>
                                                        <h6><b>$79</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/07.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Great Gatsb</h6>
                                                        <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$99</span>
                                                        <h6><b>$89</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/08.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Cover Design Book</h6>
                                                        <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$102</span>
                                                        <h6><b>$89</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/09.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Starving Start up book</h6>
                                                        <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$105</span>
                                                        <h6><b>$99</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-md-0 mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/10.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">I can do it anything</h6>
                                                        <p class="font-size-13 line-height mb-1">Terry Aki</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$103</span>
                                                        <h6><b>$98</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/11.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">A horror Novel Book</h6>
                                                        <p class="font-size-13 line-height mb-1">Hal Appeno</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$99</span>
                                                        <h6><b>$79</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div
                                        class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent m-0 mb-sm-0 mb-md-0 mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="images/search-book/12.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Think Outside Box</h6>
                                                        <p class="font-size-13 line-height mb-1">Bill Emia</p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$110</span>
                                                        <h6><b>$99</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i
                                                                class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 similar-detail">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Similar Books</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body similar-contens">
                            <ul id="similar-slider" class="list-inline p-0 mb-0 row">
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/similar-books/01.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The Raze Night Book</h6>
                                                <p class="font-size-13 line-height mb-1">Tara Zona</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$102</span>
                                                <h6><b>$95</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/similar-books/02.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Set For Life Book..</h6>
                                                <p class="font-size-13 line-height mb-1">Anna Rexia</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$120</span>
                                                <h6><b>$110</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/similar-books/03.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Through the Breaking</h6>
                                                <p class="font-size-13 line-height mb-1">Bill Emia</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$105</span>
                                                <h6><b>$99</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/similar-books/04.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Wild Beautiful Places</h6>
                                                <p class="font-size-13 line-height mb-1">Hal Appeno</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$100</span>
                                                <h6><b>$95</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/similar-books/05.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The Mockup Magazine</h6>
                                                <p class="font-size-13 line-height mb-1">Zack Lee</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$100</span>
                                                <h6><b>$89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/similar-books/06.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Every Book Of travel</h6>
                                                <p class="font-size-13 line-height mb-1">Moe Fugga</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <h6><b>$120</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Trendy Books</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body trendy-contens">
                            <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/trendy-books/01.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The Word Books Day..</h6>
                                                <p class="font-size-13 line-height mb-1">Paul Molive</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$99</span>
                                                <h6><b>$89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/trendy-books/02.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The catcher in the Rye</h6>
                                                <p class="font-size-13 line-height mb-1">Anna Sthesia</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$89</span>
                                                <h6><b>$79</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/trendy-books/03.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Little Black Book</h6>
                                                <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$100</span>
                                                <h6><b>$89</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/trendy-books/04.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Take The Risk Book</h6>
                                                <p class="font-size-13 line-height mb-1">Smith goal</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$120</span>
                                                <h6><b>$99</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/trendy-books/05.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">The Raze Night Book </h6>
                                                <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$150</span>
                                                <h6><b>$129</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                                            <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                    src="images/trendy-books/06.jpg" alt=""></a>
                                            <div class="view-book">
                                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="mb-2">
                                                <h6 class="mb-1">Find the Wave Book..</h6>
                                                <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                                <div class="d-block">
                                                    <span class="font-size-13 text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="price d-flex align-items-center">
                                                <span class="pr-1 old-price">$120</span>
                                                <h6><b>$100</b></h6>
                                            </div>
                                            <div class="iq-product-action">
                                                <a href="javascript:void();"><i
                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i
                                                        class="ri-heart-fill text-danger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div
                            class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Favorite Reads</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body favorites-contens">
                            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/05.jpg" class="img-fluid rounded w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                            <p class="mb-2">Author : Pedro Araez</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-primary">
                                                    <span class="bg-primary" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/06.jpg" class="img-fluid rounded w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Casey Christie night book into find...</h5>
                                            <p class="mb-2">Author : Michael klock</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-danger">
                                                    <span class="bg-danger" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/07.jpg" class="img-fluid rounded w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The Secret to English Busy People..</h5>
                                            <p class="mb-2">Author : Daniel Ace</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-info">
                                                    <span class="bg-info" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="images/favorite/08.jpg" class="img-fluid rounded w-100"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The adventures of Robins books...</h5>
                                            <p class="mb-2">Author : Luka Afton</p>
                                            <div
                                                class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-success">
                                                    <span class="bg-success" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
