@extends('layouts.app')
@section('content')
    <section class="lk-employer">
        @include('partials.employer.aside')
        <section class="response-content">
            <section class="response-content-header">
                    <h2>Отклики</h2>
                <div class="response-content-selectors">
                    <div class="response-content-selectors-selector">
                        <p>Новые</p>
                        <p>3</p>
                    </div>
                    <div class="response-content-selectors-selector">
                        <p>Приглашен</p>
                        <p>8</p>
                    </div>
                    <div class="response-content-selectors-selector">
                        <p>Принят</p>
                        <p>0</p>
                    </div>
                    <div class="response-content-selectors-selector">
                        <p>Резерв</p>
                        <p>2</p>
                    </div>
                    <div class="response-content-selectors-selector">
                        <p>Не подошел</p>
                        <p>0</p>
                    </div>
                    <div class="response-content-selectors-selector">
                        <p>Не пришел</p>
                        <p>0</p>
                    </div>
                    <div class="response-content-selectors-selector">
                        <p>Вакансия закрыта</p>
                        <p>2</p>
                    </div>
                </div>
            </section>
            <section class="response-content-resume">
                <div class="response-content-resume-title">
                    <p>На вакансию <span class="resume-vacancy-name">Бариста</span></p>
                    <p>9 марта, 18:16</p>
                </div>
                <div class="response-content-resume-content">
                    <div class="response-content-resume-imgblock">
                        <img src="{{ asset('img/resumelogo.jpg') }}" alt="">
                        <p class="response-content-resume-grey">Статус</p>
                    </div>
                    <div class="response-content-resume-contentblock">
                        <p class="response-content-resume-normal resume-applicant-name">Виктория Козлова</p>
                        <p class="response-content-resume-grey">Возраст: <span class="response-content-resume-normal">24 года</span> &nbsp;&nbsp; Опыт работы: <span class="response-content-resume-normal">4 года 2 месяца</span></p>
                        <p class="response-content-resume-grey">Гражданство: <span class="response-content-resume-normal">РФ</span></p>
                        <p class="response-content-resume-grey">Санкт-Петербург, проспект Королева</p>
                        <div class="response-content-resume-statuses status-expect">
                            Ожидает вашего решения
                        </div>
                    </div>
                    <div class="response-content-resume-rightblock">
                        <div class="response-content-resume-navblock">
                            <img src="{{ asset('img/resume-nav.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="response-content-resume">
                <div class="response-content-resume-title">
                    <p>На вакансию <span class="resume-vacancy-name">Бариста</span></p>
                    <p>9 марта, 18:16</p>
                </div>
                <div class="response-content-resume-content">
                    <div class="response-content-resume-imgblock">
                        <img src="{{ asset('img/resumelogo.jpg') }}" alt="">
                        <p class="response-content-resume-grey">Статус</p>
                    </div>
                    <div class="response-content-resume-contentblock">
                        <p class="response-content-resume-normal resume-applicant-name">Виктория Козлова</p>
                        <p class="response-content-resume-grey">Возраст: <span class="response-content-resume-normal">24 года</span> &nbsp;&nbsp; Опыт работы: <span class="response-content-resume-normal">4 года 2 месяца</span></p>
                        <p class="response-content-resume-grey">Гражданство: <span class="response-content-resume-normal">РФ</span></p>
                        <p class="response-content-resume-grey">Санкт-Петербург, проспект Королева</p>
                        <div class="response-content-resume-statuses status-invited">
                            Приглашен
                        </div>
                    </div>
                    <div class="response-content-resume-rightblock">
                        <div class="response-content-resume-navblock">
                            <img src="{{ asset('img/resume-nav.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="response-content-resume">
                <div class="response-content-resume-title">
                    <p>На вакансию <span class="resume-vacancy-name">Бариста</span></p>
                    <p>9 марта, 18:16</p>
                </div>
                <div class="response-content-resume-content">
                    <div class="response-content-resume-imgblock">
                        <img src="{{ asset('img/resumelogo.jpg') }}" alt="">
                        <p class="response-content-resume-grey">Статус</p>
                    </div>
                    <div class="response-content-resume-contentblock">
                        <p class="response-content-resume-normal resume-applicant-name">Виктория Козлова</p>
                        <p class="response-content-resume-grey">Возраст: <span class="response-content-resume-normal">24 года</span> &nbsp;&nbsp; Опыт работы: <span class="response-content-resume-normal">4 года 2 месяца</span></p>
                        <p class="response-content-resume-grey">Гражданство: <span class="response-content-resume-normal">РФ</span></p>
                        <p class="response-content-resume-grey">Санкт-Петербург, проспект Королева</p>
                        <div class="response-content-resume-statuses status-accepted">
                            Принят
                        </div>
                    </div>
                    <div class="response-content-resume-rightblock">
                        <div class="response-content-resume-navblock">
                            <img src="{{ asset('img/resume-nav.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="response-content-resume">
                <div class="response-content-resume-title">
                    <p>На вакансию <span class="resume-vacancy-name">Бариста</span></p>
                    <p>9 марта, 18:16</p>
                </div>
                <div class="response-content-resume-content">
                    <div class="response-content-resume-imgblock">
                        <img src="{{ asset('img/resumelogo.jpg') }}" alt="">
                        <p class="response-content-resume-grey">Статус</p>
                    </div>
                    <div class="response-content-resume-contentblock">
                        <p class="response-content-resume-normal resume-applicant-name">Виктория Козлова</p>
                        <p class="response-content-resume-grey">Возраст: <span class="response-content-resume-normal">24 года</span> &nbsp;&nbsp; Опыт работы: <span class="response-content-resume-normal">4 года 2 месяца</span></p>
                        <p class="response-content-resume-grey">Гражданство: <span class="response-content-resume-normal">РФ</span></p>
                        <p class="response-content-resume-grey">Санкт-Петербург, проспект Королева</p>
                        <div class="response-content-resume-statuses status-regected">
                            Отказ
                        </div>
                    </div>
                    <div class="response-content-resume-rightblock">
                        <div class="response-content-resume-navblock">
                            <img src="{{ asset('img/resume-nav.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </section>
    @endsection
