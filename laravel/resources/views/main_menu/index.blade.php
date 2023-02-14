@extends('dashbord_avtolist')

@section('title', 'Главная')

@section('content')
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
    <script>
        document.querySelector('#nav-link_mainMenu').style.color= '#0093ff';
    </script>
@endsection

