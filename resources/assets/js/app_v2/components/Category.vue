<template>
    <div class="category-wrapper">
        <Menu></Menu>
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
    import Menu from "./category/Menu";
    import Product from "./category/Product";
    export default {
        name: "Category",
        components: {Product, Menu},
        created() {
            let category = null;
            if (this.$route.params.name) {
                category = this.$route.params.name;
            } else {
                console.log(404);
            }

            fetch('/api/products/' + category)
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error;
                    }
                })
                .then((json) => {
                    this.products.push.apply(this.products, json.data);
                })
                .catch((error) => {
                    console.log(error);
                });

        },
        data() {
            return {
                products: [],
                prices_rub: [],
                prices_usd: []
            }
        }
    }
</script>

<style scoped>

</style>
