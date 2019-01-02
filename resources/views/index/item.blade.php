@extends('main')
@section('title')
    Item
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index/ipage.css') }}">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/items_js/item.js') }}"></script>
@endsection

@section('index')

    @include('additional.breadcrumb')
    <div class="ipage-main">
        <div class="ipage-wrapper">
            @include('additional.side_menu')

            <div class="ipage">
                <div class="my-gallery">
                    <ul class="all-images">
                        <li><img class="thumb" src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png') }}"></li>
                        <li><img class="thumb" src="{{ asset('img/equip34.png') }}"></li>
                        <li><img class="thumb" src="{{ asset('img/global_DGR-C2BB2J-US_001_Front_white.png') }}"></li>
                        <li><img class="thumb" src="{{ asset('img/global_DGR-C2BB2J-US_001_Front_white.png') }}"></li>
                        <li><img class="thumb" src="{{ asset('img/global_DGR-C2BB2J-US_001_Front_white.png') }}"></li>
                        <li><img class="thumb" src="{{ asset('img/global_DGR-C2BB2J-US_001_Front_white.png') }}"></li>
                        <li><img class="thumb" src="{{ asset('img/global_DGR-C2BB2J-US_001_Front_white.png') }}"></li>
                    </ul>
                    <div class="active-image">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png') }}" class="img-active">
                        </div>
                        <div class="item-name">SG Healthcare Jumong E</div>
                    </div>
                </div>
                <div class="item-description-column">
                    <div class="item-description">
                        <div class="description-header">Описание</div>
                        <p class="description">Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </p>
                    </div>

                    <div class="compare">
                        <p class="compare-text">Добавить в сравнение</p>
                        <div class="compare-btn">УЗНАТЬ КП</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
