@extends('dashbord_avtolist')

@section('title', 'Редактирование листа')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form action="{{ route('avtoList.update', $avtoList['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-2">
                <div class="col-md-12">Редактирование листа № {{ $avtoList['number'] }}$avtoList['number'] </div>
                <div class="col-md-8">
                    Номер
                </div>
                <div class="col-md-4">
                    <input name="number" value="{{ $avtoList['number'] }}" class="number_table" type="number" placeholder="Номер">
                </div>
                <div class="col-md-8">
                    Тип авто
                </div>
                <div class="col-md-4">
                    <input name="type_avto" value="{{ $avtoList['type_avto'] }}" class="type_avto" type="text" placeholder="type_avto">
                </div>
                <div class="col-md-8">
                    Время года
                </div>
                <div class="col-md-4">
                    <input name="seson_year" value="{{ $avtoList['seson_year'] }}" class="seson_year" type="text" placeholder="seson_year">
                </div>
                <div class="col-md-12">
                    <input name="submit" type="submit" value="Обновить">
                </div>
            </div>
        </form>
    </main>
    <script>
        document.querySelector('#nav-link_create').style.color= '#0093ff';
    </script>
@endsection
