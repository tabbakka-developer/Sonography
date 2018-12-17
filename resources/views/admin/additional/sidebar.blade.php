<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Сонографи</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{ action('Admin\Auth\LoginController@logout') }}">Выход</a>
        </li>
    </ul>
</nav>


        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Панель <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Заказы
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('Admin\ProductsController@index') }}">
                            <span data-feather="shopping-cart"></span>
                            Продукты
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('Admin\PhotosController@index') }}">
                            <span data-feather="camera"></span>
                            Фото
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Покупатели
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


