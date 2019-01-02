<?php
/**
 * Created by PhpStorm.
 * User: tabbakka
 * Date: 2019-01-02
 * Time: 16:13
 */
?>

@extends('main')
@section('title')
    УЗИ
@endsection

@section('css')
    <link href="{{ asset('css/index/category.css') }}" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    <script src="{{ asset('js/vue/sidebar-vue.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sidebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/items_js/item.js') }}"></script>
@endsection

@section('index')

    @include('additional.breadcrumb')
    @include('additional.vue.categoryInner')


@endsection
