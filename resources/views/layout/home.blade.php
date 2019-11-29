<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Stock</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/glyphicon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="nav navbar-header">
                    <a class="navbar-brand" href="/products">
                        Stock Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('ProductController@index') }}">List</a></li>
                    <li><a href="{{ action('ProductController@news') }}">New</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')

        <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
        </footer>

    </div>

</body>
</html>
