<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Queda-Livros</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!-- loader Start -->
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
                <a href="" class="header-logo">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                    <div class="logo-title">
                        <span class="text-primary text-uppercase">Quedalivros</span>
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
                            <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                                <li class="active"><a href=""><i class="las la-house-damage"></i>Livros</a>
                                </li>
                                <li><a href="ucategoria"><i class="fa fa-book"></i>Sobre</a></li>
                                <li><a href="usobre"><i class="ri-function-line"></i>Categoria</a></li>
                        </li>
                        <li><a href="ufavoritas"><i class="ri-heart-line"></i>Favoritas</a></li>
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
                                <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal"
                                    alt="">
                                <div class="logo-title">
                                    <span class="text-primary text-uppercase">{{ config('root.TITULO') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Search Here...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
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
                                    <img src="{{ asset('images/user/1.jpg') }}" class="img-fluid rounded-circle mr-3"
                                        alt="user">
                                    <div class="caption">
                                        <h6 class="mb-1 line-height">Jordao Veloso</h6>
                                        <p class="mb-0 text-primary">Conta Primium</p>
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
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Descricao do livro</h4>
                            </div>
                            <div class="iq-card-body pb-0">
                                <div class="description-contens align-items-top row">
                                    <div class="col-md-6">
                                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                            <div class="iq-card-body p-0">
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <ul id="description-slider-nav"
                                                            class="list-inline p-0 m-0  d-flex align-items-center">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="storage{{ $dado->autorPerfil }}"
                                                                        class="img-fluid rounded w-100"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/02.jpg') }}"
                                                                        class="img-fluid rounded w-100"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/03.jpg') }}"
                                                                        class="img-fluid rounded w-100"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/04.jpg') }}"
                                                                        class="img-fluid rounded w-100"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/05.jpg') }}"
                                                                        class="img-fluid rounded w-100"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/06.jpg') }}"
                                                                        class="img-fluid rounded w-100"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-9">
                                                        <ul id="description-slider"
                                                            class="list-inline p-0 m-0  d-flex align-items-center">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/01.jpg') }}"
                                                                        class="img-fluid w-100 rounded"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/02.jpg') }}"
                                                                        class="img-fluid w-100 rounded"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/03.jpg') }}"
                                                                        class="img-fluid w-100 rounded"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/04.jpg') }}"
                                                                        class="img-fluid w-100 rounded"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/05.jpg') }}"
                                                                        class="img-fluid w-100 rounded"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('images/book-dec/06.jpg') }}"
                                                                        class="img-fluid w-100 rounded"
                                                                        alt="">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                            <div class="iq-card-body p-0">
                                                <h3 class="mb-3">A Casey Christi night books in the raza Dakota Krout
                                                </h3>
                                                <div class="price d-flex align-items-center font-weight-500 mb-2">
                                                    <span class="font-size-20 pr-2 old-price">$99</span>
                                                    <span class="font-size-24 text-dark">$48</span>
                                                </div>
                                                <div class="mb-3 d-block">
                                                    <span class="font-size-20 text-warning">
                                                        <i class="fa fa-star mr-1"></i>
                                                        <i class="fa fa-star mr-1"></i>
                                                        <i class="fa fa-star mr-1"></i>
                                                        <i class="fa fa-star mr-1"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">Monterhing
                                                    in the
                                                    best book testem ipsum is simply dtest in find in a of the printing
                                                    and
                                                    typeseting industry into to end.in find in a of the printing and
                                                    typeseting
                                                    industry in find to make it all done into end.</span>
                                                <div class="text-primary mb-4">Author: <span class="text-body">Jhone
                                                        Steben</span></div>
                                                <div class="mb-4 d-flex align-items-center">
                                                    <a href="#" class="btn btn-primary view-more mr-2">Add To
                                                        Cart</a>
                                                    <a href="book-pdf.html"
                                                        class="btn btn-primary view-more mr-2">Read
                                                        Sample</a>
                                                </div>
                                                <div class="mb-3">
                                                    <a href="#" class="text-body text-center"><span
                                                            class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i
                                                                class="ri-heart-fill"></i></span><span>Add to
                                                            Wishlist</span></a>
                                                </div>
                                                <div class="iq-social d-flex align-items-center">
                                                    <h5 class="mr-2">Share:</h5>
                                                    <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                                        <li>
                                                            <a href="#"
                                                                class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i
                                                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i
                                                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i
                                                                    class="fa fa-youtube-play"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                                    class="fa fa-pinterest-p"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
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
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Similar Books</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                                </div>
                            </div>
                            <div class="iq-card-body single-similar-contens">
                                <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                                    <li class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="{{ asset('images/similar-books/01.jpg') }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pl-0">
                                                <h6 class="mb-2">The Book of treasure Island find...</h6>
                                                <p class="text-body">Author : Tara Zona</p>
                                                <a href="#" class="text-dark" tabindex="-1">Read Now<i
                                                        class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="{{ asset('images/similar-books/02.jpg') }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pl-0">
                                                <h6 class="mb-2">Set For Lifr Being Scott Trench..</h6>
                                                <p class="text-body">Author : Anna Rexia</p>
                                                <a href="#" class="text-dark" tabindex="-1">Read Now<i
                                                        class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="{{ asset('images/similar-books/03.jpg') }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pl-0">
                                                <h6 class="mb-2">A Birth and Evolutions of the Soul...</h6>
                                                <p class="text-body">Author : Bill Emia</p>
                                                <a href="#" class="text-dark" tabindex="-1">Read Now<i
                                                        class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="{{ asset('images/similar-books/04.jpg') }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pl-0">
                                                <h6 class="mb-2">The Nature of world Beautiful Places.</h6>
                                                <p class="text-body">Author : Hal Appeno</p>
                                                <a href="#" class="text-dark" tabindex="-1">Read Now<i
                                                        class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <div class="position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                            src="{{ asset('images/similar-books/05.jpg') }}"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View
                                                            Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 pl-0">
                                                <h6 class="mb-2">The mackup magazine find books..</h6>
                                                <p class="text-body">Author : Zack Lee</p>
                                                <a href="#" class="text-dark" tabindex="-1">Read Now<i
                                                        class="ri-arrow-right-s-line"></i></a>
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
                                                        src="{{ asset('images/trendy-books/01.jpg') }}"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="book-page.html" class="btn btn-sm btn-white">View
                                                        Book</a>
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
                                                        src="{{ asset('images/trendy-books/02.jpg') }}"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="book-page.html" class="btn btn-sm btn-white">View
                                                        Book</a>
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
                                                        src="{{ asset('images/trendy-books/03.jpg') }}"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="book-page.html" class="btn btn-sm btn-white">View
                                                        Book</a>
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
                                                        src="{{ asset('images/trendy-books/04.jpg') }}"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="book-page.html" class="btn btn-sm btn-white">View
                                                        Book</a>
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
                                                        src="{{ asset('images/trendy-books/05.jpg') }}"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="book-page.html" class="btn btn-sm btn-white">View
                                                        Book</a>
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
                                                        src="{{ asset('images/trendy-books/06.jpg') }}"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="book-page.html" class="btn btn-sm btn-white">View
                                                        Book</a>
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="{{ asset('images/favorite/01.jpg') }}"
                                                        class="img-fluid rounded w-100" alt="">
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="{{ asset('images/favorite/02.jpg') }}"
                                                        class="img-fluid rounded w-100" alt="">
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="{{ asset('images/favorite/03.jpg') }}"
                                                        class="img-fluid rounded w-100" alt="">
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="{{ asset('images/favorite/04.jpg') }}"
                                                        class="img-fluid rounded w-100" alt="">
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




        <!-- Wrapper END -->
        <!-- Footer -->
        <footer class="iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        Copyright 2020 <a href="#">QuedaLivros</a> All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->
        <!-- color-customizer -->
        <!-- color-customizer END -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Appear JavaScript -->
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <!-- Countdown JavaScript -->
        <script src="{{ asset('js/countdown.min.js') }}"></script>
        <!-- Counterup JavaScript -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <!-- Wow JavaScript -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- Apexcharts JavaScript -->
        <script src="{{ asset('js/apexcharts.js') }}"></script>
        <!-- Slick JavaScript -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <!-- Select2 JavaScript -->
        <script src="{{ asset('js/select2.min.js') }}"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
        <!-- lottie JavaScript -->
        <script src="{{ asset('js/lottie.js') }}"></script>
        <!-- am core JavaScript -->
        <script src="{{ asset('js/core.js') }}"></script>
        <!-- am charts JavaScript -->
        <script src="{{ asset('js/charts.js') }}"></script>
        <!-- am animated JavaScript -->
        <script src="{{ asset('js/animated.js') }}"></script>
        <!-- am kelly JavaScript -->
        <script src="{{ asset('js/kelly.js') }}"></script>
        <!-- am maps JavaScript -->
        <script src="{{ asset('js/maps.js') }}"></script>
        <!-- am worldLow JavaScript -->
        <script src="{{ asset('js/worldLow.js') }}"></script>
        <!-- Raphael-min JavaScript -->
        <script src="{{ asset('js/raphael-min.js') }}"></script>
        <!-- Morris JavaScript -->
        <script src="{{ asset('js/morris.js') }}"></script>
        <!-- Morris min JavaScript -->
        <script src="{{ asset('js/morris.min.js') }}"></script>
        <!-- Flatpicker Js -->
        <script src="{{ asset('js/flatpickr.js') }}"></script>
        <!-- Style Customizer -->
        <script src="{{ asset('js/style-customizer.js') }}"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('js/chart-custom.js') }}"></script>
        <!-- Custom JavaScript -->
        <script src="{{ asset('js/custom.js') }}"></script>
</body>

<!-- Mirrored from templates.iqonic.design/booksto/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 11:31:11 GMT -->

</html>
