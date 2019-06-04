@extends('layouts.app')
@section('content')
    <resume-form-component></resume-form-component>
    {{--<section class="left-main-block">--}}
        {{--<section class="resume-edit">--}}
            {{--<h2 class="heading">Личные данные</h2>--}}
            {{--<section class="resume-main-content">--}}
                {{--<div class="resume-avatar">--}}
                    {{--<img src="{{ asset('img/avatar.png') }}" alt="">--}}
                    {{--<a href="">Загрузить</a>--}}
                {{--</div>--}}
                {{--@include('partials.resume_form')--}}
            {{--</section>--}}
        {{--</section>--}}

        {{--<section class="resume-edit">--}}
            {{--<h2 class="heading">Опыт работы</h2>--}}
            {{--<section class="resume-main-content">--}}
                {{--<form class="resume-main-form" action="">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="">Год работы</label>--}}
                        {{--<select class="form-select short" name="" id="">--}}
                            {{--<option value="Saint-Petersburg">2019</option>--}}
                            {{--<option value="Moscow">2018</option>--}}
                            {{--<option value="Prague">2017</option>--}}
                            {{--<option value="Prague">2016</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="">Место работы и обязанности</label>--}}
                            {{--<textarea class="form-text" name="" id="" cols="30" rows="10"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<button class="add-job">Добавить еще одно место работы</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</section>--}}
        {{--</section>--}}
        {{--<section class="resume-edit" style="background-color: transparent;">--}}
            {{--<section class="resume-main-content">--}}
                {{--<form class="resume-main-form" action="">--}}
                    {{--<div class="form-group">--}}
                        {{--<button class="save-cv">Сохранить изменения</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</section>--}}
        {{--</section>--}}
    {{--</section>--}}

    <section class="right-main-block">
        @include('partials.advertizing')
    </section>
    @endsection
