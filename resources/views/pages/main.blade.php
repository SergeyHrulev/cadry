@extends('layouts.app')
@section('content')
    {{--@include('partials.main_page_head')--}}
    {{--@include('partials.header_applicant')--}}
    <section class="left-main-block">
        @foreach($vacancies as $vacancy)
            @include('partials.vacancy', ['vacancy' => $vacancy])
            @endforeach

        {{--@include('partials.vacancy')--}}
        {{--@include('partials.vacancy')--}}
        {{--@include('partials.vacancy')--}}
        {{--@include('partials.vacancy')--}}
        <section class="vacancy">
            <a href="{{ $vacancies->nextPageUrl() }}">Показать еще</a>
        </section>
    </section>
    <aside id="search">
        <section class="search-right-nav">
            @include('partials.search_occupation')
        </section>
        @include('partials.servise_block')
        @include('partials.advertizing')
    </aside>
    @endsection
