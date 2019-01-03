<template>
    <div class="element">
        <div class="element-name">
            {{ productName }}
        </div>
        <img :src="productThumb" class="element-img">
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
        },
        data() {

            let fPath = "";

            if (this.product.photos.length) {
                fPath = "https://сонографи.рф" + this.product.photos[0].path;
                console.log(fPath);
            }

            return {
                productName: this.product.brand + " " + this.product.model,
                productThumb: fPath
            }
        }
    }
</script>

<style lang="scss" scoped>

    .element {
        padding: 15px 15px 30px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        width: 250px;
        height: 300px;
        text-align: center;
        float: left;
        background-color: white;
        margin: 10px;
    }

    .element-name {
        color: #49BDA9;
    }

    .element-img {
        width: 100%;
        webkit-filter: grayscale(100%); /* Ch 23+, Saf 6.0+, BB 10.0+ */
        filter: grayscale(100%); /* FF 35+ */
    }

    .element-img:hover {
        -webkit-filter: grayscale(0%); /* Ch 23+, Saf 6.0+, BB 10.0+ */
        filter: grayscale(0%); /* FF 35+ */
    }

    .element-url {
        text-decoration: none;
        color: black;
    }

</style>
