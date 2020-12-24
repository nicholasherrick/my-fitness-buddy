<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
        <header class="header">
            <h1>@yield('title')</h1>
        </header>

        <main class="container">
            <div class="content">
                @yield('content')
            </div>
        </main>
    </body>
</html>
