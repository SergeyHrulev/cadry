@extends('layouts.app')
@section('content')
    <section class="left-main-block">
        @include('partials.vacancy_responce')
        <div style="display: flex; justify-content: center;">
            <h3 style="font-weight: bold;
font-size: 22px;
line-height: 28px;color: #808995;">Похожие вакансии</h3>
        </div>
        @include('partials.vacancy')
        @include('partials.vacancy')
        @include('partials.vacancy')
    </section>
    <aside id="search">

    </aside>
    @endsection
