<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сонографи</title>
    @include('additional.css_links')
</head>
<body>
<div id="app" class="body-wrapper">
    <nav class="top-nav">
        <ul>
            <li>
                <router-link to="/">Главная</router-link>
            </li>
            <li>
                <router-link to="/sales">Акции</router-link>
            </li>
            <li>
                <router-link to="/about">О нас</router-link>
            </li>
            <li>
                <router-link to="/faq">Частые вопросы</router-link>
            </li>
            <li>
                <router-link to="/news">Новости</router-link>
            </li>
            <li>
                <router-link>Поиск</router-link>
            </li>
            <li>
                <router-link to="/compare">Сравнение</router-link>
            </li>
        </ul>
    </nav>
    <router-view></router-view>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script src="{{ asset('js/app_v2/index.js') }}"></script>
</body>
</html>
