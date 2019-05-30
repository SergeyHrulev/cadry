<section class="vacancy" style="max-height: fit-content;">
    <section class="heading">
        <h3>{{ $c_vacancy[0]->v_name }}</h3>
        <h4>От {{ $c_vacancy[0]->v_wage_from }} рублей {{ $c_vacancy[0]->v_payment_period }}</h4>
    </section>
    <section class="main">
        <p class="job-description">
            {{ $c_vacancy[0]->v_description }}
            {{--Яндекс еда - это сервис доставки еды из ресторанов пешими курьерами.--}}
            {{--2 000 рублей в день + чаевые!--}}
        </p>
        <div class="job-conditions">
            <h5>Условия</h5>
            {{ $c_vacancy[0]->v_conditions }}
            {{--<ol>--}}
                {{--<li>Зарплата 60 000 рублей в месяц (не потолок)</li>--}}
                {{--<li>Гибкий график - смены по 4, 6, 8, 12 часов, возможно совмещение</li>--}}
                {{--<li>Заработок выплачивается на карту раз в неделю</li>--}}
                {{--<li>Выдается бесплатная форма + зимняя парка</li>--}}
            {{--</ol>--}}
        </div>
        <div class="job-requirements">
            <h5>Требования</h5>
            {{ $c_vacancy[0]->v_responsibilities }}
            {{--<ol>--}}
                {{--<li>Знание русского языка, умение пользоваться телефоном</li>--}}
                {{--<li>Возможно без опыта</li>--}}
            {{--</ol>--}}
        </div>
    </section>
    <section class="bottom">
        <p class="bottom-company-info">{{ $c_vacancy[0]->c_name }}</p>
        <p class="bototm-sity">{{ $c_vacancy[0]->v_address }}</p>
        <p class="bottom-seens">72 просмотра</p>
        <p class="bottom-date">Сегодня в 21.30</p>
    </section>
    <section style="    border-top: 2px solid #F3F6F9;
    padding: 15px 0;">
            <button class="save-cv" style="width: 100%;">Откликнуться на вакансию</button>
    </section>
</section>
