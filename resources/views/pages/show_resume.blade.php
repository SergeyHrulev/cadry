@extends('layouts.app')
@section('content')
    <section class="left-main-block">
        <section class="block">
                <div class="inner-block resume-header">
                    <div>
                        <h1>Виктория Козлова</h1>
                        <h3>30 000 руб в месяц</h3>
                    </div>
                    <div>
                        <img src="{{ asset('/img/avatar.png') }}" alt="">
                    </div>
                </div>
            <div class="searching-job">
                <h3 class="header">Желаемая работа</h3>
                <div class="resume-tab-block">
                    <div class="tab">Бариста</div>
                    <div class="tab">Администратор</div>
                    <div class="tab">Хостес</div>
                </div>
            </div>
            <div class="inner-block resume-description">
                <div class="description-items">
                    <div class="preamb">Пол</div>
                    <div>Женский</div>
                </div>
                <div class="description-items">
                    <div class="preamb">Дата рождения</div>
                    <div>Женский</div>
                </div>
                <div class="description-items">
                    <div class="preamb">Образование</div>
                    <div>Женский</div>
                </div>
                <div class="description-items">
                    <div class="preamb">Город</div>
                    <div>Женский</div>
                </div>
                <div class="description-items">
                    <div class="preamb">Разрешение на работу</div>
                    <div>Женский</div>
                </div>
                <h2>Опыт работы</h2>
                <div class="description-block">
                    <div class="date">2018</div>
                    <div class="description-job">
                        Кофе с собой. Занималась оформлением точек продаж и урегулированием конфликтов
                    </div>
                </div>
                <div class="description-block">
                    <div class="date">2018</div>
                    <div class="description-job">
                        Кофе с собой. Занималась оформлением точек продаж и урегулированием конфликтов
                    </div>
                </div>
            </div>
            <div class="inner-block">
                <button class="edit-resume-button">Редактировать резюме</button>
            </div>
        </section>
    </section>

    <aside>
        <div class="block">

        </div>
    </aside>
    @endsection
