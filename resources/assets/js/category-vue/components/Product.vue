<template>
    <div class="element">
        <div class="element-name">
            {{ product.name }}
        </div>
        <img v-bind:src="product.thumb" class="element-img">
        <a href="/item" class="element-url">Подробнее</a>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: {
            product: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
