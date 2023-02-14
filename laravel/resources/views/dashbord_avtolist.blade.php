<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Dashboard Template · Bootstrap v5.0</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/mycss/bootstrap.css" />
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
        </style>
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/mycss/dashboard.css" />

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
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Список листов
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">Номер</th>
                            <th scope="col">Макрка авто</th>
                            <th scope="col">Сезон</th>
                            <th scope="col">Дата</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>УАЗик</td>
                            <td>Лето</td>
                            <td>13.02.21</td>
                            <td>редактировать</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>УАЗик</td>
                            <td>Лето</td>
                            <td>14.02.21</td>
                            <td>редактировать</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>УАЗик</td>
                            <td>Лето</td>
                            <td>15.02.21</td>
                            <td>редактировать</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>УАЗик</td>
                            <td>Лето</td>
                            <td>16.02.21</td>
                            <td>редактировать</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>УАЗик</td>
                            <td>Лето</td>
                            <td>17.02.21</td>
                            <td>редактировать</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    </body>
</html>
