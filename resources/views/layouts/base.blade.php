<html>
<head>
    <meta charset="UTF-8">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>@yield('title') :: Объявления</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}"
           class="navbar-brand mr-auto ">Главная</a>
        @guest
        <a href="{{ route('register') }}"
           class="nav-item nav-link ">Регистрация</a>
        <a href="{{ route('login') }}"
           class="nav-item nav-link">Вход</a>
        @endguest
        @auth
        <a href="{{ route('home') }}"
           class="nav-item nav-link">Мои объявления</a>
        <form action="{{ route('logout') }}" method="POST"
              class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger"
                   value="Выход">
        </form>
        @endauth
    </nav>
</div>
<div class="container">
    <h1 class="my-3 text-center">Объявления</h1>
    @yield('main')
</div>
</body>
</html>
