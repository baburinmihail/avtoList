<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Автомобильный лист-@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ url('css/mycss/bootstrap.css') }}" />
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .botstrape_class{
                font-family: "Times New Roman";
                text-align: center;
            }
        </style>
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ url('css/mycss/dashboard.css') }}" />
    </head>
    <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Промтранс</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Выход</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a id="nav-link_mainMenu" class="nav-link" aria-current="page" href="{{ route('avtoList.index') }}">
                                <span data-feather="home"></span>
                                Список листов
                            </a>
                        </li>
                        <li class="nav-item">
                          <a id="nav-link_create" class="nav-link" href="{{ route('avtoList.create') }}">
                            <span data-feather="file"></span>
                            Создать новый лист
                          </a>
                        </li>
                        <!--
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                          </a>
                        </li>
                        -->
                    </ul>
                </div>
            </nav>
            @yield('content')

        </div>
    </div>
    <script src="{{ url('js/bootstrap.js') }}"></script>
    </body>
</html>
