@extends('layouts.app')
@section('content')
    <section class="lk-employer">
    @include('partials.employer.aside')
        <section class="response-content-resume employer-content">
            <div class="jobs">
                <div class="jobs-header">
                    <h2>Вакансии компании</h2>
                    <div class="jobs-header-navs">
                        <div class="jobs-header-nav-element jobs-active">
                            Постоянная работа<span>2</span>
                        </div>
                        <div class="jobs-header-nav-element">
                            Временная работа<span>0</span>
                        </div>
                        <div class="jobs-header-nav-element">
                            Закрытые<span>0</span>
                        </div>
                    </div>
                </div>
                <div class="jobs-vacancy">
                    <div>
                        <p>Открыта 9 марта в 18:16</p>
                        <h3>Бариста</h3>
                        <p>От 30 000 до 40 000 рублей в месяц</p>
                        <div class="jobs-vacancy-activities">
                            <button>Редактировать</button>
                            <button>Закрыть</button>
                        </div>
                    </div>
                    <div class="jobs-vacancy-indicators">
                        <div class="jobs-vacancy-figures">
                            <div class="jobs-vacancy-metrics">
                                <div class="jobs-vacancy-metrics-element">4</div>
                                <span>Отклика</span>
                            </div>
                            <div class="jobs-vacancy-metrics">
                                <div class="jobs-vacancy-metrics-element">15</div>
                                <span>Просмотров</span>
                            </div>
                            <div class="jobs-vacancy-metrics">
                                <div class="jobs-vacancy-metrics-element">12</div>
                                <span>Сегодня</span>
                            </div>
                        </div>
                        <button>Продвинуть</button>
                    </div>
                </div>
                <div class="jobs-footer">
                    <button>Добавить вакансию</button>
                </div>
            </div>
        </section>
    </section>
    @endsection
