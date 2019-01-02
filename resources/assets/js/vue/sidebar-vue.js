

Vue.component('side-bar', {
    template: "<div class=\"sidebar\"></div>",
    data() {
        return {
            prices_rub: [],
            prices_usd: []
        }
    },
    created() {
        fetch('/api/products/prices?category=uzi')
            .then((response) => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Error getting data');
                }
            })
            .then((json) => {
                this.prices_rub.push(json.prices.RUB);
                this.prices_usd.push(json.prices.USD);
                console.log(this.prices_rub);
                console.log(this.prices_usd);
            })
            .catch((error) => {
                console.log(error);
            });
    }
});

new Vue({ el: "#side-var-vue" });
