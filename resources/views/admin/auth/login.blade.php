@extends('admin.additional.main')

@section('custom-include')
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
@endsection

@section('title')
    Вход
@endsection

@section('app-content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Сонографи - панель управления</h5>
                            <form method="POST" class="form-signin" action="{{ action('Admin\Auth\LoginController@login') }}">
                                {{ csrf_field() }}
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                                    <label for="inputEmail">Email</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
                                    <label for="inputPassword">Пароль</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Вход</button>

                                @if ($errors->any())
                                    <br><hr class="my-4"><br>
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
