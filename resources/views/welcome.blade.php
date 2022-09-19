<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Queda-Livros</title>
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
                    <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
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
                                <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
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
                                    <img src="images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
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
                    <div class="col-lg-12">
                        <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
                            <div class="newrealease-contens">
                                <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/01.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/02.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/03.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/04.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/05.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/06.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/07.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/08.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="javascript:void(0);">
                                            <img src="images/new_realeases/09.jpg" class="img-fluid w-100 rounded"
                                                alt="">
                                        </a>
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
                                    <h4 class="card-title mb-0">Procurar Livros</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="category.html" class="btn btn-sm btn-primary view-more">Ver Mais</a>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="row">
                                    @foreach ($livro as $dado)
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div
                                                class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                                <div class="iq-card-body p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                            <a href="javascript:void();"><img
                                                                    class="img-fluid rounded w-100"
                                                                    src="storage/{{ $dado->livroImagen }}"
                                                                    alt=""></a>
                                                            <div class="view-book">
                                                                <a href="{{ route('ler', ['dado' => $dado]) }}"
                                                                    class="btn btn-sm btn-white">Ler
                                                                    Agora
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <h6 class="mb-1">{{ $dado->livroNome }}</h6>
                                                                <p class="font-size-13 line-height mb-1">
                                                                    {{ $dado->livroAutor }}
                                                                </p>
                                                                <p class="font-size-13 line-height mb-1">
                                                                    @if ($dado->tipo == 'Gratis')
                                                                        <span class="font-size-12 text-dark">
                                                                            <i class="fa fa-bolt"> GRATIS</i>
                                                                        </span>
                                                                    @endif
                                                                    <span class="font-size-12 text-warning">
                                                                        <i class="fa fa-bolt"> PRIMIUM</i>
                                                                    </span>

                                                                </p>
                                                                <div class="d-block line-height">
                                                                    <span class="font-size-11 text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="price d-flex align-items-center">
                                                            </div>
                                                            <div class="iq-product-action">
                                                                <a href="javascript:void();"><i
                                                                        class="ri-bookmark-fill text-primary"></i></a>
                                                                <a href="javascript:void();" class="ml-2"><i
                                                                        class="ri-heart-line text-primary"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/02.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">The Catcher in the Rye</h6>
                                                            <p class="font-size-13 line-height mb-1">Fritz Wold</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
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
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/03.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Little Black Book</h6>
                                                            <p class="font-size-13 line-height mb-1">John Klok</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
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
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/04.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Take On The Risk</h6>
                                                            <p class="font-size-13 line-height mb-1">George Strong</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
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
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/05.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Absteact On Background</h6>
                                                            <p class="font-size-13 line-height mb-1">Ichae Semos</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
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
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/06.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Find The Wave Book</h6>
                                                            <p class="font-size-13 line-height mb-1">Fidel Martin</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
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
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/07.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">See the More Story</h6>
                                                            <p class="font-size-13 line-height mb-1">Jules Boutin</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
                                                        </div>
                                                        <div class="iq-product-action">
                                                            <a href="javascript:void();"><i
                                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                            <a href="javascript:void();" class="ml-2"><i
                                                                    class="ri-heart-line text-danger"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/08.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">The Wikde Book</h6>
                                                            <p class="font-size-13 line-height mb-1">Kusti Franti</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
                                                        </div>
                                                        <div class="iq-product-action">
                                                            <a href="javascript:void();"><i
                                                                    class="ri-shopping-cart-2-line text-primary"></i></a>
                                                            <a href="javascript:void();" class="ml-2"><i
                                                                    class="ri-heart-line text-danger"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-lg-0">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/09.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Conversion Erik Routley</h6>
                                                            <p class="font-size-13 line-height mb-1">Argele Intili</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
                                                        </div>
                                                        <div class="iq-product-action">
                                                            <a href="javascript:void();"><i
                                                                    class="ri-shopping-cart-2-line text-primary"></i></a>
                                                            <a href="javascript:void();" class="ml-2"><i
                                                                    class="ri-heart-line text-danger"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-md-0 mb-lg-0">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/10.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">The Leo Dominica</h6>
                                                            <p class="font-size-13 line-height mb-1">Henry Jurk</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
                                                        </div>
                                                        <div class="iq-product-action">
                                                            <a href="javascript:void();"><i
                                                                    class="ri-shopping-cart-2-line text-primary"></i></a>
                                                            <a href="javascript:void();" class="ml-2"><i
                                                                    class="ri-heart-line text-danger"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/11.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">By The Editbeth Jat</h6>
                                                            <p class="font-size-13 line-height mb-1">David King</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
                                                            <h6><b>$149</b></h6>
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
                                            class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="javascript:void();"><img
                                                                class="img-fluid rounded w-100"
                                                                src="images/browse-books/12.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">The Crucial Decade</h6>
                                                            <p class="font-size-13 line-height mb-1">Attilio Marzi</p>
                                                            <div class="d-block line-height">
                                                                <span class="font-size-11 text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between mb-0">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Featured Books</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2"
                                            data-toggle="dropdown">
                                            This Week<i class="ri-arrow-down-s-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right shadow-none"
                                            aria-labelledby="dropdownMenuButton2">
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
                                <div class="row align-items-center">
                                    <div class="col-sm-5 pr-0">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                src="images/page-img/featured-book.png" alt=""></a>
                                    </div>
                                    <div class="col-sm-7 mt-3 mt-sm-0">
                                        <h4 class="mb-2">Casey Christie night book into find...</h4>
                                        <p class="mb-2">Author: Gheg origin</p>
                                        <div class="mb-2 d-block">
                                            <span class="font-size-12 text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <span class="text-dark mb-3 d-block">Lorem Ipsum is simply dummy test in find a
                                            of the
                                            printing and typeset ing industry into end.</span>
                                        <button type="submit" class="btn btn-primary learn-more">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between mb-0">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Escritor Em Destaques</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3"
                                            data-toggle="dropdown">
                                            This Week<i class="ri-arrow-down-s-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right shadow-none"
                                            aria-labelledby="dropdownMenuButton3">
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
                                <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                                    @foreach ($autor as $dado)
                                        <li class="col-sm-6 d-flex mb-3 align-items-center">
                                            <div class="icon iq-icon-box mr-3">
                                                <a href="javascript:void();"><img
                                                        class="img-fluid avatar-60 rounded-circle"
                                                        src="storage/{{ $dado->autorPerfil }}" alt=""></a>
                                            </div>
                                            <div class="mt-1">
                                                <h6>{{ $dado->autorNome }}</h6>
                                                <p class="mb-0 text-primary">Livros Publicados <span
                                                        class="text-body">2831</span>
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
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
                                                    <img src="images/favorite/01.jpg" class="img-fluid rounded w-100"
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="images/favorite/02.jpg" class="img-fluid rounded w-100"
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="images/favorite/03.jpg" class="img-fluid rounded w-100"
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
                                    <li class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative">
                                                <a href="javascript:void();">
                                                    <img src="images/favorite/04.jpg" class="img-fluid rounded w-100"
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

<!-- Mirrored from templates.iqonic.design/booksto/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 11:31:11 GMT -->

</html>
