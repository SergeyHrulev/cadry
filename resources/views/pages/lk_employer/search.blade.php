@extends('layouts.app')
@section('content')
    <section class="lk-employer">
        @include('partials.employer.aside')
        <section class="vacancy-search">
            <div class="main-bar">
                <div>
                    <h2>Поиск резюме</h2>
                    <p>Подходят под ваши вакансии</p>
                </div>
                <div class="main-bar-search">
                    <img src="{{ asset('img/icons/search.png') }}" alt="">
                    Поиск и фильтры
                </div>
            </div>
            <div class="search-vacancy">
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
            </div>
        </section>
    </section>
    @endsection
