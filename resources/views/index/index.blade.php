@extends('main')

@section('index')

    <div class="wrapper">
        {{--<div class="item item-1">--}}
            {{--Отступ--}}
        {{--</div>--}}

        <div class="item item-2">
            <div class="item-header">
                УЗИ Аппараты
            </div>
            <div class="item-image">
                <img src="{{ asset('img/equip34.png') }}">
            </div>
        </div>

        <div class="item item-3">
            <div class="item-header">
                Рентгены
            </div>
            <div class="item-image">
                <img src="{{ asset('img/global_DGR-C2BB2J-US_001_Front_white.png') }}">
            </div>
        </div>

        <div class="item item-4">
            <div class="item-header">
                Эндоскопы
            </div>
            <div class="item-image">
                <img src="{{ asset('img/toshibamedicalaplioi600ultrasound-2.png') }}">
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