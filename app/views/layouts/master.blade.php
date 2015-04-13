<html>
    <head>
            <title>AS GEAUNE TT</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- JQUERY-UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <!-- VELOCITY -->
    <script type="text/javascript" src="/js/velocity.min.js"></script>

    <!-- MATERIALIZE CSS -->
    <link rel="stylesheet" type="text/css" src="/css/materialize.css">
    <script type="text/javascript" src="/js/materialize.min.js"></script>

      <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

    <!-- CKEDITOR -->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    
    <!-- MES JS -->

    <script type="text/javascript" src="/js/asgtt.js"></script>
    </head>
    <body class="row">
        <div id="header" class="col s12 m12 l12">
            @include('general.header')
        </div>
        <div id="menu" class="col s12 m12 l12">
            @if(Auth::check())
                @include('backend.menu')
            @else
                @include('general.menu')
            @endif

        </div>
        <div id="content">
            @section('content')
                Bienvenue sur le site de l'AS Geaune TT
            @show
        </div>

    </body>
</html>