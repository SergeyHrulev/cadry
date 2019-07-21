@extends('layouts.app')
@section('content')
    <section class="lk-employer">
        @include('partials.employer.aside')
        <section class="response-content-resume employer-content">
            <h2>Добавление вакансии</h2>
            <div>
                <form action="">
                    <div class="settings-form-block">
                        <label for="">Название компании или юрлица</label>
                        <input type="text" placeholder="Название">
                    </div>
                    <div class="settings-form-block">
                        <label for="">Кого вы ищете</label>
                        <input type="text" placeholder="Название">
                    </div>
                    <div class="settings-form-textarea">
                        <label for="">Текст вакансии</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="settings-form-textarea">
                        <label for="">Условия</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="settings-form-textarea">
                        <label for="">Обязанности</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="settings-form-block">
                        <label for="">Адрес вакансии</label>
                        <input type="text" placeholder="Название">
                    </div>
                    <div>
                        <label for="">Зарплата</label>
                        <div class="settings-form-inline">
                            <div class="settings-form-block settings-form-inline-element settings-form-range">
                                <label for="">От</label>
                                <input type="text">
                            </div>
                            <div class="settings-form-block settings-form-inline-element settings-form-range">
                                <label for="">До</label>
                                <input type="text">
                            </div>
                            <div class="settings-form-block settings-form-inline-element custom-select">
                                <select name="" id="">
                                    <option value="">В месяц</option>
                                    <option value="">В день</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="settings-form-block">
                        <p>Дополнительные условия</p>
                        <label class="settings-container">Опыт не требуется
                            <input type="checkbox">
                            <span class="settings-checkmark"></span>
                        </label>
                        <label class="settings-container">Сменный график
                            <input type="checkbox">
                            <span class="settings-checkmark"></span>
                        </label>
                        <label class="settings-container">Неполный рабочий день
                            <input type="checkbox">
                            <span class="settings-checkmark"></span>
                        </label>
                        <label class="settings-container">Вахтовый метод работы
                            <input type="checkbox">
                            <span class="settings-checkmark"></span>
                        </label>
                        <label class="settings-container">Подработка
                            <input type="checkbox">
                            <span class="settings-checkmark"></span>
                        </label>
                        <label class="settings-container">Доступно для несовершеннолетних
                            <input type="checkbox">
                            <span class="settings-checkmark"></span>
                        </label>
                    </div>
                    <div class="settings-form-button-block">
                        <button>Добавить вакансию</button>
                        <p>Публикуя вакансию, вы соглашаетесь с правилами размещения</p>
                    </div>
                </form>
            </div>
        </section>
    </section>
    @endsection
