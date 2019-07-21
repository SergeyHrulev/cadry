@extends('layouts.app')
@section('content')
    <section class="site-pages">
        <section class="left-main-block">
            @include('partials.vacancy_responce')
            <div style="display: flex; justify-content: center;">
                <h3 style="font-weight: bold;
    font-size: 22px;
    line-height: 28px;color: #808995;">Похожие вакансии</h3>
            </div>
            @foreach($vacancies as $vacancy)
                @include('partials.vacancy', ['vacancy' => $vacancy])
            @endforeach
        </section>
        <aside id="search">

        </aside>
    </section>
    @endsection
