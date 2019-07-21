@extends('layouts.app')
@section('content')
    <section class="site-pages">
        <resume-form-component :user="{{ Auth::user() }}"></resume-form-component>

        <section class="right-main-block">
            @include('partials.advertizing')
        </section>
    </section>
    @endsection
