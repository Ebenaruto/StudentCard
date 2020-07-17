<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Carte d'Etudiant</title>
        <link rel="stylesheet" href="assets/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/mdb.min.css">
        <link rel="stylesheet" href="assets/css/styl.css">
        <script src="assets/js/materialize.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mdb.min.js"></script>
    </head>
    <body class="text-center border border-light p-5">
        <div id="app">


            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>

