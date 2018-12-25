@extends('admin.additional.main')

@section('title')
    Менеджер товаров
@endsection

@section('app-content')


    <div class="container-fluid">
        <div class="row">
            @include('admin.additional.sidebar', [
                'products' => true
            ])

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="row">
                    <h1 class="h2">Менеджер товаров</h1>
                </div>

                <div class="row">
                    @if (count($errors) > 0)
                        <ul class="list-group col-md-5">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="row">
                    @if(session('success-message'))
                        <div class="alert alert-success" role="alert">
                            {!! session('success-message') !!}
                        </div>
                    @endif
                </div>

                <div class="row">

                    <table class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Производитель</th>
                            <th scope="col">Марка</th>
                            <th scope="col">Код товара</th>
                            <th scope="col">Подкатегория</th>
                            <th scope="col">Состояние</th>
                            <th scope="col">Отоброжать на сайте</th>
                            <th scope="col">Ветеринарное</th>
                            <th scope="col">Страна производитель</th>
                            <th scope="col">Класс аппарата</th>
                            <th scope="col">Размер экрана</th>
                            <th scope="col">Объем памяти</th>
                            <th scope="col">Гарантия</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Валюта</th>
                            <th scope="col">В наличии</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Бесплатная доставка</th>
                            <th scope="col">Бесплатный выезд инженера</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($uzi as $prod)
                                <tr>
                                    <th scope="row">{{ $prod->id }}</th>
                                    <td>{{ $prod->brand }}</td>
                                    <td>{{ $prod->model }}</td>
                                    <td>{{ $prod->code }}</td>
                                    <td>{{ $prod->sub_category }}</td>
                                    <td>{{ $prod->quality }}</td>
                                    <td>{{ $prod->show_product }}</td>
                                    <td>{{ $prod->animals }}</td>
                                    <td>{{ $prod->country }}</td>
                                    <td>{{ $prod->level }}</td>
                                    <td>{{ $prod->screen_size }}</td>
                                    <td>{{ $prod->memory }}</td>
                                    <td>{{ $prod->warranty }}</td>
                                    <td>{{ $prod->price }}</td>
                                    <td>{{ $prod->currency }}</td>
                                    <td>{{ $prod->is_have }}</td>
                                    <td>{{ $prod->description }}</td>
                                    <td>{{ $prod->free_delivery }}</td>
                                    <td>{{ $prod->free_engineer }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </main>

        </div>
    </div>

@endsection
