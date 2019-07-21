@extends('layouts.app')
@section('content')
    <section class="site-pages">
        <section class="content">
            @foreach($vacancies as $vacancy)
                @include('partials.vacancy', ['vacancy' => $vacancy])
            @endforeach
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
    </section>
    @endsection
