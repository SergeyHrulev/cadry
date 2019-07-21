@extends('layouts.app')
@section('content')
    <section class="lk-employer">
        @include('partials.employer.aside')
        <section class="settings">
            <div class="settings-block">
                <h2>Личные данные</h2>
                <div class="settings-form">
                    <div class="settings-avatar">
                        <img src="{{ asset('img/men-avatar.jpg') }}" alt="">
                        <span>Загрузить</span>
                    </div>
                    <div class="settings-content">
                        <form action="">
                            <div class="settings-form-block">
                                <label for="">Ваше имя</label>
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="settings-form-block">
                                <label for="">Ваша фамилия</label>
                                <input type="text" placeholder="Фамилия">
                            </div>
                            <button>Сохранить изменения</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="settings-block">
                <h2>Профиль компании</h2>
                <div class="settings-form">
                    <div class="settings-avatar">
                        <img src="{{ asset('img/yandex.png') }}" alt="">
                        <span>Загрузить</span>
                    </div>
                    <div class="settings-content">
                        <form action="">
                            <div class="settings-form-block">
                                <label for="">Название компании</label>
                                <input type="text" placeholder="Название">
                            </div>
                            <div class="settings-form-textarea">
                                <label for="">Описание</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="settings-form-block">
                                <label for="">Сайт компании</label>
                                <input type="text" placeholder="Сайт">
                            </div>
                            <button>Сохранить изменения</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="settings-block">
                <h2>Связь</h2>
                <p>Вы можете разрешить соискателям звонить вам на основной или дополнительный номер и переключать их в любой момент.</p>
                <div class="settings-form-inline">
                    <div class="settings-form-block settings-form-inline-element">
                        <label for="">Телефон</label>
                        <input type="text" placeholder="+7 999 999 99 99">
                        <input type="radio">
                    </div>
                    <div class="settings-form-block">
                        <label for="">Дополнительный телефон</label>
                        <input type="text" placeholder="+7 999 999 99 99">
                        <input type="radio">
                    </div>
                </div>
                <button>Сохранить изменения</button>
            </div>
        </section>
    </section>
    @endsection
