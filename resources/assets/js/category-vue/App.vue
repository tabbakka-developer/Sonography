<template>
    <div id="app" class="category-wrapper">
        <Menu
            :products="products"
        ></Menu>
        <div class="stuff">
            <div class="stuff-wrapper" v-if="products.length">
                <Product
                        v-for="product in products"
                        :key="product.id"
                        :product="product"
                ></Product>
            </div>
            <div class="stuff-wrapper" v-else>В данной категории нет товара</div>
        </div>
    </div>
</template>

<script>
    import Menu from "./components/Menu";
    import Product from "./components/Product";
    export default {
        name: "App",
        components: {Product, Menu},
        data() {
            return {
                products: [],
                prices_rub: [],
                prices_usd: []
            }
        },
        created() {
            fetch('/api/products/uzi')
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Error getting data');
                    }
                })
                .then((json) => {
                    this.products.push.apply(this.products, json.data);
                    console.log(this.products);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        methods: {

        }
    }
</script>

<style lang="scss" scoped>

    .category-wrapper {
        padding: 5px;
        display: flex;
        justify-content: space-between;

        .stuff {
            width: 75%;
            padding-top: 5px;

            .stuff-wrapper {
                padding: 0 0 0 15px;
                height: calc(100% - 100px);
                overflow-x: auto;
            }
        }
    }

</style>
