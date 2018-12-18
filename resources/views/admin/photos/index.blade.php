@extends('admin.additional.main')

@section('title')
    Фото-галлерея
@endsection

@section('app-content')


    <div class="container-fluid">
        <div class="row">
            @include('admin.additional.sidebar', [
                'photos' => true
            ])
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="row">
                    <h1 class="h2">Фото-галлерея</h1>
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

                <div class="col-md-5 mb-5">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Категории</span>
                        <span class="badge badge-secondary badge-pill">4</span>
                    </h4>
                    <div class="list-group mb-3">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">УЗИ</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">{{ $uzi->count() }}</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Рентгены</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">{{ $rentgens->count() }}</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Эндоскопы</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">{{ $endoscopes->count() }}</span>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Реанимация</h6>
                                {{--<small class="text-muted">Brief description</small>--}}
                            </div>
                            <span class="text-muted">{{ $reanim->count() }}</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between">
                            <span>Всего фото</span>
                            <strong>{{ $total }}</strong>
                        </a>
                    </div>

                    <form enctype="multipart/form-data" class="card p-2" action="{{ action('Admin\PhotosController@store') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Категория:
                                </span>
                                </div>
                                <select class="custom-select" id="categoryInput" name="category" required>
                                    <option selected> -</option>
                                    <option value="uzi">УЗИ</option>
                                    <option value="rentgens">Рентгены</option>
                                    <option value="endoscopes">Эндоскопы</option>
                                    <option value="reanim">Реанимация</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Производитель
                                    </span>
                                </div>
                                <input id="prod_maker" type="text" class="form-control" name="maker">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Фото</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photos" name="photos[]" multiple
                                           required>
                                    <label class="custom-file-label" for="photos">Выбрать</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary">
                            <span data-feather="upload"></span>
                            Загрузить
                        </button>
                    </form>
                </div>

                {{--<div class="row">--}}
                    {{--<div class="col-md-5">--}}
                        {{----}}
                    {{--</div>--}}
                {{--</div>--}}

            </main>
        </div>
    </div>


@endsection

@push('scripts')

    <script src="{{ asset('js/photos.js') }}"></script>

@endpush
