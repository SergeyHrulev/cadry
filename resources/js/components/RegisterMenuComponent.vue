<template>
    <div id="register-profile" style="grid-column: 2/3;">
        <img src="img/icons/avatar.png" alt="" @click="showMenu">
        <div class="profile-menu" v-bind:class="{ profileshow: isHidden }">
            <a :href="profile">Профиль</a>
            <a :href="exit">Выход</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RegisterMenuComponent",
        props: ['profile', 'exit'],
        data(){
            return {
                isHidden: false,
            }
        },
        methods:{
            showMenu(){
                this.isHidden = true
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
    }
    .profileshow{
        display: flex;
    }
</style>
