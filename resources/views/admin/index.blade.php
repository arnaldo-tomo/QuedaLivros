<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('theme.css') }}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('images/logo.png') }}"
                                    srcset="{{ asset('images/logo.png') }}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images/logo.png') }}"
                                    srcset="{{ asset('images/logo.png') }}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">QuedaLivros</h4>
                                        <div class="nk-block-des">
                                            <p>Kmk Na Boa,Ja sabs oque fazer.</p>
                                        </div>
                                    </div>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-danger rounded" role="">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    @foreach ($errors->all() as $erro)
                                        <div class="alert alert-danger" role="alert">
                                            <strong> {{ $erro }}</strong>

                                        </div>
                                    @endforeach
                                @endif
                                <form action="{{ Route('autenticacao') }}" method="post" class="mt-4 form-text">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email </label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" name="email" class="form-control form-control-lg"
                                                id="default-01" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Senha</label>

                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="senha" class="form-control form-control-lg"
                                                id="password" placeholder="Senha">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Quedar</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('bundle.js?ver=3.0.3') }}"></script>
    <script src="{{ asset('scripts.js?ver=3.0.3') }}"></script>


</html>
