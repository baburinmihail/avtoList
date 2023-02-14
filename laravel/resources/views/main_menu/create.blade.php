@extends('dashbord_avtolist')

@section('title', 'Создание листа')

@section('content')
    <form action="login.php" method="POST">
        <div class="row mb-3">
            <div class="col-md-12 themed-grid-col">ПУТЕВОЙ ЛИСТ</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <input name="login" class="check-in_input" type="text" placeholder="Первое поле">
            <input name="password" class="check-in_input" type="password" placeholder="Второе поле">
            <input name="submit" type="submit" value="Отпраить">
        </div>
    </form>
    <script>
        document.querySelector('#nav-link_create').style.color= '#0093ff';
    </script>
@endsection
