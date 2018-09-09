<html>
<head>
    <title>@yield('title')</title>
    @include('additional.css_links')
</head>
<body>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    @yield('scripts')
<div class="body-wrapper">
    @include('additional.top_menu')
    @yield('index')
    @yield('footer')
</div>
</body>
</html>