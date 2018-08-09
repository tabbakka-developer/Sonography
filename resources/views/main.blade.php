<html>
<head>
    <title>@yield('title')</title>
    @include('additional.css_links')
</head>
<body>

@include('additional.top_menu')

@yield('index')

@include('additional.footer_index')

</body>
</html>