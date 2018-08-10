<html>
<head>
    <title>@yield('title')</title>
    @include('additional.css_links')
</head>
<body>
<div class="body-wrapper">
    @include('additional.top_menu')
    @yield('index')
    @include('additional.footer_index')
</div>
</body>
</html>