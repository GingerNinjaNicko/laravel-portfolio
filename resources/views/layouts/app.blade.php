<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111198791-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-111198791-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Nicko J. Ruddock">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles & assets -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}"> 
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <!-- Javascript files -->
    <script defer
    type="text/javascript" 
    src="{{ mix('/js/app.js') }}">
    </script>
    <!-- Font awesome -->
    <script async src="https://use.fontawesome.com/ab45073717.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="0">
    
    <!-- Invisible top for scrollspy functionality -->
    <div id="top"></div>
    
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
        <div class="container">
            <a href="/#top" class="navbar-brand">
                <h1>
                    NJR
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse-items" aria-controls="nav-collapse-items" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="nav-collapse-items" data-toggle="collapse" data-target="#nav-collapse-items">
                <div class="navbar-nav ml-auto">
                    <a href="/#top" class="nav-item nav-link">
                        Home
                    </a>
                    <a href="/#portfolio" class="nav-item nav-link">
                        Portfolio
                    </a>
                    <a href="/#contact" class="nav-item nav-link">
                        Contact
                    </a>
                </div>
            </div>
        </div> <!-- /.container -->
    </nav>

    @yield('content')

    <footer>
        <div class="container">
            <span>
                Copyright &copy; {{ now()->year }} Nicko J. Ruddock
            </span>
        </div>
    </footer>

</body>
</html>
