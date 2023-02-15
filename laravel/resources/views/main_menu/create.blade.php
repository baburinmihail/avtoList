@extends('dashbord_avtolist')

@section('title', 'Создание листа')

@section('content')
    @if (session('success'))
        <h4>{{session('success')}}</h4>
    @endif
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <form action="{{ route('avtoList.store') }}" method="POST">
            @csrf
            <div class="row mb-2">
                <div class="col-md-12">Путевой Лист(Тест отправки данных)</div>
                <div class="col-md-8">
                    Номер
                </div>
                <div class="col-md-4">
                    <input name="number" class="number_table" type="number" placeholder="Номер">
                </div>
                <div class="col-md-8">
                    Тип авто
                </div>
                <div class="col-md-4">
                    <input name="type_avto" class="type_avto" type="text" placeholder="type_avto">
                </div>
                <div class="col-md-8">
                    Время года
                </div>
                <div class="col-md-4">
                    <input name="seson_year" class="seson_year" type="text" placeholder="seson_year">
                </div>
                <div class="col-md-12">
                    <input name="submit" type="submit" value="Отпраить">
                </div>
            </div>
        </form>
    </main>
    <script>
        document.querySelector('#nav-link_create').style.color= '#0093ff';
    </script>
@endsection
