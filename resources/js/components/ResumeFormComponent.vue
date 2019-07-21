<template>
    <section class="left-main-block">
        <section class="resume-edit">
            <h2 class="heading">Личные данные</h2>
            <section class="resume-main-content">
                <div class="resume-avatar">
                    <img :src="image" alt="">
                    <input type="file" ref="avatar" style="display: none" v-on:change="handleFileUpload()">
                    <a @click="$refs.avatar.click()">Загрузить</a>
                </div>
                <div class="resume-main-form">
                    <div class="form-group">
                        <label for="">Имя</label>
                        <input type="text" v-model="first_name" name="first_name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <label for="">Фамилия</label>
                        <input type="text" v-model="last_name" name="last_name" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <label for="">Пол</label>
                        <div class="input-group-inline">
                            <div class="radio-item">
                                <input type="radio" v-model="sex" id="ritema" name="ritem" value="мужской">
                                <label class="radio" for="ritema">Муж</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" v-model="sex" sex id="ritemb" name="ritem" value="женский">
                                <label class="radio" for="ritemb">Жен</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Дата рождения</label>
                        <input type="date" v-model="date_of_birth" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <label for="">Образование</label>
                        <select class="form-select long" v-model="education">
                            <option value="начальное">начальное</option>
                            <option value="среднее">среднее</option>
                            <option value="среднее специальное">среднее специальное</option>
                            <option value="неполное высшее">неполное высшее</option>
                            <option value="высшее">высшее</option>
                            <option value="два и более высших">два и более высших</option>
                            <option value="ученая степень">ученая степень</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Город</label>
                        <select class="form-select long" v-model="city_id">
                            <option value="1">Санкт-Петербург</option>
                            <option value="2">Москва</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Телефон</label>
                        <input type="tel" placeholder="+7" v-model="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="">Разрешение на работу</label>
                        <select class="form-select short" v-model="work_permit">
                            <option value="РФ">РФ</option>
                            <option value="Украина">Украина</option>
                            <option value="Узбекистан">Узбекистан</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Желаемая зарплата</label>
                        <input type="text" style="width: 40%;" v-model="wage_level">
                        <div class="input-group-inline">
                            <div class="radio-item">
                                <input type="radio" id="month" name="salary" value="В месяц" v-model="payment_period">
                                <label class="radio" for="month">В месяц</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="day" name="salary" value="В день" v-model="payment_period">
                                <label class="radio" for="day">В день</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="hour" name="salary" value="В час" v-model="payment_period">
                                <label class="radio" for="hour">В час</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Желаемые должности <span style="color: #808951;">через запятую</span></label>
                        <textarea class="form-text" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </section>
        </section>

        <section class="resume-edit">
            <h2 class="heading">Опыт работы</h2>
            <section class="resume-main-content">
                <form class="resume-main-form" action="">
                    <div class="form-group">
                        <label for="">Год работы</label>
                        <input type="text" v-model="date">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">Место работы и обязанности</label>
                            <textarea class="form-text" name="" cols="30" rows="10" v-model="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="add-job" @click.prevent="addJob()">Добавить еще одно место работы</button>
                    </div>
                </form>
            </section>
        </section>
        <section class="resume-edit" style="background-color: transparent;">
            <section class="resume-main-content">
                <form class="resume-main-form" action="">
                    <div class="form-group">
                        <button class="save-cv" @click.prevent="upload">Сохранить изменения</button>
                    </div>
                </form>
            </section>
        </section>
    </section>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "ResumeFormComponent",
        props: ['user'],
        data(){
            return {
                    first_name: this.user.first_name,
                    last_name: this.user.last_name,
                    email: '',
                    sex: '',
                    date_of_birth: '',
                    education: '',
                    city_id: '',
                    phone: '',
                    work_permit: '',
                    wage_level: '',
                    payment_period: '',
                    date: '',
                    description: '',
                    cvs: [],
                    avatar: '',
                    image: '',
            }
        },
        methods:{
            upload(){
                axios.post('/resume-store', {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    sex: this.sex,
                    date_of_birth: this.date_of_birth,
                    education: this.education,
                    city_id: this.city_id,
                    phone: this.phone,
                    work_permit: this.work_permit,
                    wage_level: this.wage_level,
                    payment_period: this.payment_period,
                    cvs: this.cvs,
                })
                    .then(res => {
                        console.log(res.data);
                        this.data = res.data;
                    })
            },

            addJob(){
                axios.post('/cv-store', {
                    date: this.date,
                    description: this.description
                }).then(res => {
                    console.log(res.data.id);
                    this.cvs.push(res.data.id);
                })
            },

            handleFileUpload(){
                this.avatar = this.$refs.avatar.files[0];
                let formData = new FormData();
                formData.append('avatar', this.avatar);

                axios.post('/avatar-store', formData,
                    {
                        headers: {
                            'Content-type' : 'multipart/form-data'
                            }
                    }
                ).then(res => {
                    console.log(res.data);
                    this.image = res.data;
                });
            }
        }
    }
</script>

<style scoped>

</style>
