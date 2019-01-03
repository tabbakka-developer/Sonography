import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./components/Home";
import Sales from "./components/Sales";
import About from "./components/About";
import Faq from "./components/Faq";
import News from "./components/News";
import Compare from "./components/Compare";
import Category from "./components/Category";

Vue.use(VueRouter);

var router = new VueRouter({
    routes: [
        { path: '/', component: Home },
        { path: '/sales', component: Sales },
        { path: '/about', component: About },
        { path: '/faq', component: Faq },
        { path: '/news', component: News },
        { path: '/compare', component: Compare },

        { path: '/category/:name', name: 'category', component: Category },
    ]
});

new Vue({
    el: "#app",
    router: router
});
