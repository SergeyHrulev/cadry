@extends('layouts.app')
@section('content')
    <section class="lk-employer">
        @include('partials.employer.aside')
        <section class="vacancy-search">
            <div class="show-bar">
                <div class="show-bar-element">
                    <img src="{{ asset('img/icons/left-arrow.png') }}" alt="">
                    Назад к списку
                </div>
                <div class="show-bar-element">
                    <img src="{{ asset('img/icons/star.png') }}" alt="">
                    Добавить в избранное
                </div>
            </div>
            <div class="search-vacancy show-down">
                <div class="search-vacancy-header">
                    <div >
                        <h2>Виктория Козлова</h2>
                        <p>30 000 руб в месяц</p>
                    </div>
                    <div>
                        <img src="{{ asset('img/resumelogo.jpg') }}" alt="">
                    </div>
                </div>
                <div class="search-vacancy-desired">
                    <h3 class="search-vacancy-grey">Желаемая работа</h3>
                    <div class="search-vacancy-desired-items">
                        <div class="search-vacancy-desired-item">Бариста</div>
                        <div class="search-vacancy-desired-item">Администратор</div>
                        <div class="search-vacancy-desired-item">Хостес</div>
                    </div>
                </div>
                <div class="vacancy-content-context">
                    <p class="search-vacancy-grey">Пол<span class="search-vacancy-plain">Женский</span></p>
                    <p class="search-vacancy-grey">Дата рождения<span class="search-vacancy-plain">06.08.1986</span></p>
                    <p class="search-vacancy-grey">Образование<span class="search-vacancy-plain">Высшее</span></p>
                    <p class="search-vacancy-grey">Город<span class="search-vacancy-plain">Санкт-Петербург</span></p>
                    <p class="search-vacancy-grey">Разрешение на работу<span class="search-vacancy-plain">РФ</span></p>
                </div>
                <div class="show">
                    <h4>Опыт работы</h4>
                    <div>
                        <p class="show-date">2019</p>
                        <p class="show-experience">
                            Кофе с собой. Занималась оформлением точек продаж и урегулированием конфликтов.
                        </p>
                    </div>
                    <div>
                        <p class="show-date">2017</p>
                        <p class="show-experience">
                            Основала компанию по продаже заколок ручной работы. Участие в проведении маркетингового исследования возможных потребителей продукции компании.
                        </p>
                    </div>
                </div>
                <div class="show-footer">
                    +7 950 360 80 19
                </div>
            </div>
            <div class="show-analogs">
                Похожие вакансии
            </div>
        </section>
    </section>
@endsection
