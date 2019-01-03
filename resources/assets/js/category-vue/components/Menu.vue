<template>
    <div class="sidebar">
        <button class="dropdown-btn">
            <span>Фирма</span>
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <CheckBox
                v-for="firm in firms"
                :name="firm"
            >

            </CheckBox>
        </div>

        <button class="dropdown-btn">Статус
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <button class="dropdown-btn">Качество
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <button class="dropdown-btn">Страна
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <button class="dropdown-btn">Сортировка
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <button class="dropdown-btn">Диапозон цены
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <div class="price-block">
                <span class="price-min"></span>
                <span class="price-separ">-</span>
                <span class="price-max"></span>
            </div>

            <div id="slider"></div>
        </div>
    </div>
</template>

<script>
    import CheckBox from "./CheckBox";
    export default {
        name: "Menu",
        components: {CheckBox},
        props: {
            products: {
                type: Array,
                required: true
            }
        },
        data: function () {
            let firms = [];
            // let statuses = [];
            let qualities = [];
            let countries = [];
            let sorts = [];
            let prices = [];

            for (let product in this.products) {
                firms.push(product.brand);
                qualities.push(product.quality);
                countries.push(product.country);
            }

            return {
                firms,
                qualities,
                countries
            };
        }
    }
</script>

<style scoped>

</style>
