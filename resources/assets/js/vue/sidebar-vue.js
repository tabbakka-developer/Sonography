Vue.component('side-bar', {
    template: "<div class=\"sidebar\"></div>",
    data: {
        prices: []
    },
    created() {
        fetch('api/products/prices?category=uzi')
            .then((response) => {
                if (response.success) {
                    return response.json();
                } else {
                    throw new Error('Error getting data');
                }
            })
            .then((json) => {
                this.prices.push(json.prices);
                console.log(this.prices);
            })
            .catch((error) => {
                console.log(error);
            });
    }
});


Vue.component('price-slider-block', {
    template: ""
});
