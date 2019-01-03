<template>
    <div class="element" v-bind:style="{ display: isDisplay }">
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
                fPath = this.product.photos[0].path;
                fPath = fPath.replace('public', 'storage');
                fPath = fPath.replace('photos', 'thumbs');
                console.log(fPath);
            }

            return {
                productName: this.product.brand + " " + this.product.model,
                productThumb: "https://сонографи.рф/" +  fPath,
                isDisplay: 'flex'
            }
        },
        mounted() {
            this.$root.$on('checkBoxChecked', (brand) => {
                if (this.product.brand === brand) {
                    if (this.isDisplay === 'flex') {
                        this.isDisplay = 'none';
                    } else {
                        this.isDisplay = 'flex';
                    }
                }
            });
            this.$root.$on('checkBoxCountryChecked', (country) => {
                if (this.product.country === country) {
                    if (this.isDisplay === 'flex') {
                        this.isDisplay = 'none';
                    } else {
                        this.isDisplay = 'flex';
                    }
                }
            });
            this.$root.$on('checkBoxQualityChecked', (quality) => {
                if (this.product.quality === quality) {
                    if (this.isDisplay === 'flex') {
                        this.isDisplay = 'none';
                    } else {
                        this.isDisplay = 'flex';
                    }
                }
            });
            this.$root.$on('checkBoxLevelChecked', (level) => {
                if (this.product.level === level) {
                    if (this.isDisplay === 'flex') {
                        this.isDisplay = 'none';
                    } else {
                        this.isDisplay = 'flex';
                    }
                }
            });
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
