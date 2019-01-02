<template>
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
</template>

<script>
    export default {
        name: "price-slide"
    }
</script>

<style scoped>

</style>
