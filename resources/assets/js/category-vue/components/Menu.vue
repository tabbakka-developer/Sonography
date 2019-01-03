<template>
    <div class="sidebar">
        <button class="dropdown-btn">
            <span>Фирма</span>
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <CheckBox
                v-for="(firm, index) in firms"
                :key="index"
                :firm="firm"
            >

            </CheckBox>
        </div>

        <button class="dropdown-btn">Уровень
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <CheckBoxLevel
                    v-for="(level, index) in status"
                    :key="index"
                    :level="level"
                ></CheckBoxLevel>
        </div>

        <button class="dropdown-btn">Качество
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <CheckBoxQuality
                    v-for="(quality_obj, index) in quality"
                    :key="index"
                    :quality="quality_obj"
            >

            </CheckBoxQuality>
        </div>

        <button class="dropdown-btn">Страна
            <i class="fas fa-plus"></i>
        </button>
        <div class="dropdown-container">
            <CheckBoxCountry
                    v-for="(country, index) in countries"
                    :key="index"
                    :country="country"
            >

            </CheckBoxCountry>
        </div>

        <!--<button class="dropdown-btn">Сортировка-->
            <!--<i class="fas fa-plus"></i>-->
        <!--</button>-->
        <!--<div class="dropdown-container">-->
            <!--<a href="#">Link 1</a>-->
            <!--<a href="#">Link 2</a>-->
            <!--<a href="#">Link 3</a>-->
        <!--</div>-->

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
    import CheckBoxCountry from "./CheckBoxCountry";
    import CheckBoxQuality from "./CheckBoxQuality";
    import CheckBoxLevel from "./CheckBoxLevel";
    export default {
        name: "Menu",
        components: {CheckBoxLevel, CheckBoxQuality, CheckBoxCountry, CheckBox},
        data: function () {
            return {
                firms: [],
                countries: [],
                quality: [],
                status: [],
            };
        },
        created() {
            fetch('/api/products/info?category=uzi')
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Error getting data');
                    }
                })
                .then((json) => {
                    this.firms.push.apply(this.firms, json.data.brands);
                    this.countries.push.apply(this.countries, json.data.countries);
                    this.quality.push.apply(this.quality, json.data.qualities);
                    this.status.push.apply(this.status, json.data.levels);
                    console.log(this.status);
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    }
</script>

<style scoped>

</style>
