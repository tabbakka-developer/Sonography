<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    @include('admin.additional.include')
    @yield('custom-include')
</head>
<body>

@yield('app-content')


@include('admin.additional.include_footer')
@yield('custom-js')

</body>
</html>
