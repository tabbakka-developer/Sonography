let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/category-vue/index_category.js', 'public/js/vue')
    .js('resources/assets/js/app_v2/index.js', 'public/js/app_v2')
    // .js('resources/assets/js/vue/sidebar-vue.js', 'public/js/vue')
    // .js('resources/assets/js/vue/price-slide.vue', 'public/js/vue')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/global.scss', 'public/css')
    .sass('resources/assets/sass/footer.scss', 'public/css/footer')
    .sass('resources/assets/sass/index.scss', 'public/css/index')
    .sass('resources/assets/sass/top.scss', 'public/css/top')
    .sass('resources/assets/sass/news.scss', 'public/css/index')
    .sass('resources/assets/sass/about.scss', 'public/css/index')
    .sass('resources/assets/sass/category.scss', 'public/css/index')
    .sass('resources/assets/sass/sidebar.scss', 'public/css/index')
    .sass('resources/assets/sass/ipage.scss', 'public/css/index');
