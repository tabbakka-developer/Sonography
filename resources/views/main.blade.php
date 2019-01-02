<html>
<head>
    <title>@yield('title')</title>
    @include('additional.css_links')
</head>
<body>

@include('pre.object')

<div class="body-wrapper">
    @include('additional.top_menu')
    @yield('index')
    @yield('footer')
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

@yield('scripts')

</body>
</html>
