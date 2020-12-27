<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: flex;
                flex-direction: column;
                font-weight: 100;
                font-family: 'Lato';
            }

            .header {
                display: flex;
                justify-content: center;
            }

            .container {
                text-align: center;
                justify-content: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <footer>
            &copy; Copyright
        </footer>
    </body>
</html>