<template>
    <div class="element">
        <div class="element-name">
            {{ productName }}
        </div>
        <img v-bind:src="productThumb" class="element-img">
        <a href="/item" class="element-url">Подробнее</a>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: {
            product: {
                type: Array,
                required: true
            }
        },
        data() {
            return {
                productName: this.product.brand + " " + this.product.model,
                productThumb: "/"
            }
        }
    }
</script>

<style scoped>

</style>
