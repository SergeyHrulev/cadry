<template>
    <section class="modal-register-form" v-bind:class="{ show: isActive }" @open="openRegister">
        <section id="register-form" class="search-occupation">
            <div id="reg-form-header">
                <h3>Регистрация <span id="close-button" @click="closeWindow" style="float: right;">X</span></h3>
                <p>Уже есть профиль? <a href="">Войдите</a></p>
                <div class="helper-block">
                    Зарегистрируйтесь, чтобы разместить резюме и отправлять отклики на вакансии.
                </div>
            </div>
            <div class="form-section">
                <div class="avatar-form">
                    <div class="avatar-form-input">
                        <img src="img/icons/avatar.png" alt="">
                    </div>
                </div>
                <div class="form-block">
                    <div class="form-group">
                        <label for="role">Какова ваша роль?</label>
                        <div class="input-group-inline">
                            <div class="radio-item">
                                <input type="radio" id="ritema" name="role" v-model="role" value="1" checked>
                                <label class="radio" for="ritema">Соискатель</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="ritemb" name="role" v-model="role" value="2">
                                <label class="radio" for="ritemb">Работодатель</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Имя</label>
                        <input type="text" name="first_name" v-model="first_name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Фамилия</label>
                        <input type="text" name="last_name" v-model="last_name" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" name="phone" v-model="phone" placeholder="999-999-99-99">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" v-model="email">
                    </div>
                    <div class="form-group">
                        <button @click="sendRegistration">Продолжить</button>
                    </div>
                </div>
                <div style="flex: 1;">

                </div>
            </div>
        </section>
    </section>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "RegisterComponent",
        data(){
            return{
                isActive: true,
                first_name: '',
                last_name: '',
                phone: '',
                email: '',
                role: ''
            }
        },
        methods: {
            openRegister(){
                alert('Emited')
            },
            closeWindow() {
                this.isActive = true
            },
            sendRegistration(){
                axios.post('/register', {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    phone: this.phone,
                    email: this.email,
                    role: this.role
                }).then(res => {
                    if (res == 'success'){
                        this.isActive = true
                    } else {
                        alert('Произошла ошибка, попробуйте еще раз')
                    }
                });
            }
        },
        mounted(){
            this.$root.$on('open', () => {
                this.isActive = false
            })
        }
    }
</script>

<style scoped>
    .show{
        visibility: hidden;
    }
    #close-button{
        width: 20px;
        height: 20px;
    }
    #close-button:hover{
        cursor: pointer;
    }
</style>
