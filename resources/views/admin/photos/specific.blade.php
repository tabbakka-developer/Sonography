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

                <div class="row">

                    @foreach($photos as $photo)

                        <div class="card">
                            <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $photo->maker }}</h5>
                                <p class="card-text">Тут будет модель но чуть позже</p>
                            </div>
                        </div>

                    @endforeach

                </div>

            </main>
        </div>
    </div>

@endsection

@push('scripts')

    <script src="{{ asset('js/photos.js') }}"></script>

@endpush
