<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name ="csrf-token" content="{{  csrf_token()  }}">
    <style>
        body{
            background-color: rgb(232, 225, 225);
            padding: 20px;
        }
        .navbar{
            margin-bottom: 1px;
        }

        #navbar-menor{
            width: 10px;
            height: 10px;
            margin: 0 auto;
            padding: 0;
        }

    </style>

    <title>@yield('title')</title>
</head>





<body>
    <div class="container">
    @component('component_navbar_menor', [ "current" => $current ])
    @endcomponent
    @component('component_navbar_maior', [ "current" => $current ])
    @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>

    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
