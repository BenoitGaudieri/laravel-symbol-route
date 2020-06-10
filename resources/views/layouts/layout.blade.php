<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel first test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .flex-grow {
            flex-grow: 1;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .header {
            font-size: 18px;
        }

        .content {
            font-size: 20px;
        }

        .step h3 {
            text-align: left;
        }

        .command {
            font-style: italic;
        }

        .path {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper full-height">
        <header class="header">
            <div class="links flex-center">
                <a href="/">Home</a>
                <a href="/recap">Recap</a>
                <a href="/">Home</a>
                <a href="/recap">Recap</a>
                <a href="/">Home</a>
                <a href="/recap">Recap</a>
                <a href="/">Home</a>
                <a href="/recap">Recap</a>
            </div>
        </header>

        @yield("content")

        <footer class="footer flex-center">
            Made with Laravel and 🧡 by Benoit Gaudieri
        </footer>
    </div>
    
</body>
</html>