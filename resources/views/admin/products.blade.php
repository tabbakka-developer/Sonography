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
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product }}</td>
                                <td>{{ $product }}</td>
                                <td>{{ $product }}</td>
                                <td>{{ $product }}</td>
                                <td>{{ $product }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

@endsection
