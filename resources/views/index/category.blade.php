@extends('main')
@section('title')
    УЗИ
@endsection

@section('css')
    <link href="{{ asset('css/index/category.css') }}" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/items_js/item.js') }}"></script>
@endsection

@section('index')

    @include('additional.breadcrumb')

    <div class="category-main">
        <div class="category-wrapper">
            @include('additional.side_menu')
            <div class="stuff">
                <div class="stuff-wrapper">

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                    <div class="element">
                        <div class="element-name">
                            Название
                        </div>
                        <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png')}}" class="element-img">
                        <a href="/item" class="element-url">Подробнее</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
