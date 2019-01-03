<template>
    <div class="wrapper">
        <router-link to="/category/uzi" class="item item-2" data-url="uzi">
            <div class="item-header">
                УЗИ Аппараты
            </div>
            <div class="item-image">
                <img src="/img/logo_uzi.png">
            </div>
        </router-link>

        <router-link to="/category/rentgens" class="item item-3"  data-url="rentgens">
            <div class="item-header">
                Рентгены
            </div>
            <div class="item-image">
                <img src="/img/rent_logo.png">
            </div>
        </router-link>

        <router-link to="/category/endoscopes" class="item item-4"  data-url="endoscopes">
            <div class="item-header">
                Эндоскопы
            </div>
            <div class="item-image">
                <img src="img/logo_endo.png">
            </div>
        </router-link>

        <router-link to="/category/reanim" class="item item-5"  data-url="reanim">
            <div class="item-header">
                Реанимация
            </div>
            <div class="item-image">
                <img src="img/reanim_logo.png">
            </div>
        </router-link>
    </div>
</template>

<script>
    export default {
        name: "Home"
    }
</script>

<style scoped>
    * {
        font-family: "Segoue UI", sans-serif !important;
    }
    a {
        text-decoration: none;
    }
    @import "/css/index/index.css";
</style>
