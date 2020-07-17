<!doctype html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<body class="h-100">
   <header>
       <nav class="nav navbar bg-light border-bottom">
           <ul class="">
               <li class="list-unstyled"><a href=""></a></li>
           </ul>
           <ul class="d-flex">
               @guest()
                   <li class="list-unstyled mr-2"><a href="{{url('/')}}">Se connecter</a></li>
               @endguest
               @auth()
                   {{--<li class="list-unstyled mr-2"><a href="">Deconnexion</a></li>--}}
                       @if(Auth::User()->role==1)
                           <li class="list-unstyled mr-2"><a href="{{url('register')}}">Nouveau compte</a></li>
                       @endif
               @endauth
           </ul>
       </nav>
   </header>
   <div class="row m-0 h-100 bg-info">
       @yield('sidebare')
       <div class="col-md-10 bg-light">
           @yield('contenue')
       </div>
   </div>
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>


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
