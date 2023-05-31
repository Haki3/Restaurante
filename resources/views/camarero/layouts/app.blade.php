<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Manager</title>

    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Estilos personalizados -->
</head>
<body>
    

    <div class="banner">
        <h1>RESTAURANTE      MANAGER CAMARERO</h1>
    </div>

    <div class="container py-4">
        <h1 class="titulo-seccion">@yield('title')</h1>

        @yield('content')
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fafafa;
        }

        .banner {
            background-color: rgb(0, 94, 255);
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
        }

        .banner h1 {
            font-size: 48px;
            font-weight: 700;
            margin: 0;
        }

        .banner p {
            font-size: 24px;
            margin: 20px 0 0 0;
        }

        .navbar {
            border-bottom: 0px solid rgba(0, 0, 0, 0.1);
            padding: 0 20px;
        }

        .navbar-brand {
            font-size: 32px;
            font-weight: 700;
        }

        .nav-link {
            font-size: 18px;
            font-weight: 400;
            border-bottom: 0px solid transparent;
        }

        .nav-link:hover {
            border-color: #fff;
        }

        .titulo-seccion {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .card{
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
    padding: 30px;
}

.card-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
}

.card-text {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 0;
}
</style> </body> </html>