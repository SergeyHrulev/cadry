<section class="content-card">
    <section class="content-card-header-section">
        <h3 class="content-card-heading"><a href="{{ route('vacancy', ['name' => $vacancy->v_name]) }}">{{ $vacancy->v_name }}</a></h3>
        <h4 class="content-card-subheading">От {{ $vacancy->v_wage_from }} рублей {{ $vacancy->v_payment_period }}</h4>
    </section>
    <section class="content-card-content-section">
        <p class="">
            {{ $vacancy->v_description }}
            {{--Яндекс еда - это сервис доставки еды из ресторанов пешими курьерами.--}}
            {{--2 000 рублей в день + чаевые!--}}
        </p>
        <div class="">
            <h5 class="content-card-block-headers">Условия</h5>
            {{--<ol>--}}
                {{ $vacancy->v_conditions }}
                {{--<li>Зарплата 60 000 рублей в месяц (не потолок)</li>--}}
                {{--<li>Гибкий график - смены по 4, 6, 8, 12 часов, возможно совмещение</li>--}}
                {{--<li>Заработок выплачивается на карту раз в неделю</li>--}}
                {{--<li>Выдается бесплатная форма + зимняя парка</li>--}}
            {{--</ol>--}}
        </div>
        <div class="">
            <h5 class="content-card-block-headers">Требования</h5>
            {{--<ol>--}}
                {{ $vacancy->v_responsibilities }}
                {{--<li>Знание русского языка, умение пользоваться телефоном</li>--}}
                {{--<li>Возможно без опыта</li>--}}
            {{--</ol>--}}
        </div>
    </section>
    <section class="content-card-footer">
        <div class="content-card-footer-left">
            <p class="content-card-company">{{ $vacancy->c_name }}</p>
            <p class="content-card-company-address">{{ $vacancy->v_address }}</p>
        </div>
        <div class="content-card-footer-right">
            <p class="">72 просмотра</p>
            <p class="">Сегодня в 21.30</p>
        </div>


    </section>
</section>
