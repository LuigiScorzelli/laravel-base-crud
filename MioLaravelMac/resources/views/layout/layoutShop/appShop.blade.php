<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/shop/style.css">
        <title>
            @if (!empty($title))
                {{ $title }}
            @else
                Titolo base
            @endif
        </title>
    </head>
    <body>
        @include('layout.partials.header')
        @yield('content')
        @include('layout.partials.footer')
    </body>
</html>
