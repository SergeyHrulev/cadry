@extends('layouts.app')
@section('content')
    {{--@include('partials.main_page_head')--}}
    {{--@include('partials.header_applicant')--}}
    <section class="left-main-block">
        @include('partials.vacancy')
        @include('partials.vacancy')
        @include('partials.vacancy')
        @include('partials.vacancy')
        @include('partials.vacancy')
    </section>
    <aside id="search">
        <section class="search-right-nav">
            @include('partials.search_occupation')
        </section>
        @include('partials.servise_block')
        @include('partials.advertizing')
    </aside>
    @endsection
