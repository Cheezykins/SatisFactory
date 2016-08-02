<!DOCTYPE html>
<html lang="en" class="login-pf">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SatisFactory</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="//fonts.googleapis.com/css?family=Titillium+Web:300,700" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        #brand {
            font-family: 'Titillium Web', sans-serif;
            font-weight: 300;
            color: #3badd6;
            font-size: 32px;
        }

        #brand span {
            font-weight: 700;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
@yield('content')

<!-- JavaScripts -->
<script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>
