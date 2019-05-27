<form class="resume-main-form" action="">
    <div class="form-group">
        <label for="">Имя</label>
        <input type="text" placeholder="Имя">
    </div>
    <div class="form-group">
        <label for="">Фамилия</label>
        <input type="text" placeholder="Фамилия">
    </div>
    <div class="form-group">
        <label for="">Пол</label>
        <div class="input-group-inline">
            <div class="radio-item">
                <input type="radio" id="ritema" name="ritem" value="ropt1">
                <label class="radio" for="ritema">Муж</label>
            </div>
            <div class="radio-item">
                <input type="radio" id="ritemb" name="ritem" value="ropt2">
                <label class="radio" for="ritemb">Жен</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Дата рождения</label>
        <input type="date" placeholder="Фамилия">
    </div>
    <div class="form-group">
        <label for="">Образование</label>
        <select class="form-select long" name="" id="">
            <option value="Saint-Petersburg">Высшее</option>
            <option value="Moscow">Неполное высшее</option>
            <option value="Prague">Среднее специальное</option>
            <option value="Prague">Среднее</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Город</label>
        <select class="form-select long" name="" id="">
            <option value="Saint-Petersburg">Санкт-Петербург</option>
            <option value="Moscow">Москва</option>
            <option value="Prague">Прага</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Телефон</label>
        <input type="tel" placeholder="+7">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email">
    </div>
    <div class="form-group">
        <label for="">Разрешение на работу</label>
        <select class="form-select short" name="" id="">
            <option value="Saint-Petersburg">РФ</option>
            <option value="Moscow">Украина</option>
            <option value="Prague">Узбекистан</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Желаемая зарплата</label>
        <input type="text" style="width: 40%;">
        <div class="input-group-inline">
            <div class="radio-item">
                <input type="radio" id="month" name="salary" value="month">
                <label class="radio" for="month">В месяц</label>
            </div>
            <div class="radio-item">
                <input type="radio" id="day" name="salary" value="day">
                <label class="radio" for="day">В день</label>
            </div>
            <div class="radio-item">
                <input type="radio" id="hour" name="salary" value="hour">
                <label class="radio" for="hour">В час</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Желаемые должности <span style="color: #808951;">через запятую</span></label>
        <textarea class="form-text" name="" id="" cols="30" rows="10"></textarea>
    </div>
</form>
