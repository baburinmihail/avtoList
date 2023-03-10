@extends('dashbord_avtolist')

@section('title', 'Создание листа')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('avtoList.store') }}" method="POST">
            @csrf
            <!--
            <div class="row mb-2" >
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
            -->
            <!--разрыв---------------------------------------------------------------------->
            <div class="row mb-2">
                <div class="col-md-12 botstrape_class"><h4>ПУТЕВОЙ ЛИСТ АВТОМОБИЛЯ НА<p style="margin: 0px; padding: 0px" id="mounthID">МЕСЯЦ</p></h4><p >(месяц,квартал,период)</p></div>
                <div class="col-md-4 botstrape_class">
                    <select>
                        <option value="легковой">легковой</option>
                        <option value="специального">специального</option>
                    </select>
                </div>
                <div class="col-md-4 botstrape_class">
                    <p>№<input name="submit"  type="number" placeholder="(обязательное поле)" min="0" id="nomerID" required ></p>
                </div>
                <div class="col-md-4 botstrape_class">
                    <p id="dataID">23 Февраля 2023 <br></p>
                </div>
                <div class="col-md-12 botstrape_class">
                    Организация: филиал ОАО "СУЭК-Хакасия"- Промтранс, 655162 Республика Хакасия г. Черногорск ул.
                    Красных партизан 2А, тел. 8 (39031) 35-5-35; 6-37-17 , ОГРН 1071903000773
                    <p>
                        (наименование, адрес, номер телефона)
                    </p>
                </div>
                <div class="col-md-6 botstrape_class">
                    <select>
                        <option value="УАЗ ПИКАП">УАЗ ПИКАП</option>
                    </select>
                </div>
                <div class="col-md-6 botstrape_class">
                    Государственный номерной знак
                    <select>
                        <option value="УАЗ ПИКАП">1911748115</option>
                    </select>
                </div>
                <div class="col-md-6 botstrape_class">
                    Специальное оборудование  <input name="submit"  type="text" placeholder="(необязательное поле)" id="oborudovaniaID" >
                </div>
                <div class="col-md-6 botstrape_class">
                    Гаражный номер  <input name="submit"  type="text" placeholder="(необязательное поле)" id="garazhID" >
                </div>
                <div class="col-md-6 botstrape_class">
                    <select>
                        <option value="Егоров О.В.">Егоров О.В.</option>
                        <option value="Иванов И.И.">Иванов И.И.</option>
                    </select>
                    <p>
                        (фамилия, имя , отчество)
                    </p>
                </div>
                <div class="col-md-6 botstrape_class">
                    Табельный номер  <input name="submit"  type="text" placeholder="(необязательное поле)" id="tabelID" >
                </div>
                <div class="col-md-2 botstrape_class">
                    Предрейсовый медосмотр
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(отметка)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(дата, время)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(должность)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(подпись)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(расшифровка подписи)</p>
                </div>
                <!--послерейсовый-->
                <div class="col-md-2 botstrape_class">
                    Послерейсовый медосмотр
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(отметка)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(дата, время)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(должность)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(подпись)</p>
                </div>
                <div class="col-md-2 botstrape_class">
                    ________<p>(расшифровка подписи)</p>
                </div>
                <div class="col-md-6 botstrape_class">
                    <div class="row mb-2">
                        <div class="col-md-12 botstrape_class">
                            <p><h5>Задание водителю</h5></p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            РХ, Черногорск-Абакан-Белый яр<p>(кратко изложите суть задания)</p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Адрес стоянки: г.Черногорск, ул.Автомобильная, 5А
                        </div>
                        <div class="col-md-12 botstrape_class">
                            <p>Маршруты движения:</p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            ___________________________________________________<p>краткое описание маршрута 1</p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            ___________________________________________________<p>краткое описание маршрута 2</p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            ___________________________________________________<p>краткое описание маршрута 3</p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Регион движения: ___________________________________
                        </div>
                        <div class="col-md-12 botstrape_class">
                            <p><h5>Общее время работы</h5></p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Автомобиля:___________________часов
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Водитель:_____________________часов
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Водитель:_____________________часов
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Водитель:_____________________часов
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Прочие отметки:
                        </div>
                        <div class="col-md-12 botstrape_class">
                            ___________________________________
                        </div>
                        <div class="col-md-12 botstrape_class">
                            ___________________________________
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Автомобиль сдал
                        </div>
                        <div class="col-md-6 botstrape_class">
                            водитель_____________<p>(подпись)</p>
                        </div>
                        <div class="col-md-6 botstrape_class">
                            <span>Егоров О.В.</span><p>(расшифровка подписи)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 botstrape_class">
                    <div class="row mb-3">
                        <div class="col-md-12 botstrape_class">
                            <p><h5>Автомобиль техничски исправен</h5></p>
                        </div>
                        <div class="col-md-6 botstrape_class">
                            <p>Показание спидометра, км</p>
                        </div>
                        <div class="col-md-6 botstrape_class">
                            <input name="spidometr" type="number" placeholder="Показание спидометра, км">
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Автомобиль передал<p> </p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            Механик
                        </div>
                        <div class="col-md-4 botstrape_class">
                            ________________<p>(подпись)</p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            ________________<p>(расшифровка подписи)</p>
                        </div>
                        <div class="col-md-12 botstrape_class">
                            Автомобиль в технически исправном состоянии принял<p> </p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            Водитель
                        </div>
                        <div class="col-md-4 botstrape_class">
                            ________________<p>(подпись)</p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            ________________<p>(расшифровка подписи)</p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            Горючее
                        </div>
                        <div class="col-md-4 botstrape_class">
                            Марка<p>АИ-92</p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            Код
                        </div>
                        <div class="col-md-12 botstrape_class">
                            <p> </p>Движение горючего
                        </div>
                        <div class="col-md-6 botstrape_class">

                        </div>
                        <div class="col-md-6 botstrape_class">
                            Количество, л
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Выдано:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            <input name="exitToplivo"  type="text" placeholder="(обязательное поле)" id="exitToplivoID" >
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Приобретенно:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            <input name="beyToplivo"  type="text" placeholder="(обязательное поле)" id="beyToplivoID" >
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Остаток:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            <input name="ostatokToplivo"  type="text" placeholder="(обязательное поле)" id="ostatokToplivo" >
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Расход: по норме
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Расход: фактический
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Экономия
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Перерасход
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Автомобиль принял. Показания спидометра при возвращении в гараж, км
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ________________
                        </div>
                        <div class="col-md-4 botstrape_class">
                            Механик
                        </div>
                        <div class="col-md-4 botstrape_class">
                           _____________<p>(подпись)</p>
                        </div>
                        <div class="col-md-4 botstrape_class">
                            _____________<p>(расшифровка подписи)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 botstrape_class">
                    <h5>Движение ГСМ</h5>
                </div>
                <!--Левая часть ГСМ-->
                <div class="col-md-6 botstrape_class">
                    <div class="row mb-2">
                        <div class="col-md-12 botstrape_class">
                            <h5>Масло:</h5>
                        </div>
                        <!---->
                        <div class="col-md-6 botstrape_class">
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Количество, л
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Выдано:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Приобретенно:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Расход по норме
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Фактический
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Экономия
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Перерасход
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>

                        <!---->
                        <div class="col-md-12 botstrape_class">
                            <h5>Тосол:</h5>
                        </div>
                        <!---->
                        <div class="col-md-6 botstrape_class">
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Количество, л
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Выдано:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Приобретенно:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Расход по норме
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Фактический
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Экономия
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Перерасход
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>

                        <!---->
                    </div>
                </div>
                <!--Правая часть ГСМ-->
                <div class="col-md-6 botstrape_class">
                    <div class="row mb-2">
                        <div class="col-md-12 botstrape_class">
                            <h5>Антифриз:</h5>
                        </div>
                        <!---->
                        <div class="col-md-6 botstrape_class">
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Количество, л
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Выдано:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Приобретенно:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Расход по норме
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Фактический
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Экономия
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Перерасход
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>

                        <!---->
                        <div class="col-md-12 botstrape_class">
                            <h5>______</h5>
                        </div>
                        <!---->
                        <div class="col-md-6 botstrape_class">
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Количество, л
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Выдано:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Приобретенно:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Расход по норме
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Фактический
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Экономия
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Перерасход
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________
                        </div>
                        <!---->
                    </div>
                </div>
                <div class="col-md-12 botstrape_class">
                    <h5>Сведения о ремонтах и техобслуживании:</h5>
                </div>
                <!--Левая-->
                <div class="col-md-6 botstrape_class">
                    <div class="row mb-2">
                        <div class="col-md-12 botstrape_class">
                            <h5>Результат работы автомобиля: Расчет заработной платы:</h5>
                        </div>
                        <div class="col-md-6 botstrape_class">
                            всего отработано ч.
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            пройдено, км
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            доплаты:
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                    </div>
                </div>
                <!--Правая-->
                <div class="col-md-6 botstrape_class">
                    <div class="row mb-2">
                        <div class="col-md-12 botstrape_class">
                            <p></p>
                        </div>
                        <div class="col-md-6 botstrape_class">
                            за километраж, руб.
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            за часы, руб
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            за ___________, руб
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                        <div class="col-md-6 botstrape_class">
                            Итого рублей
                        </div>
                        <div class="col-md-6 botstrape_class">
                            ___________________
                        </div>
                    </div>
                </div>
                <div class="col-md-12 botstrape_class">
                    <div class="row mb-4">
                        <div class="col-md-3 botstrape_class">
                            Расчет произвел
                        </div>
                        <div class="col-md-3 botstrape_class">
                            ___________________<p>должность</p>
                        </div>
                        <div class="col-md-3 botstrape_class">
                            ___________________<p>подпись</p>
                        </div>
                        <div class="col-md-3 botstrape_class">
                            ___________________<p>расшифровка подписи</p>
                        </div>
                    </div>
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
