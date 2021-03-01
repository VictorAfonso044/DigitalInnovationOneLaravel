<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>{{ config('app.name') }} :: @yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <div class="bg-contact3">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <div class="container-contact3-form-btn">
                    <img class="logo" src="{{ asset('img/pig.png') }}" alt="logo" width="100px">
                </div>

                <div class="container">
                    @yield('conteudo')
                </div>

            </div>
        </div>
    </div>

</body>

</html>
