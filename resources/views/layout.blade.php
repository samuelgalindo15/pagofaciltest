<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pago Facil</title>
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/bootstrap-theme.min.css') !!}
        {!! Html::script('js/jquery.min.js')!!}
        {!! Html::script('js/bootstrap.min.js')!!}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
