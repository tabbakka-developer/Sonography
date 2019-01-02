<template>
    <div id="app" class="category-wrapper">
        <Menu></Menu>
        <div class="stuff" v-if="products.length">
            <div class="stuff-wrapper">
                <Product
                        v-for="product in products"
                        :key="product.id"
                        :product="product"
                ></Product>
            </div>
        </div>
        <p v-else>В данной категории нет товара</p>
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
                    this.products.push(json.data[0]);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
