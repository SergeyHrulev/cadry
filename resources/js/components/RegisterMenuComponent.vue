<template>
    <div id="register-profile" style="grid-column: 2/3;">
        <img src="img/icons/avatar.png" alt="" @click="showMenu">
        <div class="profile-menu" v-bind:class="{ profileshow: isHidden }">
            <a :href="cv">Создать резюме</a>
            <a :href="show">Мои резюме</a>
            <a href="#" @click.prevent="logout">Выход</a>
        </div>
        <form ref="form" :action="exit" method="POST" style="display: none;">
        </form>
    </div>
</template>

<script>
    export default {
        name: "RegisterMenuComponent",
        props: ['cv', 'show', 'exit'],
        data(){
            return {
                isHidden: false,
            }
        },
        methods:{
            showMenu(){
                this.isHidden = true
            },
            logout(){
                this.$refs.form.submit()
            }
        }
    }
</script>

<style scoped>
    .profile-menu{
        display: none;
        position: fixed;
        top: 68px;
        background-color: #fff;
        flex-direction: column;
        min-height: 60px;
        padding:10px 40px 10px 10px;
        justify-content: space-around;
    }
    .profile-menu a{
        text-decoration: none;
        padding: 10px;
    }
    .profileshow{
        display: flex;
    }
</style>
