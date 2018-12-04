@extends('admin.additional.main')

@section('title')
    Товары
@endsection

@section('app-content')

    <div class="container-fluid">
        <div class="row">
            @include('admin.additional.sidebar')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Товары</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Добавить один</button>
                            <button class="btn btn-sm btn-outline-secondary">Добавить таблицу</button>
                        </div>
                    </div>
                </div>

                <h2>Список товара</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Модель</th>
                            <th>Производитель</th>
                            <th>Код товара</th>
                            <th>Страна</th>
                            <th>Отображать</th>
                            <th>Ветеринарное</th>
                            <th>Цена</th>
                            <th>Валюта</th>
                            <th>Показывать цену</th>
                            <th>Рекмоендуемое</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if ($products->count() > 0)

                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->model }}</td>
                                    <td>{{ $product->brand }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->country }}</td>
                                    <td>{{ $product->show_product }}</td>
                                    <td>{{ $product->animals }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->currency }}</td>
                                    <td>{{ $product->show_price }}</td>
                                    <td>{{ $product->recommend }}</td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

@endsection
