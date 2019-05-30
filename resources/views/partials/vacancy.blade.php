<section class="vacancy">
    <section class="heading">
        <h3><a href="{{ route('vacancy', ['name' => $vacancy->v_name]) }}">{{ $vacancy->v_name }}</a></h3>
        <h4>От {{ $vacancy->v_wage_from }} рублей {{ $vacancy->v_payment_period }}</h4>
    </section>
    <section class="main">
        <p class="job-description">
            {{ $vacancy->v_description }}
            {{--Яндекс еда - это сервис доставки еды из ресторанов пешими курьерами.--}}
            {{--2 000 рублей в день + чаевые!--}}
        </p>
        <div class="job-conditions">
            <h5>Условия</h5>
            <ol>
                {{ $vacancy->v_conditions }}
                {{--<li>Зарплата 60 000 рублей в месяц (не потолок)</li>--}}
                {{--<li>Гибкий график - смены по 4, 6, 8, 12 часов, возможно совмещение</li>--}}
                {{--<li>Заработок выплачивается на карту раз в неделю</li>--}}
                {{--<li>Выдается бесплатная форма + зимняя парка</li>--}}
            </ol>
        </div>
        <div class="job-requirements">
            <h5>Требования</h5>
            <ol>
                {{ $vacancy->v_responsibilities }}
                {{--<li>Знание русского языка, умение пользоваться телефоном</li>--}}
                {{--<li>Возможно без опыта</li>--}}
            </ol>
        </div>
    </section>
    <section class="bottom">
        <p class="bottom-company-info">{{ $vacancy->c_name }}</p>
        <p class="bototm-sity">{{ $vacancy->v_address }}</p>
        <p class="bottom-seens">72 просмотра</p>
        <p class="bottom-date">Сегодня в 21.30</p>
    </section>
</section>
