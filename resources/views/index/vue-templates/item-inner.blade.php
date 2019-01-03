<?php
/**
 * Created by PhpStorm.
 * User: tabbakka
 * Date: 2019-01-03
 * Time: 17:02
 */
?>

@extends('main')
@section('title')
    Товар
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index/ipage.css') }}">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    <script src="{{ asset('js/vue/index_item.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/items_js/item.js') }}"></script>
@endsection

@section('index')

    @include('additional.breadcrumb')
    @include('additional.vue.item-inner')


@endsection
