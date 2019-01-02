@extends('main')

@section('css')
    <link href="{{ asset('css/index/index.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection

@section('index')

    <div class="wrapper">
        {{--<div class="item item-1">--}}
            {{--Отступ--}}
        {{--</div>--}}

        <div class="item item-2" data-url="{{ action('PageController@uzi') }}">
            <div class="item-header">
                УЗИ Аппараты
            </div>
            <div class="item-image">
                <img src="{{ asset('img/logo_uzi.png') }}">
            </div>
        </div>

        <div class="item item-3"  data-url="{{ action('PageController@rentgens') }}">
            <div class="item-header">
                Рентгены
            </div>
            <div class="item-image">
                <img src="{{ asset('img/rent_logo.png') }}">
            </div>
        </div>

        <div class="item item-4"  data-url="{{ action('PageController@endoscopes') }}">
            <div class="item-header">
                Эндоскопы
            </div>
            <div class="item-image">
                <img src="{{ asset('img/logo_endo.png') }}">
            </div>
        </div>

        <div class="item item-5"  data-url="{{ action('PageController@reanim') }}">
            <div class="item-header">
                Реанимация
            </div>
            <div class="item-image">
                <img src="{{ asset('img/reanim_logo.png') }}">
            </div>
        </div>

        {{--<div class="item item-5">--}}
            {{--Отступ и кнопка--}}
        {{--</div>--}}
    </div>

@endsection

@section('footer')
    @include('additional.footer_index')
@endsection
