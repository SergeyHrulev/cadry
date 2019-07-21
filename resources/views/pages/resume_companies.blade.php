@extends('layouts.app')
@section('content')
    <section class="site-pages">
        <section class="left-main-block">
            <section class="block companies">
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
                <div class="company-block">
                    <div class="avatar"></div>
                    <div>Авито</div>
                </div>
            </section>
        </section>
        <aside id="search">
            <div class="block">
                <form action="">
                    <label for="">Поиск</label>
                    <input type="text">
                    <label for="">Сортировка по популярности</label>
                    <input type="text">
                    <button>Применить</button>
                </form>
            </div>
            @include('partials.advertizing')
        </aside>
    </section>
    @endsection
