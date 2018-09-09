@extends('main')

@section('title')
        О нас
@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}" type="text/javascript"></script>
@endsection
@section('index')

    <div class="about-logo">

    </div>

    <section class="intro"></section>

    {{--Sonography - это оптимальное предложение на рынке медицинской визуализации.--}}

    <div class="cont ">
        <div data-target='1' class="slide slide--1">
            <div class="slide__text slide__text--1">
                30 - заводов - изготовителей медицинского оборудования представлены напрямую.
            </div>
            <div class="slide__bg"></div>
            <div class="slide__img">
                <div class="slide__close"></div>
                <div class="slide__img-wrapper">

                </div>
            </div>
            <div class="slide__bg-dark"></div>
            <a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
                <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
            </a>
        </div>

        <div data-target='2' class="slide slide--2">
            <div class="slide__text">
                20 %  - экономии при обращении к нам
            </div>
            <div class="slide__bg"></div>
            <div class="slide__img">
                <div class="slide__close"></div>
                <div class="slide__img-wrapper">

                </div>
            </div>
            <div class="slide__bg-dark"></div>
            <a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
                <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
            </a>
        </div>

        <div data-target='3' class="slide slide--3">
            <div class="slide__text">
                80 % - оборудования всегда в наличии.
            </div>
            <div class="slide__bg"></div>
            <div class="slide__img">
                <div class="slide__close"></div>
                <div class="slide__img-wrapper">

                </div>
            </div>
            <div class="slide__bg-dark"></div>
            <a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
                <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
            </a>
        </div>

        <div data-target='4' class="slide slide--4">
            <div class="slide__text">
                5 - демонстрационных офисов в Москве.
            </div>
            <div class="slide__bg"></div>
            <div class="slide__img">
                <div class="slide__close"></div>
                <div class="slide__img-wrapper">

                </div>
            </div>
            <div class="slide__bg-dark"></div>
            <a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
                <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
            </a>
        </div>

        <div data-target='5' class="slide slide--5">
            <div class="slide__text">
                0 ₽ - Доставка, монтаж, выезд инженера, обучение и гарантия.
            </div>
            <div class="slide__bg"></div>
            <div class="slide__img">
                <div class="slide__close"></div>
                <div class="slide__img-wrapper">

                </div>
            </div>
            <div class="slide__bg-dark"></div>
            <a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
                <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
            </a>
        </div>

    </div>

@endsection