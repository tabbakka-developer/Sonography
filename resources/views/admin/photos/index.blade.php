@extends('admin.additional.main')

@section('title')
    Фото-галлерея
@endsection

@section('app-content')


    <div class="container-fluid">
        <div class="row">
            @include('admin.additional.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="row">
                    <h1 class="h2">Фото-галлерея</h1>
                </div>
                <div class="col-12"><br></div>
                <div class="col-md-4 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Категории</span>
                        <span class="badge badge-secondary badge-pill">4</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">УЗИ</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">0</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Рентгены</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">0</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Эндоскопы</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">0</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Реанимация</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Всего фото</span>
                            <strong>0</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>

            </main>
        </div>
    </div>


@endsection
