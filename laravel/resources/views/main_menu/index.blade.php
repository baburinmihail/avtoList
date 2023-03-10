@extends('dashbord_avtolist')

@section('title', 'Главная')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">Номер</th>
                    <th scope="col">Марка авто</th>
                    <th scope="col">Сезон</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if (session('success'))
                    <h4>{{session('success')}}</h4>
                @endif
                @foreach($avtoList as $value)
                    <tr>
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['type_avto'] }}</td>
                        <td>{{ $value['seson_year'] }}</td>
                        <td><a href="{{ route('avtoList.edit', $value['id'] ) }}">редактировать</a></td>
                        <td><a href="{{ route('avtoList.edit', $value['id'] ) }}">печать</a></td>
                        <td>
                            <form action="{{ route( 'avtoList.destroy', $value['id'] ) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn" href="">удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <script>
        document.querySelector('#nav-link_mainMenu').style.color= '#0093ff';
    </script>
@endsection

