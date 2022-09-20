<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href=".{{ asset('') }}.{{ asset('') }}.{{ asset('') }}">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Page Title  -->
    <title>QuedaLivros-Registro</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('theme.css') }}">
</head>

<body class="nk-body npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light"
                                    data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="{{ route('home') }}" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg"
                                            src="{{ asset('images/logo.png') }}" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images/logo.png') }}"
                                            alt="logo" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Registro</h5>
                                        <div class="nk-block-des">
                                            <p>Criar nova conta QuelaLivros.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger role">
                                            <div class="display">
                                                <strong> {{ $error }}</strong>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">Nome</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control form-control-lg" id="name"
                                                placeholder="Digite seu nome">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">E-mail ou nome de usuário</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                class="form-control form-control-lg" id="email"
                                                placeholder="Digite seu endereço de e-mail ou nome de usuário">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#"
                                                class="form-icon form-icon-right password-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control form-control-lg" id="password"
                                                placeholder="Enter your password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Confirmar Password</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#"
                                                class="form-icon form-icon-right password-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password_confirmation"
                                                value="{{ old('password_confirmation') }}"
                                                class="form-control form-control-lg" id="password_confirmation"
                                                placeholder="Enter your password">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">Concordo com a <a
                                                    tabindex="-1" href="#">Política de Privacidade</a> &amp; <a
                                                    tabindex="-1" href="#"> Termos.</a></label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Registrar</button>
                                    </div>
                                </form><!-- formulário -->
                                <div class="form-note-s2 pt-4"> Novo em nossa plataforma? <a
                                        href="{{ route('login') }}">Ja tenho Uma Conta</a>
                                </div>
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">

                                <div class="mt-3">
                                    <p>&copy; 2022 QuedaLivros. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                            data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg"
                            data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-a.png') }}"
                                                    srcset="{{ asset('images/slides/promo-a2x.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly
                                                    design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-b.png') }}"
                                                    srcset="{{ asset('images/slides/promo-b2x.png 2x') }}"
                                                    alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly
                                                    design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="{{ asset('images/slides/promo-c.png') }}"
                                                    srcset="{{ asset('images/slides/promo-c2x.png 2x') }}"
                                                    alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its user-friendly
                                                    design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
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
