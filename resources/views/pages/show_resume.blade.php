@extends('layouts.app')
@section('content')
    <section class="site-pages">
        <section class="left-main-block">
            @foreach($applicants as $applicant)
                <section class="block">
                    <div class="inner-block resume-header">
                        <div>
                            <h1>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h1>
                            <h3>{{ $applicant->wage_level }} руб в месяц</h3>
                        </div>
                        <div>
                            <img src="{{ asset('/img/avatar.png') }}" alt="">
                        </div>
                    </div>
                    {{--<div class="searching-job">--}}
                        {{--<h3 class="header">Желаемая работа</h3>--}}
                        {{--<div class="resume-tab-block">--}}
                            {{--<div class="tab">Бариста</div>--}}
                            {{--<div class="tab">Администратор</div>--}}
                            {{--<div class="tab">Хостес</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="inner-block resume-description">
                        <div class="description-items">
                            <div class="preamb">Пол</div>
                            <div>{{ $applicant->sex }}</div>
                        </div>
                        <div class="description-items">
                            <div class="preamb">Дата рождения</div>
                            <div>{{ $applicant->date_of_birth }}</div>
                        </div>
                        <div class="description-items">
                            <div class="preamb">Образование</div>
                            <div>{{ $applicant->education }}</div>
                        </div>
                        <div class="description-items">
                            <div class="preamb">Город</div>
                            <div>{{ $applicant->city->name }}</div>
                        </div>
                        <div class="description-items">
                            <div class="preamb">Разрешение на работу</div>
                            <div>{{ $applicant->work_permit }}</div>
                        </div>
                        <h2>Опыт работы</h2>
                        @foreach($applicant->cv as $cv)
                        <div class="description-block">
                            <div class="date">{{ $cv->date }}</div>
                            <div class="description-job">
                                {{ $cv->description }}
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <div class="inner-block">
                        <button class="edit-resume-button">Редактировать резюме</button>
                    </div>
                </section>
                @endforeach
        </section>

        <aside>
            <div class="block">

            </div>
        </aside>
    </section>
    @endsection
