<section class="addblock" id="head">
    <div class="main-page-head header-f1">
        <p>Найдите работу в Санкт-Петербурге за 10 минут</p>
    </div>
    <div class="button-block">
        @foreach($categories as $category)
            <a href="{{ route('category', ['name' => $category->name]) }}">
                <button class="select-button">{{ $category->name }}</button>
            </a>
        @endforeach
        <button class="select-button">Все категории</button>
    </div>
    <div class="tab-block">
        <p class="bottom-tab">Все вакансии</p>
        <p class="bottom-tab">Новые</p>
    </div>
</section>
